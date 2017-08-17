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

  <!-- Load scripts -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="assets/js/app.js"></script>

  <!-- Page footer -->
  <?=$base->extra?>
</body>
</html>
