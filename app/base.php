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
  <link rel="icon" href="/assets/img/favicon.ico">

  <!-- Load stylesheets -->
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/assets/css/shorties.css">
  <link rel="stylesheet" href="/assets/css/app.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <!-- Toggle button -->
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!-- Brand -->
        <a class="navbar-brand" href="/">Kloud51</a>
      </div>
      <div class="collapse navbar-collapse" id="nav">
        <!-- Nav links -->
        <ul class="nav navbar-nav">
          <!-- All links -->
          <?php foreach (Route::all_with_dropdown() as $link): ?>
          <?php if ($link["dropdown"]): ?>
          <!-- Dropdown -->
          <li class="dropdown">
            <!-- Dropdown label -->
            <a class="dropdown-toggle" data-toggle="dropdown" href="#" id="<?=$link["dropdown"]?>">
              <?=$link["dropdown"]?> <span class="caret"></span>
            </a>
            <!-- Dropdown links -->
            <ul class="dropdown-menu">
              <?php foreach ($link["links"] as $dropdown_route): ?>
              <li class="<?php if ($base->name == $dropdown_route->name): ?>active<?php endif; ?>">
                <a href="<?=$dropdown_route->url?>"><?=$dropdown_route->label?></a>
              </li>
              <?php endforeach; ?>
            </ul>
          </li>
          <?php else: ?>
          <!-- Link -->
          <li class="<?php if ($base->name == $link["route"]->name): ?>active<?php endif; ?>">
            <a href="<?=$link["route"]->url?>"><?=$link["route"]->label?></a>
          </li>
          <?php endif; ?>
          <?php endforeach; ?>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="https://dash.kloud51.com/clientarea.php">Member Area</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page content -->
  <div class="page">
    <?php include $base->get_include(); ?>
  </div>

  <!-- Footer -->
  <div class="footer">

    <!-- Social -->
    <div class="social container-fluid s-pad-no">
      <div class="row">
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

    <!-- Sections -->
    <div class="section container-fluid">
      <div class="container">
        <div class="row">
          <!-- Company -->
          <div class="col-md-3">
            <!-- Title -->
            <h4>Comapny</h4>
            <!-- Links -->
            <div class="links">
              <!-- What's up -->
              <a href="http://forum.kloud51.com/t/what-s-up"><i class="fa fa-comment-o"></i> What's Up</a>
              <!-- Community -->
              <a href="http://forum.kloud51.com/"><i class="fa fa-comments-o"></i> Community</a>
              <!-- Announcements -->
              <a href="//dash.kloud51.com/announcements.php"><i class="fa fa-bullhorn"></i> Announcements</a>
              <!-- About -->
              <a href="/about"><i class="fa fa-info-circle"></i> About</a>
              <!-- Badges -->
              <a href="http://badge.kloud51.com"><i class="fa fa-tags"></i> Badges</a>
              <!-- Legal -->
              <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-gavel"></i> Legal <b class="caret"></b>
              </a>
              <!-- Legal (dropdown) -->
              <ul class="dropdown-menu">
                <li><a href="/legal/tos">Terms of Service</a></li>
                <li><a href="/legal/acceptable-use-policy">Acceptable Use Policy</a></li>
                <li><a href="/legal/refunds">Refund Policy</a></li>
                <li><a href="/legal/privacy">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
          <!-- Services -->
          <div class="col-md-3">
            <!-- Title -->
            <h4>Services</h4>
            <!-- Links -->
            <div class="links">
              <!-- Web Hosting (cPanel) -->
              <a href="//dash.kloud51.com/cart.php?gid=1">
                <i class="fa fa-server"></i> Web Hosting (cPanel)
              </a>
              <!-- SSD -->
              <a href="//dash.kloud51.com/cart.php?gid=4">
                <i class="fa fa-spinner"></i> SSD Virtual Private Server (VPS)
              </a>
              <!-- Reseller -->
              <a href="//dash.kloud51.com/cart.php?gid=3">
                <i class="fa fa-repeat"></i> Reseller Linux Web Hosting
              </a>
              <!-- SSL -->
              <a href="//dash.kloud51.com/cart.php?gid=2">
                <i class="fa fa-shield"></i> SSL Certificates
              </a>
              <!-- Software & Server Licenses -->
              <a href="//dash.kloud51.com/cart.php?gid=5">
                <i class="fa fa-file-text-o"></i> Software &amp; Server Licenses
              </a>
              <!-- Affiliate Army -->
              <a href="/program/affiliate-army-program">
                <i class="fa fa-rebel"></i> Affiliate Army
              </a>
              <!-- Sponsorship -->
              <a href="/program/sponsorship">
                <i class="fa fa-users"></i> Sponsorship
              </a>
            </div>
          </div>
          <!-- Support -->
          <div class="col-md-3">
            <!-- Title -->
            <h4>Support</h4>
            <!-- Links -->
            <div class="links">
              <!-- VM Manager -->              
              <a href="https://vmanager.kloud51.com"><i class="fa fa-server"></i> VM Manager</a>
              <!-- Requests -->              
              <a href="http://forum.kloud51.com/t/feature-requests">
                <i class="fa fa-star-half-o"></i> Feature Requests
              </a>
              <!-- Knowledgebase -->              
              <a href="//dash.kloud51.com/knowledgebase.php"><i class="fa fa-book"></i> Knowledgebase</a>
              <!-- Server Status -->              
              <a href="//dash.kloud51.com/serverstatus.php"><i class="fa fa-info-circle"></i> Server Status</a>
              <!-- Contact Us -->              
              <a href="//dash.kloud51.com/contact.php"><i class="fa fa-comments"></i> Contact Us</a>
            </div>
          </div>
          <!-- Hosting -->
          <div class="col-md-3">
            <!-- Title -->            
            <h4>Hosting</h4>
            <!-- Links -->
            <div class="links">
              <!-- SSD -->
              <a href="/hosting/ssd-vps"><i class="fa fa-server"></i> SSD VPS Hosting</a>
              <!-- WordPress -->
              <a href="/hosting/wordpress"><i class="fa fa-wordpress"></i> WordPress Hosting</a>
              <!-- PrestaShop -->
              <a href="/hosting/prestashop"><i class="fa fa-shopping-cart"></i> PrestaShop</a>
              <!-- Joomla -->
              <a href="/hosting/joomla"><i class="fa fa-joomla"></i> Joomla Hosting</a>
              <!-- WHMCS -->
              <a href="/hosting/whmcs"><i class="fa fa-cogs"></i> WHMCS Hosting</a>
              <!-- MyBB -->
              <a href="/hosting/mybb"><i class="fa fa-comments"></i> MyBB Hosting</a>
              <!-- MariaDB -->
              <a href="/hosting/mariadb"><i class="fa fa-database"></i> MariaDB Hosting</a>
              <!-- bbPress -->
              <a href="/hosting/bbpress"><i class="fa fa-database"></i> bbPress Hosting</a>
              <!-- Softaculous -->
              <a href="/hosting/softaculous"><i class="fa fa-cube"></i> Softaculous</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Copyright & payment methods -->
    <div class="copyright container-fluid">
      <div class="container">
        <div class="row">
          <!-- Copyright -->
          <div class="col-lg-6 text-center-mobile">
            <p>
              Made with <span class="text-danger">love</span> and brought to you by Kloud51,
              a Savand Bros brand <span class="text-danger"><3</span>.
            </p>
            <p>&copy; <?php echo date("Y"); ?> Savand Bros. Kloud51. All Rights Reserved.</p>
          </div>
          <!-- Payment methods -->
          <div class="col-lg-6 payments text-center" tooltip title="Payment methods">
            <i class="fa fa-cc-paypal" title="PayPal"></i>
            <i class="fa fa-cc-mastercard" title="Mastercard"></i>
            <i class="fa fa-cc-amex" title="American Express"></i>
            <i class="fa fa-cc-visa" title="Visa"></i>
            <i class="fa fa-btc" title="Bitcoin"></i>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid goal s-pad-y text-center-mobile">
      <div class="container">
        <div class="row">
          <!-- Copyright -->
          <div class="col-md-3 col-lg-3">
            <a href="/affiliate-army-program">
              <img src="/assets/img/logo-white.png">
            </a>
          </div>
          <div class="s-mobile-soft"></div>
          <!-- Goal -->
          <div class="col-md-9 col-lg-9">
            <p>
              Our goal is to provide out of this world web hosting hosting and Linux SSD VPS services,
              become a loved brand and have a little fun on the side.
              We offer Premium web hosting services at low prices to
              our customers without compromising reliability and great customer service.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Load scripts -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="/assets/js/grid.js"></script>
  <script src="/assets/js/app.js"></script>

  <!-- Page footer -->
  <?=$base->extra?>

  <!-- Google analytics -->
  <script>
    (function(i,s,o,g,r,a,m){i["GoogleAnalyticsObject"]=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,"script","//www.google-analytics.com/analytics.js","ga");
    ga("create", "UA-58251754-1", "auto");
    ga("send", "pageview");
  </script>

  <!-- Tawkto -->
  <script type="text/javascript">
    var $_Tawk_API={},$_Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src="https://embed.tawk.to/551c4819b04d213d71061d95/default";
    s1.charset="UTF-8";
    s1.setAttribute("crossorigin","*");
    s0.parentNode.insertBefore(s1,s0);
    })();
  </script>
</body>
</html>
