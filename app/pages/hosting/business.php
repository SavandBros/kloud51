<?php
// Connect
$db = new Db();

// Get plans and features
$plans = $db->select("SELECT * FROM plans WHERE hidden=false and type='business'");
?>

<!-- Cover -->
<div class="container-fluid cover cover-dark bg-computer">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <h1 class="t-bold">Business Web Hosting</h1>
        <h1 class="t-5"><b>Powerful hosting made easy</b></h1>
        <ul class="list-unstyled list-2x">
          <li><h4><i class="fa fa-fw fa-check t-emerald"></i> Server-level performance</h4></li>
          <li><h4><i class="fa fa-fw fa-check t-emerald"></i> No server-admin skills needed</h4></li>
          <li><h4><i class="fa fa-fw fa-check t-emerald"></i> Simplified cPanel experience</h4></li>
          <li><h4><i class="fa fa-fw fa-check t-emerald"></i> Optimized for high-traffic &amp; e-commerce website</h4></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- Web hosting plans -->
<div class="container-fluid bg-1 s-pad-y-hard" id="plans">
  <div class="container">
    <!-- Title -->
    <h1 class="title-header"><a href="#plans">Business Hosting Plans</a></h1>
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
              class="btn btn-default <?php if ($plan["featured"]): ?>btn-primary t-bold<?php endif ?>">
              <?=$plan["button_label"]?>
            </a>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
    <!-- More plans -->
    <div class="row row-launch">
      <a href="<?=Route::find('web')->url?>" class="btn btn-default btn-launch">
        View Web Hosting Plans <i class="fa fa-fw fa-chevron-right"></i>
      </a>
      <br>
      <br>
      <a href="<?=Route::find('prestashop')->url?>" class="btn btn-info btn-launch">
        Order Managed Online Store <i class="fa fa-fw fa-chevron-right"></i>
      </a>
    </div>
  </div>
</div>

<!-- Why Business Hosting? -->
<div class="container-fluid">
  <div class="container s-pad-y-hard">
    <!-- Title -->
    <h1 class="title-header">Why Business Hosting?</h1>
    <hr>
    <!-- Content -->
    <div class="row s-mar-top text-center">
      <div class="col-md-4 col-sm-6 grid feature">
        <i class="fa feature-icon fa-dashboard"></i>
        <h3 class="t-bold">When Performance Matters</h3>
        <br>
        <p>
          With shared hosting you share resources (memory, disk space) with others on your server. Not so with Business
          Hosting, where you get dedicated resources (memory, disk space). It is faster than shared hosting with better
          processing power and more memory.
        </p>
      </div>
      <div class="col-md-4 col-sm-6 grid feature">
        <i class="fa feature-icon fa-cogs"></i>
        <h3 class="t-bold">Not Technical? Not A Problem</h3>
        <br>
        <p>
          Business hosting requires no server administration skills. Thanks to a simple, easy-to-use control panel, the
          learning curve is much shorter than with VPS hosting.
        </p>
      </div>
      <div class="col-md-4 col-sm-6 grid feature">
        <i class="fa feature-icon fa-magic"></i>
        <h3 class="t-bold">All The Power of VPS</h3>
        <br>
        <p>
          Managing a VPS means you’ll need to understand Linux, Web Host Manager (WHM) and command line programming.
          Business Hosting eliminates the complexity and helps you get started quickly with its easy-to-use
          control panel.
        </p>
      </div>
      <div class="col-md-4 col-sm-6 grid feature">
        <i class="fa feature-icon fa-hand-o-up"></i>
        <h3 class="t-bold">Simple migration</h3>
        <br>
        <p>
          Scaling up is fast and easy. Migrate your site with one-click upgrade to a more powerful Business Hosting plan
          right from your control panel.Scaling up is fast and easy. Migrate your site with one-click upgrade to a more
          powerful Business Hosting plan right from your control panel.
        </p>
      </div>
      <div class="col-md-4 col-sm-6 grid feature">
        <i class="fa feature-icon fa-comments-o"></i>
        <h3 class="t-bold">Peace of Mind</h3>
        <br>
        <p>
          With Business Hosting, you get dedicated resources – all vital for high-traffic, data-intensive or eCommerce
          websites. You’ll sleep easy knowing your customers can use your site 24/7 with no trouble.
        </p>
      </div>
      <div class="col-md-4 col-sm-6 grid feature">
        <i class="fa feature-icon fa-search"></i>
        <h3 class="t-bold">Resource Monitoring</h3>
        <br>
        <p>
          Keep an eye on your resource usage as you grow with our monitoring tool. You can upgrade well before your
          visitors notice any slowdown in page load times.
        </p>
      </div>
    </div>
  </div>
</div>

<!-- More power, less complexity. -->
<div class="container-fluid bg-primary bg-dark s-pad-y-hard">
  <div class="container text-center">
    <h1 class="t-bold">More power, less complexity.</h1>
    <p>Get high-powered performance and dedicated resources AND an easy-to-use control panel.</p>
    <a href="https://dash.kloud51.com/cart.php?gid=12" class="btn btn-primary t-bold btn-lg">Get Started</a>
  </div>
</div>

<!-- Compare hosting solutions -->
<div class="container-fluid bg-grad s-pad-y-hard">
  <div class="container">
    <!-- Ttile -->
    <h1 class="title">COMPARE HOSTING SOLUTIONS</h1>
    <!-- List -->
    <div class="compare-table-wrapper img-shadow">
      <table class="table table-stripe table-hover compare-table">
        <thead>
          <tr>
            <th class="col-md-4"></th>
            <th>Web Hosting</th>
            <th>Business Hosting</th>
            <th>VPS Hosting</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th class="col-md-4">Suited for</th>
            <th>Basic websites and less resource-hungry web apps</th>
            <th class="active">E-commerce, high traffic and data-intensive (video or file-heavy) web apps</th>
            <th>Resource-intensive (CPU, RAM) web apps that need more control and flexibility</th>
          </tr>
          <tr>
            <th class="col-md-4">Level of technical skills</th>
            <th>Basic</th>
            <th class="active">Basic</th>
            <th>Advanced</th>
          </tr>
          <tr>
            <th class="col-md-4">Site visitors</th>
            <th>Low to moderate</th>
            <th class="active">High</th>
            <th>High</th>
          </tr>
          <tr>
            <th class="col-md-4">Memory</th>
            <th>Shared with others</th>
            <th class="active">Dedicated</th>
            <th>Dedicated</th>
          </tr>
          <tr>
            <th class="col-md-4">Disk Space</th>
            <th>Shared with others</th>
            <th class="active">Dedicated</th>
            <th>Dedicated</th>
          </tr>
          <tr>
            <th class="col-md-4">Control panel</th>
            <th>Easy-to-use cPanel</th>
            <th class="active">Easy-to-use cPanel</th>
            <th>Default WHM / cPanel</th>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Popular Uses -->
<div class="container s-pad-y">
  <!-- Title -->
  <h1 class="title-header t-bold">Popular Uses</h1>
  <hr>
  <!-- Content -->
  <div class="row">
    <!-- Image -->
    <div class="col-md-6">
      <img src="/assets/img/page/business-hosting.png" class="s-full">
    </div>
    <!-- List -->
    <div class="col-md-6">
      <ul class="list-unstyled list-flex">
        <li>
          <i class="fa fa-check fa-2x fa-fw t-emerald" style="margin-right: 16px"></i>
          eCommerce sites - Magento, WooCommerce, PrestaShop, osCommerce or ZenCart
        </li>
        <li>
          <i class="fa fa-check fa-2x fa-fw t-emerald"></i>
          High-definition image websites that store many client portfolios
        </li>
        <li>
          <i class="fa fa-check fa-2x fa-fw t-emerald"></i>
          Video-heavy websites
        </li>
        <li>
          <i class="fa fa-check fa-2x fa-fw t-emerald"></i>
          Discussion forums
        </li>
        <li>
          <i class="fa fa-check fa-2x fa-fw t-emerald"></i>
          Community websites
        </li>
        <li>
          <i class="fa fa-check fa-2x fa-fw t-emerald"></i>
          Websites that archive heavy documents (pdf, docx, Excel)
        </li>
        <li>
          <i class="fa fa-check fa-2x fa-fw t-emerald"></i>
          Business or service listings
        </li>
        <li>
          <i class="fa fa-check fa-2x fa-fw t-emerald"></i>
          Auction websites
        </li>
        <li>
          <i class="fa fa-check fa-2x fa-fw t-emerald"></i>
          Social media applications
        </li>
      </ul>
    </div>
  </div>
</div>

<!-- Your questions, out answers -->
<div class="container-fluid bg-1 s-pad-y-hard">
  <div class="container">
    <!-- Ttile -->
    <h1 class="t-bold title-header">Your questions, our answers</h1>
    <hr>
    <!-- List -->
    <br>
    <h2 class="t-bold">What is Business Hosting?</h2>
    <p>
      If your website is growing, it’s only a matter of time before you’ll need more power
      than shared hosting can provide. Business Hosting delivers the same power and performance
      as a Virtual Private Server (VPS) without the pain of server administration.
      You get all the RAM, CPU and bandwidth you need without having to hire an IT pro to manage your server.
    </p>
    <br>
    <h2 class="t-bold">What are the benefits of Business Hosting?</h2>
    <p>
      <b>Simplicity:</b> You get the same easy-to-use cPanel control panel you’re using with our shared hosting.
      You don’t need server administration skills to manage Business Hosting.
      <br>
      <b>Dedicated Resources:</b> The memory and disk space that come with your Business Hosting are
      dedicated so they’ll always be available for your use.
      <br>
      <b>Complete Isolation:</b> Because you have dedicated resources, your website will never be affected by
      other websites on your server.
    </p>
    <br>
    <h2 class="t-bold">I have shared web hosting. How hard is it to upgrade to Business Hosting?</h2>
    <p>
      If you already use Kloud51 web hosting, you can upgrade to Business Hosting with a single click.
      Your files would be automatically migrated and you don’t need to uninstall and reinstall any files.
      If you have DNS set up with GoDaddy, you won't need to update your DNS manually.
    </p>
    <br>
    <h2 class="t-bold">How many websites/domains does Business Hosting support?</h2>
    <p>You can host an unlimited number of websites on Business Hosting.</p>
    <br>
    <h2 class="t-bold">Which default email service comes with it?</h2>
    <p>Business Hosting comes with default cPanel email where you can create unlimited accounts for free.</p>
    <br>
    <h2 class="t-bold">What if I outgrow my Business Hosting plan?</h2>
    <p>Upgrading to a more powerful plan is a one-click affair.</p>
    <br>
    <h2 class="t-bold">How do I activate SSL certificate?</h2>
    <p>Your SSL Certificate will be automatically activated for you once you have created your website..</p>
    <br>
    <h2 class="t-bold">What version of PHP and MySQL do I get with Business Hosting?</h2>
    <p>
      Business Hosting comes with PHP 7.1, 7.0, 5.6, 5.5 and MySQL 5.6, the latest versions.
      This is a key requirement for Magento, CMS-Drupal and OpenCart websites and anyone running
      multiple WordPress websites.
    </p>
    <br>
    <h2 class="t-bold">What other languages is supported on my Business Hosting plan?</h2>
    <p>
      Business Hosting comes with Python and Ruby with graphical interface that you can configure
      and easily setup your Python or Ruby web applications.
    </p>
  </div>
</div>
