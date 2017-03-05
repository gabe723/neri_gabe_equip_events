<?php
$page = 'account';
require('db-config.php');
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//get the doctype and the header element
include_once('header.php');
?>
<!-- Call to Action -->
<section id="atf-<?php echo $page; ?>-cta2">
	<div class="cta">
		<a href="http://localhost/neri_gabe_equip_events/login.php" class="header-login-a"><h2>go to account</h2></a>
		<a href="http://localhost/neri_gabe_equip_events/register.php" class="header-register-a"><h2>create an account</h2></a>
	</div>
</section>
</div>
<main id="content">
	<!-- Account Services -->
	<section id="icon-cta">
		<h2>account services</h2>
		<div id="icon-wrap">
			<a href="http://localhost/neri_gabe_equip_events/planning.php"><div class="icon-wrap"><img class="icon icon1" src="images/planning_icon.png" alt="Planning" /><p>plan</p></div></a>
			<a href="http://localhost/neri_gabe_equip_events/products.php"><div class="icon-wrap"><img class="icon icon2" src="images/equipment_icon.png" alt="Execute" /><p>execute</p></div></a>
			<a href="/equip-events/index.php#tmnls"><div class="icon-wrap"><img class="icon icon3" src="images/experience_icon.png" alt="Celebrate" /><p>celebrate</p></div></a>
		</div>
	</section>
	<!-- Create an Account -->
	<section id="register">
		<div class="register">
			<h2>create an account here</h2>
		</div>
	</section>
	<!-- Account Details -->
	<section id="<?php echo $page; ?>-details">
		<div class="<?php echo $page; ?>-details">
			<h2>your rentals</h2>
			<h3>details</h3>
			<!-- PUT TABLE HERE -->
		</div>
	</section>
	<h3>Lorsmod het nulla</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<a href="" class=""> Learn more.</a></p>
	<div class="">
		<img src="" alt="" />
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
	</div>
</main>
<?php
//get the footer element and close the open body and html tags
include_once('footer.php');
?>
