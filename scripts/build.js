const { join } = require("path");
const fse = require("fs-extra");
const { exec } = require("child_process");
const htmlmin = require("htmlmin");
const fs = require("fs");

const root = process.cwd();
const dist = join(root, "dist");
const src = join(root, "src");
const assets = join(root, "assets");

const deleteDist = () => {
  if (fse.pathExistsSync(dist)) {
    console.log("> deleteDist");
    fse.removeSync(dist);
  }
};

const copyAssets = () => {
  console.log("> copyAssets");
  fse.copySync(assets, join(dist, "assets"));
};

const createHtaccess = () => {
  console.log("> createHtaccess");
  fs.writeFileSync(join(dist, ".htaccess"), [
    'RewriteEngine on',
    'RewriteCond %{THE_REQUEST} /([^.]+)\\.html [NC]',
    'RewriteRule ^ /%1 [NC,L,R]',
    'RewriteCond %{REQUEST_FILENAME}.html -f',
    'RewriteRule ^ %{REQUEST_URI}.html [NC,L]',
  ].join("\n"));
};

const compileMD = (callback) => {
  console.log("> compileMD");
  exec("index-md", (error, stdout, stderr) => {
    if (error || stderr) {
      console.log("Failed to execute index-md");
    }
    if (error) {
      console.log(error.message);
      return;
    }
    if (stderr) {
      console.log(stderr);
      return;
    }
    console.log(stdout);
    callback?.();
  });
};

const minifyHTML = () => {
  console.log("> minifyHTML");
  const html = join(dist, "index.html");
  fs.writeFileSync(html, htmlmin(fs.readFileSync(join(dist, "index.html"), { encoding: "utf-8" })));
};


deleteDist();
copyAssets();
createHtaccess();
compileMD(minifyHTML);
