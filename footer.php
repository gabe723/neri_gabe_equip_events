<footer id="footer" role="footer" class="cf">
  <div class="footer-utilities">
    <div class="info">
      <h6 class="footer-utility-info-group-header">info</h6>
      <a class="footer-utility-info-item" href="about.php#about">about us</a><br>
      <a class="footer-utility-info-item" href="about.php#team">equip events team</a><br>
      <a class="footer-utility-info-item" href="about.php#club">club card holders</a>
    </div>
    <div class="contact">
      <h6 class="footer-utility-contact-group-header">contact</h6>
      <a class="footer-utility-contact-item item1" href="tel:1-567-445-2143">1.567.445.2143</a><br>
      <a class="footer-utility-contact-item item2" href="mailto:gneri723@gmail.com">info@equipevents.com</a>
    </div>
    <div class="guarantees">
      <h6 class="footer-utility-guarantees-group-header">guarantees</h6>
      <ul>
        <li class="footer-utility-guarantees-item item1">lowest prices</li>
        <li class="footer-utility-guarantees-item item2">best equipment</li>
        <li class="footer-utility-guarantees-item item3">best service</li>
      </ul>
    </div>
    <div class="services">
      <h6 class="footer-utility-services-group-header">services</h6>
      <ul>
        <li><a class="footer-utility-services-item rental" href="http://localhost/neri_gabe_equip_events/products.php">equipment rental</a></li>
        <li><a class="footer-utility-services-item planning" href="http://localhost/neri_gabe_equip_events/services.php#planning">event planning</a></li>
        <li><a class="footer-utility-services-item financing" href="http://localhost/neri_gabe_equip_events/services.php#financing">financing</a></li>
      </ul>
    </div>
  </div>
  <div id="social" class="social-wrap">
    <a href="https://www.facebook.com"><img class="fb" src="images/fb.png" alt="Facebook" /></a>
    <a href="https://www.twitter.com"><img class="tw" src="images/tw.png" alt="Twitter" /></a>
    <a href="https://www.instagram.com"><img class="ig" src="images/ig.png" alt="Instagram" /></a>
    <a href="https://www.youtube.com"><img class="yt" src="images/yt.png" alt="YouTube" /></a>
    <a href="https://plus.google.com/collections/featured"><img class="go" src="images/go.png" alt="Google Plus" /></a>
    <a href="https://www.pinterest.com"><img class="pt" src="images/pt.png" alt="Pinterest" /></a>
  </div>
  <a id="menu-btn-footer" href="#" onclick="openNav()"><img class="menu-btn-footer" src="images/menu_button.png" alt="Menu" /></a>
  <a href="http://localhost/neri_gabe_equip_events/sitemap.php"><p>Sitemap</p></a>
  <small>&copy; 2017 Equip Events Inc.</small>
</footer>
<!-- jQuery goes here -->
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<!-- jQuery plugins go here -->
<script>
//custom script
function openNav() {
  document.getElementById("mobNav").style.height = "100%";
}
function closeNav() {
  document.getElementById("mobNav").style.height = "0%";
}
// Slideshow
// Manual
var slideIndex = 1;
showSlides(slideIndex);
function plusSlides(n) {
  showSlides(slideIndex += n);
}
function currentSlide(n) {
  showSlides(slideIndex = n);
}
function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
</script>
</div>
</body>
</html>
<?php
//end the open DB connection
$db->close();
?>
