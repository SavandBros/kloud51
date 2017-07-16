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
  <link rel="stylesheet" href="//getbootstrap.com/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="//fontawesome.io/assets/font-awesome/css/font-awesome.css">
  <link rel="stylesheet" href="assets/css/shorties.css">
  <link rel="stylesheet" href="assets/css/app.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#nav">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/">Kloud51</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="nav">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul>
        <form class="navbar-form navbar-left">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true">Dropdown <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li role="separator" class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>

  <!-- Page content -->
  <div class="page">
    <?php include $base->include; ?>
  </div>

  <!-- Load scripts -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="//getbootstrap.com/dist/js/bootstrap.min.js"></script>
  <script src="assets/js/app.js"></script>

  <!-- Page footer -->
  <?=$base->extra?>
</body>
</html>
