<?php
//connect to db
require('db-config.php');
include_once('functions.php');
//echo out the XML declaration since the <? characters confuse the PHP parser
echo '<?xml version="1.0" encoding="UTF-8"?>';
//get up to 10 most recent published posts
$query = "SELECT *
FROM products
ORDER BY products.product_id DESC
LIMIT 10";
$result = $db->query( $query );
//check it
if ( ! $result ) {
  die( $db->error );
}
?>
<rss version="2.0" xmlns:atom="http://www.w3.org/2005/Atom">
  <channel>
    <title>Equip Events | RSS Feed</title>
    <link>http://localhost/neri_gabe_equip_events/</link>
    <description>We Equip Events with EVERYTHING!</description>
    <atom:link href="http://localhost/neri_gabe_equip_events/" rel="self" type="application/rss+xml" />
    <?php while( $row = $result->fetch_assoc() ){ ?>
      <item>
        <title><?php echo $row['name'] ?></title>
        <link>http://localhost/neri_gabe_equip_events/products.php?product_id=<?php echo $row['product_id']; ?></link>
        <guid>http://localhost/neri_gabe_equip_events/products.php?product_id=<?php echo $row['product_id']; ?></guid>
        <pubDate><?php echo convert_timerss($row['date']); ?></pubDate>
        <description><![CDATA[
          <img src="<?php echo $row['image']; ?>"/>
          <span><?php echo $row['price']; ?></span>
          <?php echo $row['description']; ?>
          ]]></description>
        </item>
        <?php } //end while loop ?>
      </channel>
    </rss>
