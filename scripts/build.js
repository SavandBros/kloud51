const { join } = require("path");
const fse = require("fs-extra");
const { exec } = require("child_process");
const { minify } = require("html-minifier")
const fs = require("fs");

const root = process.cwd();
const dist = join(root, "dist");
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
    "RewriteEngine on",
    "RewriteCond %{THE_REQUEST} /([^.]+)\\.html [NC]",
    "RewriteRule ^ /%1 [NC,L,R]",
    "RewriteCond %{REQUEST_FILENAME}.html -f",
    "RewriteRule ^ %{REQUEST_URI}.html [NC,L]",
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
  fs.readdirSync(dist).forEach(file => {
    if (file.endsWith(".html")) {
      console.log(`Minifying ${file}`);
      const filePath = join(dist, file);
      fs.writeFileSync(filePath, minify(fs.readFileSync(filePath, { encoding: "utf-8" }), {
        collapseWhitespace: true,
        removeComments: true,
      }));
    }
  });
};

deleteDist();
copyAssets();
createHtaccess();
compileMD(minifyHTML);
