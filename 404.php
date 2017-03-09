<?php
$page = '404';
require('db-config.php');
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//get the doctype and the header element
include_once('header.php');
?>
</div>
<main id="content">
	<!-- Call to Action -->
	<section id="atf-<?php echo $page; ?>-cta1">
		<div class="cta">
			<h1>404.</h1>
			<h3>Oops it looks like that's missing.</h3>
			<p>Go ahead and dive back in <a href="http://www.plattonline.com/webcampaign/equipevents.com/index.php"><em><strong>HERE.</strong></em></p>
			</div>
		</section>
	</main>
	<?php
	//get the footer element and close the open body and html tags
	include_once('footer.php');
	?>
