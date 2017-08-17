<?php
// Connect
$db = new Db();

// Get plans
$plans = $db->select("SELECT * FROM `plans`");
?>

<!-- Cover -->
<div class="container-fluid cover bg-header">
  <div class="container">
    <h1 class="t-5">Kloud51</h1>
    <h1>Web Hosting, Blazing Fast SSD VPS, Domain Names and SSL Certificate.</h1>
  </div>
</div>

<!-- Web hosting plans -->
<div class="container-fluid bg-1 s-pad-y-hard" id="plans">
  <div class="container">
    <!-- Title -->
    <h1 class="header"><a href="#plans">Web Hosting Plans</a></h1>
    <!-- Plans -->
    <div class="row s-mar-top">
      <?php foreach ($plans as $plan): ?>
      <div class="plan-wrapper col-md-3 col-sm-6">
        <div class="plan">
          <?php if ($plan['featured']): ?>
          <span class="featured" style="background: <?=$plan['color']?>" title="Featured Plan">
            <i class="fa fa-fw fa-star"></i>
          </span>
          <?php endif ?>
          <div class="head" style="border-top-color: <?=$plan['color']?>">
            <h1><?=$plan["title"]?></h1>
            <p><?=$plan["subtitle"]?></p>
          </div>
          <div class="price" style="color: <?=$plan['color']?>">
            <div>
              <small>$</small>
              <span><?=$plan["price"]?></span>
              <small>.99</small>
            </div>
          </div>
          <div class="detail">
            <p><?=nl2br($plan["detail"])?></p>
          </div>
          <div class="order">
            <a href="<?=$plan['button_link']?>" target="_blank"
              class="btn btn-default <?php if ($plan['featured']): ?>btn-danger<?php endif ?>">
              <?=$plan['button_label']?>
            </a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</div>

<!-- Main features -->
<div class="container s-pad-y-hard" id="main-features">
  <!-- Title -->
  <h1 class="header"><a href="#main-features">Main Features</a></h1>
  <!-- Feature list -->
  <div class="row s-mar-top text-center">
    <div class="col-md-4">
      <img src="assets/img/home/creditcard.png" class="feature-image">
      <h2>Money Back Guarantee</h2>
      <h4 height class="o-fade-soft">
        Not fully satisfied with our services? Request a
        refund within 7 days of the initial purchase.
      </h4>
    </div>
    <div class="col-md-4">
      <img src="assets/img/home/cpanel.png" class="feature-image">
      <h2>Simplified Interface</h2>
      <h4 height class="o-fade-soft">
        cPanel and Softaculous included for that 1-click installation
        in an easy-to-use interface. No coding skill required.
      </h4>
    </div>
    <div class="col-md-4">
      <img src="assets/img/home/crossroads.png" class="feature-image">
      <h2>Free Migration</h2>
      <h4 height class="o-fade-soft">
        Send us a migration request in the support section,
        we'll handle the dirty work for you.
      </h4>
    </div>
  </div>
</div>

<!-- Why kloud51 -->
<div class="container-fluid bg-1" id="why">
  <div class="container s-pad-y-hard">
    <!-- Title -->
    <h1 class="header"><a href="#why">Why Kloud51?</a></h1>
    <!-- Reasons -->
    <div class="row why-list">
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
    </div>
  </div>
</div>
