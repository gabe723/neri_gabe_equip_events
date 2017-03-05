<?php
$page = 'sitemap';
require('db-config.php');
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//get the doctype and the header element
include_once('header.php');
?>
<main id="content">
	<section id="<?php echo $page; ?>">
		<h2>Sitemap</h2>
		<nav class="<?php echo $page; ?>-nav">
			<ul class="<?php echo $page; ?>-ul">
				<li><a href="http://localhost/neri_gabe_equip_events/login.php" class="header-log-in-a">login</a></li>
				<li><a href="http://localhost/neri_gabe_equip_events/account.php" class="header-register-a">account</a></li>
				<li><a href="http://localhost/neri_gabe_equip_events/index.php">home</a></li>
				<li><a href="http://localhost/neri_gabe_equip_events/about.php">about</a></li>
				<li><a href="http://localhost/neri_gabe_equip_events/products.php">products</a></li>
				<li><a href="http://localhost/neri_gabe_equip_events/services.php">services</a></li>
				<li><a href="http://localhost/neri_gabe_equip_events/contact.php">contact</a></li>
				<li><a href="http://localhost/neri_gabe_equip_events/login.php">my account</a></li>
				<li><a href="http://localhost/neri_gabe_equip_events/planning.php#resources">planning resources</a></li>
				<li><a href="http://localhost/neri_gabe_equip_events/account.php#services">account services</a></li>
			</ul>
		</nav>
	</section>
</main>
<?php
//get the footer element and close the open body and html tags
include_once('footer.php');
?>
