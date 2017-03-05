<?php
$page = 'products';
require('db-config.php');
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//get the doctype and the header element
include_once('header.php');
?>
<!-- Call to Action -->
<section id="atf-<?php echo $page; ?>-cta1">
  <div class="cta">
    <h2>Products</h2>
    <p>We have what you need. Make a list. Get a quote.</p>
  </div>
</section>
</div>
<main id="content">
  <!-- Products -->
  <div class="<?php echo $page; ?>-search-wrap">
    <?php include('search-form.php'); ?>
  </div>
</div>
<section id="<?php echo $page; ?>-icons">
  <div id="<?php echo $page; ?>-icons-wrap">
    <a href="http://localhost/neri_gabe_equip_events/products.php#category-1"><div class="<?php echo $page; ?>-icon-wrap"><img class="<?php echo $page; ?>-icon <?php echo $page; ?>-icon1" src="images/structures_icon.gif" alt="Structures" /><p>structures</p></div></a>
    <a href="http://localhost/neri_gabe_equip_events/products.php#category-2"><div class="<?php echo $page; ?>-icon-wrap"><img class="<?php echo $page; ?>-icon <?php echo $page; ?>-icon2" src="images/power_icon.gif" alt="Power" /><p>power</p></div></a>
    <a href="http://localhost/neri_gabe_equip_events/products.php#category-3"><div class="<?php echo $page; ?>-icon-wrap"><img class="<?php echo $page; ?>-icon <?php echo $page; ?>-icon4" src="images/lighting_icon.gif" alt="Lighting" /><p>lighting</p></div></a>
    <a href="http://localhost/neri_gabe_equip_events/products.php#category-4"><div class="<?php echo $page; ?>-icon-wrap"><img class="<?php echo $page; ?>-icon <?php echo $page; ?>-icon7" src="images/audio_icon.gif" alt="Audio" /><p>audio</p></div></a>
    <a href="http://localhost/neri_gabe_equip_events/products.php#category-5"><div class="<?php echo $page; ?>-icon-wrap"><img class="<?php echo $page; ?>-icon <?php echo $page; ?>-icon8" src="images/decor_icon.gif" alt="Decor" /><p>decor</p></div></a>
    <a href="http://localhost/neri_gabe_equip_events/products.php#category-6"><div class="<?php echo $page; ?>-icon-wrap"><img class="<?php echo $page; ?>-icon <?php echo $page; ?>-icon5" src="images/seating_icon.gif" alt="Seating" /><p>seating</p></div></a>
    <a href="http://localhost/neri_gabe_equip_events/products.php#category-7"><div class="<?php echo $page; ?>-icon-wrap"><img class="<?php echo $page; ?>-icon <?php echo $page; ?>-icon6" src="images/glassware_icon.gif" alt="Glassware" /><p>glassware</p></div></a>
    <a href="http://localhost/neri_gabe_equip_events/products.php#category-8"><div class="<?php echo $page; ?>-icon-wrap"><img class="<?php echo $page; ?>-icon <?php echo $page; ?>-icon7" src="images/tableware_icon.gif" alt="Tableware" /><p>tableware</p></div></a>
    <a href="http://localhost/neri_gabe_equip_events/products.php#category-9"><div class="<?php echo $page; ?>-icon-wrap"><img class="<?php echo $page; ?>-icon <?php echo $page; ?>-icon8" src="images/tables_icon.gif" alt="Tables" /><p>tables</p></div></a>
  </div>
</section>
<?php $query = "SELECT *
FROM categories";
$result = $db->query( $query );
//check to see if the result has rows (posts in this case)
if ( $result->num_rows >= 1 ) {
  //loop through each row found, displaying the article each time
  while( $row = $result->fetch_assoc() ){
    $category_id = $row['category_id'];
    ?>
    <section id="category-<?php echo $category_id; ?>" class="<?php echo $page; ?>-wrap">
      <h2><?php echo $row['name']; ?></h2>
      <?php $query_product = "SELECT *
      FROM products, product_categories
      WHERE products.product_id = product_categories.product_id
      AND product_categories.category_id = $category_id";
      //run the query, catch the returned info in a result object
      $result_product = $db->query( $query_product );
      ?>
      <section class="<?php echo $page; ?>">
        <?php while( $row_product = $result_product->fetch_assoc() ){ ?>
          <article class="product-<?php echo $row_product['name']; ?>">
            <a href="#" alt="Structure 1"><img src="<?php echo $row_product['image']; ?>" /></a>
            <h3 class="product-description"><?php echo $row_product['name']; ?></h3>
            <p><span class="price"><?php echo $row_product['price']; ?></span></p>
            <p><a href="http://gabeneri.com/equipevents/quote.php" alt="Add to List"><span class="add">Add to List</span></a></p>
          </article>
          <?php }//end while ?>
        </section>
      </section>
      <?php
    }
  }
  ?>
  <a href="#"><p>Back to Top</p></a>
</main>
<?php
//get the footer element and close the open body and html tags
include_once('footer.php');
?>
