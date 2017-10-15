<?php
// Connect
$db = new Db();

// Get plans and features
$plans = $db->select("SELECT * FROM plans WHERE hidden=false and type='hosting'");
?>

<!-- Cover -->
<div class="container-fluid cover cover-dark bg-evening">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h1 class="t-bold">Kloud51</h1>
        <h1 class="t-5"><b>Build your own professional website</b></h1>
        <br>
        <a class="btn btn-lg btn-primary br-rad-no" onClick="animateScroll('#plans')">
          Get Started <i class="fa fa-fw fa-arrow-circle-down"></i>
        </a>
      </div>
    </div>
  </div>
</div>

<!-- Web hosting plans -->
<div class="container-fluid bg-1 s-pad-y-hard" id="plans">
  <div class="container">
    <!-- Title -->
    <h1 class="title"><a href="#plans" class="t-dark">Web Hosting Plans</a></h1>
    <hr>
    <!-- Plans -->
    <div class="row s-mar-top">
      <?php foreach ($plans as $plan): ?>
      <div class="plan-wrapper col-md-4 col-sm-6">
        <div class="plan">
          <?php if ($plan["message"]): ?>
          <span class="message" style="background: <?=$plan["color"]?>">
            <?=$plan["message"]?>
          </span>
          <?php endif ?>
          <div class="head" style="border-top-color: <?=$plan["color"]?>">
            <h1><?=$plan["title"]?></h1>
            <p><?=$plan["subtitle"]?></p>
          </div>
          <div class="price" style="color: <?=$plan["color"]?>">
            <div>
              <small>$</small>
              <span><?=$plan["price"]?></span>
              <small>/mo</small>
              <br>
              <small class="renew">$<?=$plan["price_renew"]?>/mo when you renew</small>
            </div>
          </div>
          <div class="detail">
            <p class="grid"><?=nl2br($plan["detail"])?></p>
          </div>
          <div class="order">
            <a href="<?=$plan["button_link"]?>" target="_blank"
              class="btn btn-default <?php if ($plan["featured"]): ?>btn-success t-bold<?php endif ?>">
              <?=$plan["button_label"]?>
            </a>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
    <!-- More plans -->
    <div class="row row-launch">
      <a href="/hosting/business-hosting" class="btn btn-default btn-launch">
        View Business Hosting Plans <i class="fa fa-fw fa-chevron-right"></i>
      </a>
    </div>
  </div>
</div>

<!-- Main features -->
<div class="container s-pad-y-hard">
  <!-- Title -->
  <h1 class="title">Main Features</h1>
  <hr>
  <!-- Feature list -->
  <div class="row s-mar-top text-center">
    <div class="col-md-4">
      <img src="/assets/img/home/creditcard.png" class="feature-image">
      <h2>Money Back Guarantee</h2>
      <h4 height class="o-fade-soft">
        Not fully satisfied with our services? Request a
        refund within 7 days of the initial purchase.
      </h4>
    </div>
    <div class="col-md-4">
      <img src="/assets/img/home/cpanel.png" class="feature-image">
      <h2>Simplified Interface</h2>
      <h4 height class="o-fade-soft">
        cPanel and Softaculous included for that 1-click installation
        in an easy-to-use interface. No coding skill required.
      </h4>
    </div>
    <div class="col-md-4">
      <img src="/assets/img/home/crossroads.png" class="feature-image">
      <h2>Free Migration</h2>
      <h4 height class="o-fade-soft">
        Send us a migration request in the support section,
        we'll handle the dirty work for you.
      </h4>
    </div>
  </div>
</div>

<!-- Hosting apps -->
<div class="container-fluid bg-grad-2">
  <div class="container s-pad-y-hard">
    <!-- Title -->
    <h1 class="title">AWESOME HOSTING APPS</h1>
    <br>
    <!-- Apps -->
    <div class="row">
      <!-- Wordpress -->
      <div class="col-xs-6 col-md-4">
        <a class="app" href="/hosting/wordpress">
          <div class="logo">
            <i class="fa fa-fw fa-wordpress" style="color: #3498db"></i>
          </div>
          <span>WordPress</span>
        </a>
      </div>
      <!-- PrestaShop -->
      <div class="col-xs-6 col-md-4">
        <a class="app" href="/hosting/prestashop">
          <div class="logo">
            <img src="/assets/img/page/prestashop.svg">
          </div>
          <span>PrestaShop</span>
        </a>
      </div>
      <!-- Joomla -->
      <div class="col-xs-6 col-md-4">
        <a class="app" href="/hosting/joomla">
          <div class="logo">
            <i class="fa fa-fw fa-joomla" style="color: #e67e22"></i>
          </div>
          <span>Joomla</span>
        </a>
      </div>
      <!-- SSD VPS -->
      <div class="col-xs-6 col-md-4">
        <a class="app" href="/hosting/ssd-vps">
          <div class="logo">
            <i class="fa fa-fw fa-server"></i>
          </div>
          <span>SSD VPS</span>
        </a>
      </div>
      <!-- WHMCS -->
      <div class="col-xs-6 col-md-4">
        <a class="app" href="/hosting/whmcs">
          <div class="logo">
            <img src="/assets/img/page/whmcs.png">
          </div>
          <span>WHMCS</span>
        </a>
      </div>
      <!-- MyBB -->
      <div class="col-xs-6 col-md-4">
        <a class="app" href="/hosting/mybb">
          <div class="logo">
            <img src="/assets/img/page/mybb.png">
          </div>
          <span>MyBB</span>
        </a>
      </div>
      <!-- MariaDB -->
      <div class="col-xs-6 col-md-4">
        <a class="app" href="/hosting/mariadb">
          <div class="logo">
            <img src="/assets/img/page/mariadb.png">
          </div>
          <span>MariaDB</span>
        </a>
      </div>
      <!-- bbPress -->
      <div class="col-xs-6 col-md-4">
        <a class="app" href="/hosting/bbpress">
          <div class="logo">
            <img src="/assets/img/page/bbpress.png">
          </div>
          <span>bbPress</span>
        </a>
      </div>
      <!-- Softaculous -->
      <div class="col-xs-6 col-md-4">
        <a class="app" href="/hosting/softaculous">
          <div class="logo">
            <img src="/assets/img/page/softaculous.gif" class="img-circle img-softaculous">
          </div>
          <span>Softaculous</span>
        </a>
      </div>
    </div>
    <!-- More text -->
    <h3 class="text-center t-white">More than 300 apps ready to be installed in 1-click</h3>
  </div>
</div>

<!-- Why kloud51 -->
<div class="container-fluid bg-1">
  <div class="container s-pad-y-hard">
    <!-- Title -->
    <h1 class="title">Why Kloud51?</h1>
    <hr>
    <!-- Reasons -->
    <div class="row icon-title">
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-check-circle" style="color: #2ecc71"></i>
          </div>
          <div class="col-sm-9">
            <h3>Quality Hosting</h3>
            <p>
              With a selection of server hardware and infrastructure sourced from
              globally-reputable providers, we guarantee 99.9% uptime 24 hours a day, 7 days a week.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-shield" style="color: tomato"></i>
          </div>
          <div class="col-sm-9">
            <h3>Complete Protection</h3>
            <p>
              We provide anti-DDoS, Firewalls, and Antivirus to protect your data,
              with options for RAID-1 or RAID-10 redundancy for that extra-sensitive information.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-comments" style="color: #9b59b6"></i>
          </div>
          <div class="col-sm-9">
            <h3>Excellent Support</h3>
            <p>
              Having issues? We are dedicated to swiftly resolving issues and will assign
              a technician you help you every step of the way for techniclal help.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-code" style="color: #1abc9c"></i>
          </div>
          <div class="col-sm-9">
            <h3>Constant Development</h3>
            <p>
              We are always improving and developing to add more features and better services.
              Missing something? Let us know so we can work on it!
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-database" style="color: #e67e22"></i>
          </div>
          <div class="col-sm-9">
            <h3>Solid Infrastructure</h3>
            <p>
              Kloud51 servers are being maintained round-the-clock by our technical staff
              and are connected to a global network with over 3 Tbps of total bandwidth.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-bolt" style="color: #3498db"></i>
          </div>
          <div class="col-sm-9">
            <h3>Lightning Performance</h3>
            <p>
              All of our servers feature high-performance hardware with optimized configurations,
              and are constantly being monitored by our developers and admins.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-arrow-up" style="color: #3498db"></i>
          </div>
          <div class="col-sm-9 grid-3">
            <h3>Level up!</h3>
            <p>
              We have resources – CPU, memory, entry processes, I/O – at the ready for when you need them
              (we'll alert you when you're close.) Or you can really stay on top of things through our robust stats
              dashboard. Either way, leveling up is a one-click affair.
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="row">
          <div class="col-sm-3">
            <i class="fa fa-lock" style="color: #e67e22"></i>
          </div>
          <div class="col-sm-9 grid-3">
            <h3>Security</h3>
            <p>
              It’s hard to believe anyone would want to harm your website, but they do. Thankfully, our security team is
              on the job 24/7 to meticulously monitor, thwart suspicious activity and deflect DDoS attacks.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Your questions, out answers -->
<div class="container s-pad-y-hard">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <!-- Ttile -->
      <h1 class="t-bold text-left">Your questions, our answers</h1>
      <br>
      <h2 class="t-bold">How does web hosting work?</h2>
      <p>
        Once you purchase a Web hosting plan, GoDaddy stores your site on one of our servers and
        assigns it a unique DNS. The DNS serves as the address that allows people around the world
        to find and view your website. This unique address is required in order for people to view your site.
        <br><br>
        By purchasing a website hosting package, you're basically buying space on one of our servers.
        It’s similar to the space on a computer’s hard drive, but the server allows your website’s
        files to be accessed from anywhere.
      </p>
      <br>
      <h2 class="t-bold">What kind of web hosting do I need?</h2>
      <p>
        Which one you need depends on what you want to do with your site, like whether you want to create a
        shopping cart, blog or podcast with a specific Web application. If you're not sure if you need Windows
        or Linux, you can always contact Kloud51 hosting support team. We're here to help 24/7.
      </p>
      <br>
      <h2 class="t-bold">What can I use to build my website?</h2>
      <p>
        You can build your website in several different ways – from hand-coding with HTML
        to using a website builder program.
        <br><br>
        If you require a lot of functionality and versatility from your website, you’ll benefit
        from programs and applications that can help you build your site. Our Web hosting plans
        give you access to free, server-side applications that can be used to develop and customize
        your website, including popular Content Management System (CMS) applications like WordPress and Joomla!
      </p>
      <br>
      <h2 class="t-bold">How do I transfer my web pages to your server?</h2>
      <p>
        If you’ve built your website in a HTML editor, like Dreamweaver or Microsoft Expression
        Studio, you have to upload your website files via FTP (File Transfer Protocol).
        We have a built-in FTP File Manager that you can access in our Hosting Control Center.
        <br><br>
        However, if your files are larger than 20 MB, we recommend using the tool FileZilla,
        which works with Windows®, Mac®, and Linux® operating systems, or another third-party FTP client.
      </p>
      <br>
      <h2 class="t-bold">If I already have a website, can I transfer it to your web hosting?</h2>
      <p>
        Moving your website to Kloud51 is a simple process. If you have access to your existing
        website files, you can make a Migration request with out team and we’ll handle it fo for you.
        <br><br>
        If you have any questions along the way, our 24/7 support team is here to assist you.
        We can help you determine the best method for transitioning your website to a Kloud51 account.
      </p>
    </div>
  </div>
</div>
