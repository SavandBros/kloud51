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
              <small>.51</small>
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
    </div>
  </div>
</div>

<div class="container-fluid s-pad-no bg-1 br-top" id="ratings">
  <div id="reviews" class="carousel slide" data-ride="carousel" data-interval="false">
    <ol class="carousel-indicators">
      <li data-target="#reviews" data-slide-to="0" class="active"></li>
      <li data-target="#reviews" data-slide-to="1"></li>
      <li data-target="#reviews" data-slide-to="2"></li>
      <li data-target="#reviews" data-slide-to="3"></li>
      <li data-target="#reviews" data-slide-to="4"></li>
      <li data-target="#reviews" data-slide-to="5"></li>
      <li data-target="#reviews" data-slide-to="6"></li>
      <li data-target="#reviews" data-slide-to="7"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <div class="review col-md-8 col-md-offset-2">
          <div class="col-md-3 text-center">
            <div class="review-avatar" style="background: #006BC9">
              <span>A</span>
              <div class="review-stars">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">Great Linux Web Hosting</div>
              <div class="panel-body">
                First, I started with their Free Linux Web Hosting, it had everything I needed.
                Don't get it wrong if it says "Free" it has the Enterprise features.
                <br><br> SSH Access, Unlimited FTP, Emails, Websites, Domains, Addon-Domains,
                +400 app auto installers that will take only 1 click to install and setup website,
                much more and comes with 24/7 support as well and daily backups.
                <br><br> Their support is completely dedicated to what they do and never failed me,
                always responsible and professional and very polite.
                <br><br> Now I'm subscribed to their Paid Plans and get my friends and own client to get from Kloud51.
                <br><br> Thank you for the great services. Excellent, I would recommend Kloud51 to anyone.
                <hr small>
                <em class="text-right dis-b">
                  <small>Kloud51 reviewed by</small>
                  <a target="_blank" href="https://www.trustpilot.com/reviews/56844ef90000ff00092aa251">Aga</a>
                </em>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="review col-md-8 col-md-offset-2">
          <div class="col-md-3 text-center">
            <div class="review-avatar">
              <span>CG</span>
              <div class="review-stars">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">A Very Good Service!</div>
              <div class="panel-body">
                I have a reseller account and I'm very happy that my customers have excellent services. Price are
                good for every pocket! Their services are best as compared to other hosting companies. Also great
                hosting, 99% uptime, and no problem with it at all.
                <hr small>
                <em class="text-right dis-b">
                  <small>Kloud51 reviewed by</small>
                  <a target="_blank" href="https://www.trustpilot.com/reviews/56e011c90000ff000943eb28">
                    Ciobanu Ioan Georgian
                  </a>
                </em>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="review col-md-8 col-md-offset-2">
          <div class="col-md-3 text-center">
            <div class="review-avatar" style="background: darkcyan">
              <span>DW</span>
              <div class="review-stars">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">Great VPS Service</div>
              <div class="panel-body">
                Kloud51 is a fantastic Linux VPS hosting service for a great price. You can choose your flavor of
                Linux and jump right into it with Cpanel and RDP. I'm currently using the ARCH Desktop and its quick
                and smooth. You can really tell they care by the support they offer though I haven't had to contact
                them because I haven't experienced any downtime of any sort. All in all, I would recommend Kloud51
                to anyone, they are fast and reliable.
                <hr small>
                <em class="text-right dis-b">
                  <small>Kloud51 reviewed by</small>
                  <a target="_blank" href="https://www.trustpilot.com/reviews/56e134050000ff0009443ffd">
                    David Williams
                  </a>
                </em>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="review col-md-8 col-md-offset-2">
          <div class="col-md-3 text-center">
            <div class="review-avatar" style="background: blueviolet">
              <span>A</span>
              <div class="review-stars">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">Awesome VPS &amp; Awesome Hosting</div>
              <div class="panel-body">
                I'm using Kloud51's VPS for 3 months now and what should I say? They have awesome service and great
                support team. they added all features that I want, helped me start working with Linux.<br><br>Also
                great hosting, 99% uptime, and no problem with it at all.
                <hr small>
                <em class="text-right dis-b">
                  <small>Kloud51 reviewed by</small>
                  <a target="_blank" href="https://www.trustpilot.com/reviews/56debfa30000ff0009437b34">Andrew</a>
                </em>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="review col-md-8 col-md-offset-2">
          <div class="col-md-3 text-center">
            <div class="review-avatar" style="background: cornflowerblue">
              <span>L</span>
              <div class="review-stars">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">Excelent service</div>
              <div class="panel-body">
                My experience here was great, the VPS work 24/7, I started using with 0 knowledge ArchLinux Desktop
                (Super Fast) [Remote Desktop Ready], they got one support forum and individual support team, and
                the results were great. I pushed the VPS to the limits and worked excellently.
                <br><br>When they changed 50GB HDD to 10GB SSD they suspended my VPS because I got 40GB+ full, I sent
                a ticket to support team and in some hours, it was solved.
                <hr small>
                <em class="text-right dis-b">
                  <small>Kloud51 reviewed by</small>
                  <a target="_blank" href="https://www.trustpilot.com/reviews/56e42f780000ff0009450f4b">Leandro</a>
                </em>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="review col-md-8 col-md-offset-2">
          <div class="col-md-3 text-center">
            <div class="review-avatar" style="background: deeppink">
              <span>J</span>
              <div class="review-stars">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">Awesome service</div>
              <div class="panel-body">
                Bought five VPS from kloud51, the VPSs were running on 1 GB RAM and Arch Linux OS. Never had
                problems using them, VPS runs smoothly. I recommend them.
                <hr small>
                <em class="text-right dis-b">
                  <small>Kloud51 reviewed by</small>
                  <a target="_blank" href="https://www.trustpilot.com/reviews/56ea5e680000ff000946a92b">Julie</a>
                </em>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="review col-md-8 col-md-offset-2">
          <div class="col-md-3 text-center">
            <div class="review-avatar" style="background: orange">
              <span>O</span>
              <div class="review-stars">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">Excellent! The best in the business</div>
              <div class="panel-body">
                Their service is solid,their network is fast, I never had an issue with that.Great support, quick
                and accurate, the best I had so far. I bought 10 VPS ArchLinux Desktop (Super Fast)
                [Remote Desktop Ready],easy to use,never crashed.check it out here at Kloud51.com
                <hr small>
                <em class="text-right dis-b">
                  <small>Kloud51 reviewed by</small>
                  <a target="_blank" href="https://www.trustpilot.com/reviews/56f18fb70000ff00094882eb">Ovidiu</a>
                </em>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="item">
        <div class="review col-md-8 col-md-offset-2">
          <div class="col-md-3 text-center">
            <div class="review-avatar" style="background: lime">
              <span>R</span>
              <div class="review-stars">
                <i class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                <i class="fa fa-star"></i> <i class="fa fa-star"></i>
              </div>
            </div>
          </div>
          <div class="col-md-9">
            <div class="panel panel-default">
              <div class="panel-heading">One of the best &amp; Easy to use VPS Provider</div>
              <div class="panel-body">
                I've been looking for good VPS providers for a while, and finally found out this Reliable provider.
                No issues, 100% Satisfied.<br>I bought VPS 1 GB RAM from them and it is Performing really well With
                high Uptime.<br>It is really Beginner-friendly, with the Available option of Preinstalled Desktop
                &amp; All required stuff. Everything was setup, So fast without the need for manual installation of
                the needed Things. Really happy with the Service.
                <hr small>
                <em class="text-right dis-b">
                  <small>Kloud51 reviewed by</small>
                  <a target="_blank" href="https://www.trustpilot.com/reviews/56f28be60000ff000948c1ad">Risin</a>
                </em>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <a class="left carousel-control" href="#reviews" data-slide="prev">
      <span class="fa fa-chevron-left" aria-hidden="true"></span>
    </a>
    <a class="right carousel-control" href="#reviews" data-slide="next">
      <span class="fa fa-chevron-right" aria-hidden="true"></span>
    </a>
  </div>
</div>
