<?php
// Requirements
require "include/connection.php";
require "include/route.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Meta data -->
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>

  <!-- Title and favicon -->
  <title><?php if (!empty($base->title)): ?><?=$base->title;?><?php endif ?>Kloud51</title>
  <link rel="icon" href="assets/img/favicon.ico">

  <!-- Load stylesheets -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="//fontawesome.io/assets/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="assets/css/shorties.css">
  <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Kloud51</a>
      </div>
      <div class="collapse navbar-collapse" id="nav">
        <ul class="nav navbar-nav">
          <?php foreach (Route::all() as $route): ?>
          <li class="<?php if ($base->name == $route->name): ?>active<?php endif; ?>">
            <a href="<?=$base->url?>"><?=$base->label?></a>
          </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page content -->
  <div class="page">
    <?php include $base->include; ?>
  </div>

  <!-- Footer -->
  <div class="footer">

    <!-- Social -->
    <div class="social container-fluid s-pad-no">
      <div class="row">
        <a class="col-md-2 col-xs-4" target="_blank" href="https://forum.kloud51.com" title="Kloud51 Forum">
          <i class="fa fa-cloud"></i>
        </a>                    
        <a class="col-md-2 col-xs-4" target="_blank" href="https://twitter.com/Kloud51" style="background: #0084b4">
          <i class="fa fa-twitter"></i>
        </a>
        <a class="col-md-2 col-xs-4" target="_blank" href="https://instagram.com/Kloud51/" style="background: #3f729b">
          <i class="fa fa-instagram"></i>
        </a>
        <a class="col-md-2 col-xs-4" target="_blank" href="https://www.facebook.com/savand.bros" style="background: #3b5998">
          <i class="fa fa-facebook"></i>
        </a>
        <a class="col-md-2 col-xs-4" target="_blank" href="https://plus.google.com/+Kloud51Host" style="background: #dc4e41">
          <i class="fa fa-google-plus"></i>
        </a>
        <a class="col-md-2 col-xs-4" target="_blank" href="https://www.linkedin.com/company/savand.bros" style="background: #0077b5">
          <i class="fa fa-linkedin"></i>
        </a>
      </div>
    </div>

    <!-- Sections -->
    <div class="section container-fluid">
      <div class="container">
        <div class="row">
          <!-- Company -->
          <div class="col-md-3">
            <!-- Title -->
            <h4><i class="fa fa-cloud"></i> Comapny</h4>
            <!-- Links -->
            <div class="links">
              <!-- What's up -->
              <a href="https://forum.kloud51.com/t/what-s-up"><i class="fa fa-comment-o"></i> What's Up</a>
              <!-- Community -->
              <a href="https://forum.kloud51.com/"><i class="fa fa-comments-o"></i> Community</a>
              <!-- Announcements -->
              <a href="//kloud51.com/announcements.php"><i class="fa fa-bullhorn"></i> Announcements</a>
              <!-- About -->
              <a href="//kloud51.com/about"><i class="fa fa-info-circle"></i> About</a>
              <!-- Legal -->
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-gavel"></i> Legal <b class="caret"></b>
              </a>
              <!-- Legal (dropdown) -->
              <ul class="dropdown-menu">
                <li><a href="//kloud51.com/tos">Terms of Service</a></li>
                <li><a href="//kloud51.com/acceptable-use-policy">Acceptable Use Policy</a></li>
                <li><a href="//kloud51.com/refunds">Refund Policy</a></li>
                <li><a href="//kloud51.com/privacy">Privacy Policy</a></li>
              </ul>
              <!-- Badges -->
              <a href="http://badge.kloud51.com"><i class="fa fa-tags"></i> Badges</a>
            </div>
          </div>
          <!-- Services -->
          <div class="col-md-3">
            <!-- Title -->
            <h4><i class="fa fa-cubes"></i> Services</h4>
            <!-- Links -->
            <div class="links">
              <!-- Web Hosting (cPanel) -->
              <a href="https://billing.kloud51.com/cart.php?gid=1">
                <i class="fa fa-server"></i> Web Hosting (cPanel)
              </a>
              <!-- SSD -->
              <a href="https://billing.kloud51.com/cart.php?gid=4">
                <i class="fa fa-spinner"></i> SSD Virtual Private Server (VPS)
              </a>
              <!-- Reseller -->
              <a href="https://billing.kloud51.com/cart.php?gid=3">
                <i class="fa fa-repeat"></i> Reseller Linux Web Hosting
              </a>
              <!-- SSL -->
              <a href="https://billing.kloud51.com/cart.php?gid=2">
                <i class="fa fa-shield"></i> SSL Certificates
              </a>
              <!-- Software & Server Licenses -->
              <a href="https://billing.kloud51.com/cart.php?gid=5">
                <i class="fa fa-file-text-o"></i> Software &amp; Server Licenses
              </a>
              <!-- Affiliate Army -->
              <a href="/affiliate-army-program">
                <i class="fa fa-rebel"></i> Affiliate Army
              </a>
              <!-- Sponsorship -->
              <a href="/sponsorship">
                <i class="fa fa-users"></i> Sponsorship
              </a>
            </div>
          </div>
          <!-- Support -->
          <div class="col-md-3">
            <!-- Title -->
            <h4><i class="fa fa-phone-square"></i> Support</h4>
            <!-- Links -->
            <div class="links">
              <!-- VM Manager -->              
              <a href="https://vmanager.kloud51.com"><i class="fa fa-server"></i> VM Manager</a>
              <!-- Requests -->              
              <a href="https://forum.kloud51.com/t/feature-requests">
                <i class="fa fa-star-half-o"></i> Feature Requests
              </a>
              <!-- Knowledgebase -->              
              <a href="//kloud51.com/knowledgebase.php"><i class="fa fa-book"></i> Knowledgebase</a>
              <!-- Server Status -->              
              <a href="https://kloud51.com/serverstatus.php"><i class="fa fa-info-circle"></i> Server Status</a>
              <!-- Contact Us -->              
              <a href="https://kloud51.com/contact.php"><i class="fa fa-comments"></i> Contact Us</a>
            </div>
          </div>
          <!-- Hosting -->
          <div class="col-md-3">
            <!-- Title -->            
            <h4><i class="fa fa-globe"></i> Hosting</h4>
            <!-- Links -->
            <div class="links">
              <!-- SSD -->
              <a href="//kloud51.com/ssd-vps-hosting"><i class="fa fa-server"></i> SSD VPS Hosting</a>
              <!-- WordPress -->
              <a href="//kloud51.com/wordpress-hosting"><i class="fa fa-wordpress"></i> WordPress Hosting</a>
              <!-- Joomla -->
              <a href="//kloud51.com/joomla-hosting"><i class="fa fa-joomla"></i> Joomla Hosting</a>
              <!-- WHMCS -->
              <a href="//kloud51.com/whmcs-hosting"><i class="fa fa-cogs"></i> WHMCS Hosting</a>
              <!-- MyBB -->
              <a href="//kloud51.com/mybb-hosting"><i class="fa fa-comments"></i> MyBB Hosting</a>
              <!-- MariaDB -->
              <a href="//kloud51.com/MariaDB-hosting"><i class="fa fa-database"></i> MariaDB Hosting</a>
              <!-- bbPress -->
              <a href="//kloud51.com/bbPress-hosting"><i class="fa fa-database"></i> bbPress Hosting</a>
              <!-- Softaculous -->
              <a href="//kloud51.com/softaculous-hosting"><i class="fa fa-cube"></i> Softaculous</a>
              <!-- PrestaShop -->
              <a href="//kloud51.com/prestashop-hosting"><i class="fa fa-shopping-cart"></i> PrestaShop</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Load scripts -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="assets/js/app.js"></script>

  <!-- Page footer -->
  <?=$base->extra?>
</body>
</html>
