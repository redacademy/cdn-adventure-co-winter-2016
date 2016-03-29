<?php
/**
 * Template Name: Getting Here Page.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

      <!-- This is the getting-here hero banner -->
      <section>
         <div class="banner getting-hero">
            <div class="small-banner-text">
							Valemount is where your adventure begins
						</div>
         </div>
      </section>

      <!-- This is the "never-been-touched terrain" section -->
      <section>
				<div class="center-flex column-flex">
	         <div class="title">
	           <h1>Never-been-touched terrain will leave you mesmerized</h1>
	         </div>
	         <div class="single-column">
	            <p>The Mallard Mountan Lodge is located in one of the most pristine and remote areas
	            of British Columbia, on the west slope of the Rocky Mountains.</p>
	            <p>The winter brings huge snowfalls of perfect dry powder, while in the summer the high alpine
	            offers hiking above the tree line with incredible Rcky Mountain scenery as the backdrop.</p>
	            <p><strong>Valemount, British Columbia</strong> is the staging point for your 30-minute helicopter flights
	            to and from the Mallard Mountain Lodge.</p>
	            <p>On the day of your departure, the helicopter typically leaves very early in the morning
	            (dependent on weather), so we recommend travelling to Valemount at least one day prior. Overnight
	          lodging at the Best Western PLUS Valemount is highly recommended as well.</p>
	         </div>
			 </div>
			 <hr>
      </section>

      <!-- This is the "valemount-map-title" section-->
      <section>
				<div class="center-flex column-flex">
	         <div class="title">
	            <h2>Get yourself to Valemount, and we'll take care of the rest.</h2>
	         </div>
			 </div>
      </section>

			<!-- This is the "google-map" section -->
			<section>
			   <div class="map-cont">
			      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d311094.7126487304!2d-118.259743!3d52.471396!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xda98c98eb93410e8!2sCanadian+Adventure+Company!5e0!3m2!1sen!2sca!4v1458852068826" class="iframe map" frameborder="0" style="border:0" allowfullscreen></iframe>
			      <button class="button map-btn">
			         how to get here
			      </button>
			   </div>
			 </hr>
			</section>

      <!-- This is the "travel-options" section -->
      <section>
				<div class="center-flex column-flex">
         <div class="title">
						<h2>We recommend car or air travel to get you and your gear to Valemount.</h2>
         </div>

         <div class="triple-column container">
            <div class="icons-single-column container">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/car.png" alt="an icon depicting a car" class="icon"/>
              <p><strong>Approximate Driving Times to Valemount, from:</strong></p>
              <ul>
                <li>Kamloops, BC - 3.5 hours</li>
                <li>Kelowna, BC - 5 hours</li>
                <li>Vancouver, BC - 6.5 hours</li>
                <li>Edmonton, AB - 5.5 hours</li>
                <li>Calgary, AB - 6.5 hours</li>
              </ul>
              <a href=""><p>Get driving directions from Google Maps</p></a>
              <p><strong>Parking Your Car:</strong><br>
              Secure parking for our guests is available at the Valemount helicopter staging area.</p>
            </div>

            <div class="icons-single-column container">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/plane.png" alt="an icon depicting a plane" class="icon"/>
              <p>Many of our guests from around the world fly in to join us at the <strong>Kamloops Airport.</strong></p>
              <p>Air service is also availble at the nearby <strong>Prince George Airport.</strong></p>
              <p><strong>Rental cars</strong> are available at both airport locations.</p>
            </div>

            <div class="icons-single-column container">
							<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/lodging.png" alt="pre trip lodging" class="icon"/>
              <p>We recommend a comfortable overnight stay at the <a href="">Best Western PLUS Valemount Inn &amp; Suites</a>,
              prior to your early morning helicopter departure on the first day of your package.</p>
              <p>We have a sepcial business partnership with this hotel, so you'll be sure to get a great rate and have a
              good night's sleep before your big adventure.</p>
            </div>
         </div>

        <div class="center">
          <p><strong>Upon request, we are happy to assist with your transportation arrangements.</strong></p>
        </div>
         </div>
      </section>

      <!-- This is the can't-wait-to-meet-up sub banner -->
      <section>
         <div class="side-banner meet-hero">
            <div class="banner-side-text">
							We can't wait to meet you!
						</div>
         </div>
      </section>

			<!-- This is the explore packages section-->
			<?php get_template_part( 'template-parts/content', 'explore' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
