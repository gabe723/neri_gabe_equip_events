<?php
security_check();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- makes sure content does not shrink in mobile devices -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?php dynamic_title( $page ); ?></title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Lato:300,400" />
  <link rel="stylesheet" type="text/css" href="css/normalize.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <link rel="stylesheet" type="text/css" href="css/lightbox.css" />
  <link rel="alternate" type="application/rss+xml" href="rss.php">
  <link rel="icon" type="image/png" href="images/favicon.ico" />
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/jquery.validate_t.js"></script>
  <script src="js/validTests.js"></script>
</head>
<body id="page-<?php echo $page; ?>" role="content" class="template-<?php echo $page; ?> header-menu-open">
  <div class="site-container">
    <div class="hero hero-<?php echo $page; ?>">
      <div class="header-wrap">
        <header id="page_header" role="header">
          <?php
          if ( defined('USER_ID') ) {
            include_once ('logged-in-utility-nav.php');
          }else{
            include_once ('utility-nav.php');
          }
          ?>
          <a href="http://localhost/neri_gabe_equip_events/index.php" class="equip-events" title="Equip Events">
            <div id="logo-wrap">
              <h1>Equip Events</h1>
            </div></a>
            <?php
            if (  defined('USER_ID') ) {
              include_once ('logged-in-global-nav.php');
            }else{
              include_once ('global-nav.php');
            }
            ?>
            <?php include_once ('mobile-nav.php'); ?>
            <a id="menu-btn" href="#" onclick="openNav()"><span class="menu">menu</span><img class="menu-btn" src="images/menu_button.png" alt="Menu" /></a>
            <div class="cf"></div>
          </header>
        </div>
