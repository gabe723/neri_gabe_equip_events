<?php
$page = 'my-account';
require('db-config.php');
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//get the doctype and the header element
include_once('header.php');
?>
<main id="content">
	<!-- Call to Action -->
	<section id="atf-<?php echo $page; ?>-cta2">
		<div class="cta">
			<h2>my account</h2>
			<h3>best service. best experience.</h3>
			<p>We at Equip Events know the value of a successful event. With our team of experts you wil never have to worry. Let us equip all your event needs.<a href="http://localhost/neri_gabe_equip_events/about.php" class="cta-learn" alt="Learn More"> Learn more.</a></p>
		</div>
	</section>
	<!-- Account Details -->
	<section id="<?php echo $page; ?>-details">
		<h3>my rentals</h3>
		<ul>
			<li>tent</li>
			<li>stage</li>
			<li>chair</li>
		</ul>
	</section>
	<section id="">
		<div class="">
			<h3>Lorsmod het nulla</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<a href="" class="" alt="Learn More"> Learn more.</a></p>
		</div>
		<div class="">
			<img src="" alt="" />
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		</div>
	</section>
</main>
<?php
//get the footer element and close the open body and html tags
include_once('footer.php');
?>
