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
<div class="container-fluid bg-1">
  <div class="container s-pad-y-hard">
    <!-- Title -->
    <h1 bold>
      <a href="#plans">Web Hosting Plans</a>
      <i class="fa fa-fw fa-server pull-right"></i>
    </h1>
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
<!-- Why Kloud51? -->
<div class="container-fluid bg-1" id="why">
  <div class="container s-pad-y-hard">
    <!-- Title -->
    <h1 bold>
      <a href="#why">Why Kloud51?</a>
    </h1>
    <!-- Reasons -->
    <div class="row s-mar-top text-center">
      <div class="col-md-4">
        <i class="fa fa-check-circle"></i>
        <h4>QUALITY HOSTING</h4>
        <p>With a selection of server hardware and infrastructure sourced from globally-reputable providers, we guarantee 99.9% uptime 24 hours a day, 7 days a week.</p>
      </div>
      <div class="col-md-4">
        <i class="fa fa-shield"></i>
        <h4>COMPLETE PROTECTION</h4>
        <p>We provide anti-DDoS, Firewalls, and Antivirus to protect your data, with options for RAID-1 or RAID-10 redundancy for that extra-sensitive information.</p>
      </div>
      <div class="col-md-4">
        <i class="fa fa-comments"></i>
        <h4>EXCELLENT SUPPORT</h4>
        <p>Having issues? We are dedicated to swiftly resolving issues and will assign a technician you help you every step of the way for techniclal help.</p>
      </div>
      <div class="col-md-4">
        <i class="fa fa-code"></i>
        <h4>CONSTANT DEVELOPMENT</h4>
        <p>We are always improving and developing to add more features and better services. Missing something? Let us know so we can work on it!</p>
      </div>
      <div class="col-md-4">
        <i class="fa fa-database"></i>
        <h4>SOLID INFRASTRUCTURE</h4>
        <p>Kloud51 servers are being maintained round-the-clock by our technical staff and are connected to a global network with over 3 Tbps of total bandwidth.</p>
      </div>
      <div class="col-md-4">
        <i class="fa fa-bolt"></i>
        <h4>LIGHTNING PERFORMANCE</h4>
        <p>All of our servers feature high-performance hardware with optimized configurations, and are constantly being monitored by our developers and admins.</p>
      </div>
    </div>
  </div>
</div>