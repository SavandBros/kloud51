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
