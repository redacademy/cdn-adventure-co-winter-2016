<?php
/**
* Template Name: About Page
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<!-- This is the about hero banner -->
		<section>
			<div class="banner about-hero">
				<div class="banner-text">
					Who we are
			</div>
		</section>

      <!-- This is the "get to know the mcmanus family" section -->
      <section>
				<div class="center-flex column-flex">
	         <div class="title">
	           <h1>Get to know the McManus Family</h1>
	         </div>

         <div class="single-column">
            <p><?php echo CFS()->get('get_to_know'); ?></p>
         </div>
				</div>
      </section>

		<!-- This is the about sub banner -->
		<section>
			<div class="banner start-hero">
				<div class="banner-text">
					It all started in 1985
				</div>
			</div>
		</section>

      <!-- This is the "why we built the mallard lodge" section -->
      <section>
				<div class="center-flex column-flex">
	         <div class="title">
	            <h2>Why we built the Mallard Lodge</h2>
	         </div>
	         <div class="single-column">
	            <p><?php echo CFS()->get('why_we_built');?></p>
	         </div>

					 <button class="button">
						 Explore the lodge
					 </button>

			 </div>


		</section>

		<!-- This is the explore packages section (only for mobile)-->
		<?php get_template_part( 'template-parts/content', 'explore' ); ?>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
