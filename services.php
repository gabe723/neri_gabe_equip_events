<?php
$page = 'services';
require('db-config.php');
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//get the doctype and the header element
include_once('header.php');
?>
<!-- Call to Action -->
<section id="atf-<?php echo $page; ?>-cta1">
	<div class="cta">
		<h2>services</h2>
	</div>
</section>
</div>
<main id="content">
	<!-- Services -->
	<section id="<?php echo $page; ?>-icons">
		<div id="<?php echo $page; ?>-icons-wrap">
			<a href="http://localhost/neri_gabe_equip_events/services.php#planning"><div class="<?php echo $page; ?>-icon-wrap"><img class="<?php echo $page; ?>-icon <?php echo $page; ?>-icon1" src="images/planning_icon.png" alt="Planning" /><p>event planning</p></div></a>
			<a href="http://localhost/neri_gabe_equip_events/products.php"><div class="<?php echo $page; ?>-icon-wrap"><img class="<?php echo $page; ?>-icon <?php echo $page; ?>-icon2" src="images/equipment_icon.png" alt="Equipment Rentals/Sales" /><p>equipment rentals/sales</p></div></a>
			<a href="http://localhost/neri_gabe_equip_events/services.php#financing"><div class="<?php echo $page; ?>-icon-wrap"><img class="<?php echo $page; ?>-icon <?php echo $page; ?>-icon3" src="images/financing_icon.png" alt="Financing" /><p>financing</p></div></a>
		</div>
	</section>
	<section id="planning">
		<div class="plan-desc">
			<h3>the experts at event planning.</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<a href="" class=""> Learn more.</a></p>
		</div>
	</section>
	<section id="financing">
		<div class="fin-desc">
			<h3>We front you. You have an amazing event. We both win.</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<a href="" class=""> Learn more.</a></p>
		</div>
	</section>
</main>
<?php
//get the footer element and close the open body and html tags
include_once('footer.php');
?>
