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
  <div class="container-fluid s-pad-no">
    <div class="social row">
      <a class="col-md-2 col-xs-4" target="_blank" href="http://forum.kloud51.com" title="Kloud51 Forum">
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
  <div class="container-fluid" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h4>
            <i class="fa fa-cloud fa-fw"></i> Comapny
          </h4>
          <hr>
          <ul class="list-unstyled">
            <li>
              <a href="http://forum.kloud51.com/t/what-s-up" target="_self">
                <i class="fa fa-comment-o"></i> What's Up
              </a>
            </li>
            <li>
              <a href="http://forum.kloud51.com/" target="_self">
                <i class="fa fa-comments-o"></i> Community
              </a>
            </li>
            <li>
              <a href="//kloud51.com/announcements.php" target="_self">
                <i class="fa fa-bullhorn"></i> Announcements
              </a>
            </li>
            <li>
              <a href="//kloud51.com/about" target="_self">
                <i class="fa fa-info-circle"></i> About
              </a>
            </li>
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-gavel"></i> Legal <b class="caret"></b>
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a href="//kloud51.com/tos" target="_self">
                    <i class="fa fa-gavel"></i> Terms of Service
                  </a>
                </li>
                <li>
                  <a href="//kloud51.com/acceptable-use-policy" target="_self">
                    <i class="fa fa-gavel"></i> Acceptable Use Policy
                  </a>
                </li>
                <li>
                  <a href="//kloud51.com/refunds" target="_self">
                    <i class="fa fa-gavel"></i> Refund Policy
                  </a>
                </li>
                <li>
                  <a href="//kloud51.com/privacy" target="_self">
                    <i class="fa fa-gavel"></i> Privacy Policy
                  </a>
                </li>
              </ul>
            </li>
            <li>
              <a href="http://badge.kloud51.com" target="_self">
                <i class="fa fa-fw fa-tags"></i> Badges
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h4>
            <i class="fa fa-cubes fa-fw"></i> Services
          </h4>
          <hr>
          <ul class="list-unstyled">
            <li>
              <a href="//kloud51.com/cart.php?gid=1" target="_self">
                <i class="fa fa-server"></i> Web Hosting (cPanel)
              </a>
            </li>
            <li>
              <a href="//kloud51.com/cart.php?gid=4" target="_self">
                <i class="fa fa-spinner"></i> SSD Virtual Private Server (VPS)
              </a>
            </li>
            <li>
              <a href="//kloud51.com/cart.php?gid=3" target="_self">
                <i class="fa fa-repeat"></i> Reseller Linux Web Hosting
              </a>
            </li>
            <li>
              <a href="//kloud51.com/cart.php?gid=2" target="_self">
                <i class="fa fa-shield"></i> SSL Certificates
              </a>
            </li>
            <li>
              <a href="//kloud51.com/cart.php?gid=5" target="_self">
                <i class="fa fa-file-text-o"></i> Software & Server Licenses
              </a>
            </li>
            <li>
              <a href="//kloud51.com/affiliate-army-program" target="_self">
                <i class="fa fa-rebel"></i> Affiliate Army
              </a>
            </li>
            <li>
              <a href="//kloud51.com/sponsorship" target="_self">
                <i class="fa fa-users"></i> Sponsorship
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h4>
            <i class="fa fa-phone-square"></i> SUPPORT
          </h4>
          <hr>
          <ul class="list-unstyled">
            <li>
              <a href="https://vmanager.kloud51.com" target="_self">
                <i class="fa fa-fw fa-server"></i> VM Manager
              </a>
            </li>
            <li>
              <a href="http://forum.kloud51.com/t/feature-requests" target="_self">
                <i class="fa fa-fw fa-star-half-o"></i> Feature Requests
              </a>
            </li>
            <li>
              <a href="//kloud51.com/knowledgebase.php" target="_self">
                <i class="fa fa-book"></i> Knowledgebase
              </a>
            </li>
            <li>
              <a href="https://kloud51.com/serverstatus.php" target="_self">
                <i class="fa fa-fw fa-info-circle"></i> Server Status
              </a>
            </li>
            <li>
              <a href="https://kloud51.com/contact.php" target="_self">
                <i class="fa fa-fw fa-comments"></i> Contact Us
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-3">
          <h4>
            <i class="fa fa-fw fa-globe"></i> HOSTING
          </h4>
          <hr>
          <ul class="list-unstyled">
            <li>
              <a href="//kloud51.com/ssd-vps-hosting" target="_self">
                <i class="fa fa-server fa-fw"></i> SSD VPS Hosting
              </a>
            </li>
            <li>
              <a href="//kloud51.com/wordpress-hosting" target="_self">
                <i class="fa fa-wordpress fa-fw"></i> WordPress Hosting
              </a>
            </li>
            <li>
              <a href="//kloud51.com/joomla-hosting" target="_self">
                <i class="fa fa-fw fa-joomla"></i> Joomla Hosting
              </a>
            </li>
            <li>
              <a href="//kloud51.com/whmcs-hosting" target="_self">
                <i class="fa fa-cogs"></i> WHMCS Hosting
              </a>
            </li>
            <li>
              <a href="//kloud51.com/mybb-hosting" target="_self">
                <i class="fa fa-fw fa-comments"></i> MyBB Hosting
              </a>
            </li>
            <li>
              <a href="//kloud51.com/MariaDB-hosting" target="_self">
                <i class="fa fa-fw fa-database"></i> MariaDB Hosting
              </a>
            </li>
            <li>
              <a href="//kloud51.com/bbPress-hosting" target="_self">
                <i class="fa fa-fw fa-database"></i> bbPress Hosting
              </a>
            </li>
            <li>
              <a href="//kloud51.com/softaculous-hosting" target="_self">
                <i class="fa fa-fw fa-cube"></i> Softaculous
              </a>
            </li>
            <li>
              <a href="//kloud51.com/prestashop-hosting" target="_self">
                <i class="fa fa-fw fa-shopping-cart"></i> PrestaShop
              </a>
            </li>
          </ul>
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
