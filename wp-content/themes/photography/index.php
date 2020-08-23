<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		</main>
  </section>

<body class="home-page">

    <section class="jumbotron-section">
      <div class="jumbotron-outer">
        <div class="jumbotron-inner">
          <div class="jumbotron-overlay">
          </div>

          <div class="wrapper menu-wrapper">
            <div class="logo-outer">
              <img class="logo" src="<?php bloginfo('template_url'); ?>/images/LOGO2.png" alt="Amanda Lea Logo">
            </div>
            <div class="menu-toggle">
              <div class="menu-delimiter"></div>
              <div class="menu-delimiter"></div>
              <div class="menu-delimiter"></div>
              <div class="menu-delimiter"></div>
            </div>
            <div class="menu-outer">
              <ul class="menu-inner">
                <li class="menu-item"><a href="http://amandaleaphotography.com">Home</a></li>
                <li class="menu-item menu-item-fix"><span>Gallery</span>
                  <ul class="menu-sub-list">
                    <!--<li><a href="http://amandaleaphotography.com/clp/gallery.php" class="menu-sub-item">View All</a></li>-->
                    <li><a href="http://amandaleaphotography.com/clp/seniors.php" class="menu-sub-item">Seniors</a></li>
                    <li><a href="http://amandaleaphotography.com/clp/weddings.php" class="menu-sub-item">The Big Day</a></li>
                    <li><a href="http://amandaleaphotography.com/clp/family.php" class="menu-sub-item">Children/Family</a></li>
                    <!--<li><a href="http://amandaleaphotography.com/clp/portraits.php" class="menu-sub-item">Portraits</a></li>-->
                    <li><a href="http://amandaleaphotography.com/clp/couples.php" class="menu-sub-item">Couples</a></li>
                  </ul>
                </li>
                <li class="menu-item"><a href="http://amandaleaphotography.com/clp/about.php">About</a></li>
                <li class="menu-item menu-item-fix"><a href="http://amandaleaphotography.com/clp/investments.php">Investment</a></li>
                <!--<li class="menu-item"><a href="http://amandaleaphotography.com/clp/contact.php">Contact</a></li>-->
                <!--<li class="menu-item"><a href="http://amandaleaphotography.com/clp/misc.php">Investment</a></li>-->
                <li class="menu-item menu-item-fix"><span>Extra! Extra!</span>
                <ul class="menu-sub-list">
                  <li><a href="http://amandaleaphotography.com/clp/misc.php" class="menu-sub-item">Extras</a></li>
                  <!--<li><a href="http://amandaleaphotography.com/clp/gallery.php" class="menu-sub-item">Blog</a></li>-->
                  <li><a href="http://thegrazel.wixsite.com/athaessly" target="_blank" class="menu-sub-item">A.T.Haessly</a></li>
                </ul>
                </li>
              </ul>
            </div>
          </div>
          <div class="mobile-menu-dropdown expand">
            <ul class="mobile-menu-inner">
              <li class="mobile-menu-item"><a href="http://amandaleaphotography.com">Home</a></li>
              <li class="mobile-menu-item inner-dropdown"><span>Gallery</span>
                <ul class="mobile-menu-sub-list">
                  <li><a href="http://amandaleaphotography.com/clp/gallery.php" class="mobile-menu-sub-item">View All</a></li>
                  <li><a href="http://amandaleaphotography.com/clp/seniors.php" class="mobile-menu-sub-item">Seniors</a></li>
                  <li><a href="http://amandaleaphotography.com/clp/weddings.php" class="mobile-menu-sub-item">The Big Day</a></li>
                  <li><a href="http://amandaleaphotography.com/clp/family.php" class="mobile-menu-sub-item">Children/Family</a></li>
                  <li><a href="http://amandaleaphotography.com/clp/portraits.php" class="mobile-menu-sub-item">Portraits</a></li>
                  <li><a href="http://amandaleaphotography.com/clp/couples.php" class="mobile-menu-sub-item">Couples</a></li>
                </ul>
              </li>
              <li class="mobile-menu-item"><a href="http://amandaleaphotography.com/clp/about.php">About</a></li>
              <!--<li class="mobile-menu-item"><a href="http://amandaleaphotography.com/clp/contact.php">Contact</a></li>-->
              <!--<li class="mobile-menu-item"><a href="http://amandaleaphotography.com/clp/misc.php">Investment</a></li>-->
              <li class="mobile-menu-item inner-dropdown"><span>Extra! Extra!</span>
              <ul class="mobile-menu-sub-list">
                <li><a href="http://amandaleaphotography.com/clp/misc.php" class="menu-sub-item">Extras</a></li>
                <!--<li><a href="http://amandaleaphotography.com/clp/gallery.php" class="menu-sub-item">Blog</a></li>-->
                <li><a href="http://thegrazel.wixsite.com/athaessly" target="_blank" class="menu-sub-item">A.T.Haessly</a></li>
              </ul>
              </li>
            </ul>
          </div>

          <div class="slogan-wrapper">
            <div class="slogan-box">
              <span>Every photo is a story, what would you like yours to say.</span>
            </div>
          </div>
					<!-- Slideshow container -->
					<div class="slideshow-container single-item-slide">

						<!-- Full-width images with number and caption text -->
						<div class="mySlides slide1">
						</div>
						<div class="mySlides slide2">
						</div>
						<div class="mySlides slide3">
						</div>
            <div class="mySlides slide4">
						</div>
            <div class="mySlides slide5">
						</div>
            <div class="mySlides slide6">
						</div>
            <div class="mySlides slide7">
						</div>
            <div class="mySlides slide8">
						</div>

					</div>
					<br>

					<!-- The dots/circles -->
					<div style="text-align:center">
						<span class="dot" onclick="currentSlide(1)"></span>
						<span class="dot" onclick="currentSlide(2)"></span>
						<span class="dot" onclick="currentSlide(3)"></span>
					</div>
        </div>
      </div>
    </section>

    <section class="about-section">
      <div class="about-wrapper">
        <div class="about-logo">
					<img class="logo" src="<?php bloginfo('template_url'); ?>/images/LOGO2-DARK.png" alt="Amanda Lea Logo">
        </div>
        <div class="about-content">
          <p>
            Waistcoat bicycle rights neutra you probably haven't heard of them. Af synth gluten-free brunch. Live-edge
            cardigan typewriter, meggings hexagon iceland offal unicorn kinfolk. Bicycle rights whatever YOLO small batch dreamcatcher
            sriracha. Poke hell of kinfolk hashtag pop-up, actually selfies paleo pork belly kombucha vaporware gentrify XOXO air plant
            letterpress. Tbh pickled yr coloring book, banjo butcher iPhone.
           </p>
          <p>
            Edison bulb humblebrag seitan, post-ironic hot chicken polaroid plaid pok pok lo-fi single-origin coffee. Austin franzen
            poutine kale chips roof party yuccie. Mustache irony retro hashtag taxidermy hella locavore. Taxidermy small batch
            thundercats fashion axe cray, lo-fi before they sold out farm-to-table narwhal forage ennui wayfarers put a bird on it
            gochujang trust fund. Shabby chic letterpress coloring book, flannel jianbing kinfolk whatever. Poutine subway tile fam
            jean shorts twee taiyaki, 3 wolf moon gluten-free.
          </p>
        </div>
      </div>
    </section>
    <section class="testimonials-section">
      <!--<div class="parallax-window" data-parallax="scroll" data-image-src="images/parallax.jpg"></div>-->
      <div class="testimonials-wrapper">
        <div class="testimonials-logo">
          <img class="logo" src="<?php bloginfo('template_url'); ?>/images/testimonials.png" alt="">
        </div>
        <div class="testimonials-box">
          <div class="single-item">
            <div>
              <span>
                -Cat (2017)
              </span>
              <p>
                She's a blast to have around, and did an amazing job with our wedding photos! She definitely has an artistic eye that you can't find just anywhere!!!
              </p>
            </div>
            <div>
              <span>
                ​-Denise (2016)
              </span>
              <p>
                Amanda did our 20th anniversary photos. Very professional and I loved how they turned out. She was very open to my ideas of what I wanted and didn't want for photos.
              </p>
            </div>
              <div>
                <span>
                  -Shane (2016)
                </span>
                <p>
                  Fantastic photo shoot today. Amanda was flexible and scheduled a site visit to our business. She took my basic ideas and built on them, combining our industry and product into my professional head shots. I recommend Amanda for your photo shoot.
                </p>
            </div>
            <div>
              <span>
                -Kayla (2015)
              </span>
              <p>
                Amanda did an amazing job on these pictures! We are so happy the way that they turned out. Can't wait to see the rest and the pictures she will take on our wedding day!
              </p>
            </div>
            <div>
              <span>
                ​-Sue (2015)
              </span>
              <p>
                These pictures of Charlie & Kayla are the best I've seen in a long time. I can't pick out a "favorite" one, they're all great!
              </p>
            </div>
            <div>
              <span>
                -Stephanie (2014)
              </span>
              <p>
                These are fantastic...It meant so much that you were there for our special day!
              </p>
            </div>
          </div>
        </div>
      </section>

      <section class="parallax-section">
        <div class="parallax-box">

        </div>
	  </section>


      <section class="contact-section">
        <div class="contact-logo">
          <img class="logo" src="<?php bloginfo('template_url'); ?>/images/contact.png" alt="">
        </div>

				<div class="contact-wrapper">
					<h2 style="text-align:center">Coming Soon</h2>
        </div>

				<div class="cal-wrapper">
					<iframe src="https://calendar.google.com/calendar/embed?src=amandaleaphotograph%40gmail.com&ctz=America%2FChicago" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
				</div>

      </section>
<?php
get_footer();
