<?php
/**
* Template Name: Winter-Packages Page
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<!-- This is the winter-packages hero banner -->
		<section>
			<div class="banner winter-packages-hero">
				<div class="banner-text">
					Winter Packages
				</div>
			</div>
		</section>

      <!-- This is the "our-winter-season" section -->
      <section>
				<div class="center-flex column-flex">
	         <div class="title">
	           <h1>Our Winter Season is from November to April</h1>
	         </div>
	         <div class="single-column">
	            <p>Canadian Adventure Company offers highly customized
	              packages for guests, so that they can enjoy their perfect
	              getaway at the Mallard Lodge. Due to the often extreme nature
	              of the winter season, all of our winter season packages are
	              guided by experts.</p>
	         </div>
			 </div>
      </section>

      <!-- This is the "winter-activities-icons" section -->
      <section>
				<!-- <div class="center-flex"> -->
				<div class="center-flex column-flex">

         <div class="title">
            <h2>Winter Activities</h2>
         </div>

         <div class="triple-column container">
					 <div class="icons-single-column container">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/snow-icon.png" alt="an icon depicting a pair of skiis" class="icon"/>
						<h4>Ski</h4>
					</div>

					<div class="icons-single-column container">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/snow-icon.png" alt="an icon depicting a snowboard" class="icon"/>
						<h4>Snowboard</h4>
					</div>

					<div class="icons-single-column container">
            <img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/snow-icon.png" alt="an icon depicting a pair of snowshoes" class="icon"/>
						<h4>Snowshoe</h4>
					</div>

         </div>

         <div class="single-column">
           <p>When you arrive for your winter adventure, spend your days skiing,
             snowboarding, snowshoeing or just relaxing in the lodge. With your guide,
             you’ll experience some of the most remote regions of British Columbia and
             ski down slopes that have never been skiied before.</p>
        </div>
			<!-- </div> -->
		 </div>
		</section>

    <!-- This is the guided sub banner -->
    <section>
      <div class="banner guided-winter-hero">
        <div class="banner-text">
          Guided By Experts
        </div>
      </div>
    </section>

    <!-- This is the "safety priority" section -->

		<?php get_template_part( 'template-parts/content', 'safety' ); ?>


    <!-- This is the meals sub banner -->
    <section>
      <div class="banner meals-hero">
        <div class="banner-text">
          Meals
        </div>
      </div>
    </section>


    <!-- This is the "cooking" section -->

		<?php get_template_part( 'template-parts/content', 'cooking' ); ?>


    <!-- This is the small-groups sub banner -->
    <section>
      <div class="banner small-groups-hero">
        <div class="banner-text">
          Small Groups
        </div>
      </div>
    </section>

    <!-- This is the "maximum groups" section -->

		<?php get_template_part( 'template-parts/content', 'maximum' ); ?>


<!-- This is the "trip-estimate" section -->

<?php get_template_part( 'template-parts/content', 'estimate' ); ?>



	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
