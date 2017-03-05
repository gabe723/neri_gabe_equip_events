<?php
$page = 'planning';
require('db-config.php');
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//get the doctype and the header element
include_once('header.php');
?>
<!-- Call to Action -->
<section id="atf-<?php echo $page; ?>-cta1">
  <div class="cta">
    <h2>planning</h2>
  </div>
</section>
</div>
<main id="content">
  <!-- Planning Resources -->
  <section id="<?php echo $page; ?>-cta2">
    <h2>resources</h2>
    <div id="icon-wrap">
      <a href="http://localhost/neri_gabe_equip_events/planning.php"><div class="icon-wrap"><img class="icon icon1" src="images/planning_icon.png" alt="Planning" /><p>plan</p></div></a>
      <a href="http://localhost/neri_gabe_equip_events/products.php"><div class="icon-wrap"><img class="icon icon2" src="images/equipment_icon.png" alt="Execute" /><p>execute</p></div></a>
      <a href="http://localhost/neri_gabe_equip_events/index.php#tmnls"><div class="icon-wrap"><img class="icon icon3" src="images/experience_icon.png" alt="Celebrate" /><p>celebrate</p></div></a>
    </div>
  </section>
  <section id="">
    <div class="">
      <h3>Lorsmod het nulla</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<a href="" class=""> Learn more.</a></p>
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
