<?php
require('db-config.php');
$page = 'product-page';
$product_id = $_GET['product_id'];
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//get the doctype and the header element
include_once('header.php');
?>
</div>
<main id="content">
	<section id="product-display-<?php echo $product_id; ?>">
		<h2><?php echo $row['name']; ?></h2>
		<?php $query_product = "SELECT *
		FROM products, product_categories
		WHERE products.product_id = product_categories.product_id
		AND products.product_id = $product_id";
		//run the query, catch the returned info in a result object
		$result_product = $db->query( $query_product );
		?>
		<section class="<?php echo $page; ?>">
			<?php while( $row_product = $result_product->fetch_assoc() ){ ?>
				<article class="product-<?php echo $row_product['name']; ?>">
					<a href="http://localhost/neri_gabe_equip_events/product-page.php?=product_id" title="Structure 1"><img src="images/<?php echo $row_product['image']; ?>" alt="<?php echo $row_product['name']; ?>" /></a>
					<h3 class="product-description"><?php echo $row_product['description']; ?></h3>
					<p><span class="price"><?php echo $row_product['price']; ?></span></p>
					<button type="submit" name="button" class="add">Add to List</button>
				</article>
				<?php }//end while ?>
			</section>
		</section>
	</main>
	<?php
	//get the footer element and close the open body and html tags
	include_once('footer.php');
	?>
