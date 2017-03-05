<?php
$page = 'index';
require('db-config.php');
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//get the doctype and the header element
include_once('header.php');
//extract and sanitize the keywords that the user is searching for
?>
<main id="content">
	<!-- Above the Fold -->
	<section id="atf-<?php echo $page; ?>-cta1">
		<h2>We Equip Events With <span>EVERYTHING!</span></h2>
		<?php include('search-form.php'); ?>
	</section>
	<section id="icon-cta">
		<h2>plan. equip. celebrate.</h2>
		<div id="icon-wrap">
			<a href="http://localhost/neri_gabe_equip_events/planning.php"><div class="icon-wrap"><img class="icon icon1" src="images/planning_icon.png" alt="Planning" /><p>plan</p></div></a>
			<a href="http://localhost/neri_gabe_equip_events/products.php"><div class="icon-wrap"><img class="icon icon2" src="images/equipment_icon.png" alt="Equip" /><p>equip</p></div></a>
			<a href="http://localhost/neri_gabe_equip_events/index.php#tmnls"><div class="icon-wrap"><img class="icon icon3" src="images/experience_icon.png" alt="Celebrate" /><p>celebrate</p></div></a>
		</div>
	</section>
</div>
<main id="content" class="cf">
	<!-- Call to Action -->
	<section id="atf-<?php echo $page; ?>-cta2">
		<div class="cta">
			<h3>industry experience meets world-class service</h3>
			<p>We at Equip Events know the value of a successful event. With our team of experts you will never have to worry. Let us equip all your event needs.<a href="http://localhost/neri_gabe_equip_events/about.php" class="cta-learn"> Learn more.</a></p>
		</div>
	</section>
	<!-- Affiliates -->
	<section id="affl">
		<h2>Affiliates</h2>
		<div id="affl-wrap">
			<a href="http://promotionaldesigngroup.com"><div class="aff-wrap"><img class="aff aff1" src="images/aff1.jpg" alt="Promotional Design Group" /></div></a>
			<a href="http://www.knightscatering.ie"><div class="aff-wrap"><img class="aff aff2" src="images/aff2.jpg" alt="Knights Catering" /></div></a>
			<a href="http://elegantaffairscaterers.com"><div class="aff-wrap"><img class="aff aff3" src="images/aff3.jpg" alt="Elegant Affairs Catering and Design" /></div></a>
		</div>
	</section>
	<!-- Testimonials -->
	<section id="tmnls-wrap">
		<div id="testimonials" class="tm-cta">
			<h3>Trusted by Everyone</h3>
			<p>From Napa Valley to Dubai, Equip Events has set up over 5,000 successful events. When it comes to events, choose a name trusted by so many companies world wide.<a href="http://localhost/neri_gabe_equip_events/about.php" class="cta-learn"> Learn more.</a></p>
		</div>
		<div id="tmnls">
			<div class="tm tm1">
				<img src="images/sally.jpg" alt="Jeremy Green" />
				<p>Equip Events pulled of what no other company has EVER been able to for us. We truly admire the work and effectivness of Equip planning.</p>
				<h4>Jeremy Green, Account Mngt. Oscorp Co.</h4>
			</div>
			<div class="tm tm2">
				<img src="images/jeremy.jpg" alt="Jeremy Green" />
				<p>Equip Events pulled of what no other company has EVER been able to for us. We truly admire the work and effectivness of Equip planning.</p>
				<h4>Jeremy Green, Account Mngt. Oscorp Co.</h4>
			</div>
			<div class="tm tm3">
				<img src="images/ted.jpg" alt="Jeremy Green" />
				<p>Equip Events pulled of what no other company has EVER been able to for us. We truly admire the work and effectivness of Equip planning.</p>
				<h4>Jeremy Green, Account Mngt. Oscorp Co.</h4>
			</div>
			<div class="tm tm4">
				<img src="images/kita.jpg" alt="Jeremy Green" />
				<p>Equip Events pulled of what no other company has EVER been able to for us. We truly admire the work and effectivness of Equip planning.</p>
				<h4>Jeremy Green, Account Mngt. Oscorp Co.</h4>
			</div>
			<div class="tm tm5">
				<img src="images/mary.jpg" alt="Jeremy Green" />
				<p>Equip Events pulled of what no other company has EVER been able to for us. We truly admire the work and effectivness of Equip planning.</p>
				<h4>Jeremy Green, Account Mngt. Oscorp Co.</h4>
			</div>
			<div class="tm tm6">
				<img src="images/doug.jpg" alt="sally" />
				<p>Equip Events pulled of what no other company has EVER been able to for us. We truly admire the work and effectivness of Equip planning.</p>
				<h4>Jeremy Green, Account Mngt. Oscorp Co.</h4>
			</div>
		</div>
	</section>
	<!-- Ad Space -->
	<div class="ad">
		<a href="http://plattonline.com/webcampaign/howerton/index.php" title="Howerton" target="_blank" rel="noopener"><img src="images/howerton_ad.jpg" alt="Howerton"/></a>
	</div>
</main>
<?php
//get the footer element and close the open body and html tags
include_once('footer.php');
?>
