<?php
$page = 'my-account';
require('db-config.php');
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//get the doctype and the header element
include_once('header.php');
?>
</div>
<main id="content">
	<!-- Call to Action -->
	<section id="atf-<?php echo $page; ?>-cta2">
		<div class="cta">
			<h2>my account</h2>
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
</main>
<?php
//get the footer element and close the open body and html tags
include_once('footer.php');
?>
