<?php
/**
* Template Name: Prepare Page
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<!-- This is the about hero banner -->
		<section>
			<div class="banner prepare-hero">
				<div class="banner-text">
					How to Prepare
				</div>
			</div>
		</section>

      <!-- This is the "pre-trip-planning" section -->
      <section class="banner column">
         <div class="main-title">
           <h1>Pre-Trip Planning</h1>
         </div>
      </section>

		<!-- This is the personal-gear section -->
		<section>
			<div class="">
        <div>
          <img src="" alt="">
        </div>

				<div class="">
					<h3>Personal Gear (clothing)</h3>
          <ul>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
          </ul>
				</div>
			</div>
		</section>


    <!-- This is the equip-list section -->
    <section>
      <div class="">
        <div>
          <img src="" alt="">
        </div>

        <div class="">
          <h3>Equipment List</h3>
          <ul>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
          </ul>
        </div>
      </div>
    </section>

      <!-- This is the "Download Docs" section -->
      <section class="banner column">
         <div class="">
            <h3>Documents for download</h3>
         </div>

        <div>
         <button class="button">
          Fast Facts
         </button>

         <div class="">
            <p>Includes venue, contact and terrain information.</p>
         </div>
       </div>

       <div>
         <button class="button">
          Backgrounder
         </button>

         <div class="">
            <p>Contains information pertaining to the company, its history and current operations.</p>
         </div>
       </div>

      </div>

		</section>

		<!-- This is the explore packages section (only for mobile)-->
		<?php get_template_part( 'template-parts/content', 'explore' ); ?>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
