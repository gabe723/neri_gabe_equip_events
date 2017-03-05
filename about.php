<?php
$page = 'about';
require('db-config.php');
//use _once on function definitions to prevent duplicates
include_once('functions.php');
//get the doctype and the header element
include_once('header.php');
?>
<!-- Call to Action -->
<section id="atf-<?php echo $page; ?>-cta1">
	<div class="cta">
		<h2>the leader in event planning</h2>
	</div>
</section>
</div>
<main id="content">
	<!-- About -->
	<section id="<?php echo $page; ?>">
		<div class="<?php echo $page; ?>-wrap">
			<h2>about</h2>
			<!-- Slideshow -->
			<section class="slideshow-container">
				<div class="mySlides fade">
					<img src="images/slide1.jpg" />
				</div>
				<div class="mySlides fade">
					<img src="images/slide2.jpg" />
				</div>
				<div class="mySlides fade">
					<img src="images/slide3.jpg" />
				</div>
				<div class="mySlides fade">
					<img src="images/slide4.jpg" />
				</div>
				<div class="mySlides fade">
					<img src="images/slide5.jpg" />
				</div>
				<div class="mySlides fade">
					<img src="images/slide6.jpg" />
				</div>
				<div class="mySlides fade">
					<img src="images/slide7.jpg" />
				</div>
				<div class="mySlides fade">
					<img src="images/slide8.jpg" />
				</div>
				<div class="mySlides fade">
					<img src="images/slide9.jpg" />
				</div>
				<div class="mySlides fade">
					<img src="images/slide10.jpg" />
				</div>
				<div class="mySlides fade">
					<img src="images/slide11.jpg" />
				</div>
				<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
				<a class="next" onclick="plusSlides(1)">&#10095;</a>
			</section>
			<br>
			<div id="dot">
				<span class="dot" onclick="currentSlide(1)"></span>
				<span class="dot" onclick="currentSlide(2)"></span>
				<span class="dot" onclick="currentSlide(3)"></span>
				<span class="dot" onclick="currentSlide(4)"></span>
				<span class="dot" onclick="currentSlide(5)"></span>
				<span class="dot" onclick="currentSlide(6)"></span>
				<span class="dot" onclick="currentSlide(7)"></span>
				<span class="dot" onclick="currentSlide(8)"></span>
				<span class="dot" onclick="currentSlide(9)"></span>
				<span class="dot" onclick="currentSlide(10)"></span>
				<span class="dot" onclick="currentSlide(12)"></span>
				<span class="dot" onclick="currentSlide(13)"></span>
				<span class="dot" onclick="currentSlide(14)"></span>
				<span class="dot" onclick="currentSlide(15)"></span>
			</div>
			<h3>the journey here</h3>
			<p>What started out as a few friends putting on parties has evolved into a widespread bussiness of creating the best event experience money can buy.</p>
			<p>The story began with Gary Cole, founder and CEO of Equip Events. Gary was your typical college student studying and still trying to have a life.</p>
			<p>Gary was really into concerts and going out and so he began one summer to try and host his own concerts at his frat Omega Gamma Delta. They turned out to be a hit, and weekend after weekend there would be parties.</p>
			<p>Gary was well aware that he couldn't live the college life forever. He knew he wanted a steady career but he also knew he'd never give up the fun and thrill of hosting a successful event.</p>
			<p>He decided after his studies to start his own company with a few friends called Equip Events so that he could make sure people all around the world would be able to experience the best events possible.</p>
			<section id="team">
				<div class="team-wrap">
					<div class="team-cta">
						<h3>we build success</h3>
						<p>It takes a village as they say..That's something we at Equip Events can really relate to. If it weren't for the men and woman of this awesome company then there is no way we would be able to boast over 5,000 successful events.</p>
						<p>We employ nothing but top-tier talent from the major fields in promoting, marketing, and strategic planning. It's with this group that we are able to be the most effective event organizers possible.</p>
						<p>That's what sets us a part from the other guys. Not only do we <em>EQUIP</em> the event, but we are able to sit with our clients and plan <em>EVERYTHING.</p>
						</div>
						<div id="team-members">
							<h3>meet the team</h3>
							<div class="team-members-wrap">
								<div class="team1">
									<img src="images/gary.jpg" alt="Gary Cole" />
									<blockquote><span>"</span>Finish each day and be done with it. You have done what you could; some blunders and absurdities have crept in; forget them as soon as you can. Tomorrow is a new day; you shall begin it serenely and with too high a spirit to be encumbered with your old nonsense." &#8212;Ralph Waldo Emerson</blockquote>
									<h4>Gary Cole, Founder, CEO</h4>
								</div>
								<div class="team2">
									<img src="images/leonard.jpg" alt="Leonard Nemoy" />
									<blockquote><span>"</span>Finish each day and be done with it. You have done what you could; some blunders and absurdities have crept in; forget them as soon as you can. Tomorrow is a new day; you shall begin it serenely and with too high a spirit to be encumbered with your old nonsense." &#8212;Ralph Waldo Emerson</blockquote>
									<h4>&#8212;Leonard Nemoy, CFO</h4>
								</div>
								<div class="team3">
									<img src="images/robert.jpg" alt="Robert Dinero" />
									<blockquote><span>"</span>Finish each day and be done with it. You have done what you could; some blunders and absurdities have crept in; forget them as soon as you can. Tomorrow is a new day; you shall begin it serenely and with too high a spirit to be encumbered with your old nonsense." &#8212;Ralph Waldo Emerson</blockquote>
									<h4>Robert Dinero, CMO</h4>
								</div>
								<div class="team4">
									<img src="images/beth.jpg" alt="Beth Esda" />
									<blockquote><span>"</span>Finish each day and be done with it. You have done what you could; some blunders and absurdities have crept in; forget them as soon as you can. Tomorrow is a new day; you shall begin it serenely and with too high a spirit to be encumbered with your old nonsense." &#8212;Ralph Waldo Emerson</blockquote>
									<h4>Beth Esda, Senior Marketing Manager</h4>
								</div>
								<div class="team5">
									<img src="images/synthia.jpg" alt="Synthia Abdalla" />
									<blockquote><span>"</span>Finish each day and be done with it. You have done what you could; some blunders and absurdities have crept in; forget them as soon as you can. Tomorrow is a new day; you shall begin it serenely and with too high a spirit to be encumbered with your old nonsense." &#8212;Ralph Waldo Emerson</blockquote>
									<h4>Synthia Abdalla, Project Management Director</h4>
								</div>
								<div class="team6">
									<img src="images/claire.jpg" alt="Claire Winters" />
									<blockquote><span>"</span>Finish each day and be done with it. You have done what you could; some blunders and absurdities have crept in; forget them as soon as you can. Tomorrow is a new day; you shall begin it serenely and with too high a spirit to be encumbered with your old nonsense." &#8212;Ralph Waldo Emerson</blockquote>
									<h4>Clair Winters, Internal Auditing Manager</h4>
								</div>
								<div class="team7">
									<img src="images/carey.jpg" alt="Carey Fellon" />
									<blockquote><span>"</span>Finish each day and be done with it. You have done what you could; some blunders and absurdities have crept in; forget them as soon as you can. Tomorrow is a new day; you shall begin it serenely and with too high a spirit to be encumbered with your old nonsense." &#8212;Ralph Waldo Emerson</blockquote>
									<h4>Carey Fellon, Account Manager</h4>
								</div>
								<div class="team8">
									<img src="images/mike.jpg" alt="Mike Miller" />
									<blockquote><span>"</span>Finish each day and be done with it. You have done what you could; some blunders and absurdities have crept in; forget them as soon as you can. Tomorrow is a new day; you shall begin it serenely and with too high a spirit to be encumbered with your old nonsense." &#8212;Ralph Waldo Emerson</blockquote>
									<h4>Mike Miller, Lead Event Designer</h4>
								</div>
								<div class="team9">
									<img src="images/samuel.jpg" alt="sally" />
									<blockquote><span>"</span>Finish each day and be done with it. You have done what you could; some blunders and absurdities have crept in; forget them as soon as you can. Tomorrow is a new day; you shall begin it serenely and with too high a spirit to be encumbered with your old nonsense." &#8212;Ralph Waldo Emerson</blockquote>
									<h4>Jeremy Green, Lead Promoter</h4>
								</div>
								<div class="team10">
									<img src="images/vanessa.jpg" alt="Vanessa Achu" />
									<blockquote><span>"</span>Finish each day and be done with it. You have done what you could; some blunders and absurdities have crept in; forget them as soon as you can. Tomorrow is a new day; you shall begin it serenely and with too high a spirit to be encumbered with your old nonsense." &#8212;Ralph Waldo Emerson</blockquote>
									<h4>Vanessa Achu, Senior Event Coordinator</h4>
								</div>
								<div class="team11">
									<img src="images/dylan.jpg" alt="Dylan Cambell" />
									<blockquote><span>"</span>Finish each day and be done with it. You have done what you could; some blunders and absurdities have crept in; forget them as soon as you can. Tomorrow is a new day; you shall begin it serenely and with too high a spirit to be encumbered with your old nonsense." &#8212;Ralph Waldo Emerson</blockquote>
									<h4>Dylan Cambell, Sales Manager</h4>
								</div>
								<div class="team12">
									<img src="images/greg.jpg" alt="Greg Murphy" />
									<blockquote><span>"</span>Finish each day and be done with it. You have done what you could; some blunders and absurdities have crept in; forget them as soon as you can. Tomorrow is a new day; you shall begin it serenely and with too high a spirit to be encumbered with your old nonsense." &#8212;Ralph Waldo Emerson</blockquote>
									<h4>Greg Murphy, Senior Distribution Manager</h4>
								</div>
							</div>
						</div>
					</div>
				</section>
			</div>
		</section>
	</main>
	<?php
	//get the footer element and close the open body and html tags
	include_once('footer.php');
	?>
