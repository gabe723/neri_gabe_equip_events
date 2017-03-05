<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- makes sure content does not shrink in mobile devices -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php dynamic_title( $page ); ?></title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400" />
  <link rel="stylesheet" href="normalize.css" type="text/css" />
  <link rel="stylesheet" href="style.css" type="text/css" />
  <link rel="stylesheet" href="lightbox.css" type="text/css" />
  <link rel="alternate" type="application/rss+xml" href="rss.php">
  <link rel="icon" href="images/favicon.ico" type="image/png" />
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/jquery.validate_t.js"></script>
  <script src="js/validTests.js"></script>
</head>
<body id="page-<?php echo $page; ?>" role="content" class="template-<?php echo $page; ?> header-menu-open cf">
  <div class="site-container">
    <div class="hero hero-<?php echo $page; ?>">
      <div class="header-wrap">
        <header id="pageHeader" role="header">
          <?php
          if ( $_SESSION['user_id']) {
            include ('logged-in-utility-nav.php');
          }else{
            include_once('utility-nav.php');
          }
          ?>
          <a href="http://localhost/neri_gabe_equip_events/index.php" class="equip-events" title="Equip Events">
            <div id="logo-wrap">
              <h1>Equip Events</h1>
            </div></a>
            <?php include_once 'global-nav.php'; ?>
            <?php include_once 'mobile-nav.php'; ?>
            <a id="menu-btn" href="#" onclick="openNav()"><span class="menu">menu</span><img class="menu-btn" src="images/menu_button.png" alt="Menu" /></a>
            <div class="cf"></div>
          </header>
        </div>