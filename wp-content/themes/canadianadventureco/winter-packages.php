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
			<div class="center-flex column-flex spacing">
				<div class="title">
					<h1>Our Winter Season is from November to April</h1>
				</div>

				<div class="single-column-2 center">

					<p><?php echo CFS()->get('winter_season');?></p>
				</div>
			</div>
		</section>

		<!-- This is the "winter-activities-icons" section -->
		<section>
			<!-- <div class="center-flex"> -->
			<div class="center-flex column-flex spacing bottom-spacing">

				<div class="title">
					<h2>Winter Activities</h2>
				</div>

				<div class="triple-column container spacing">
					<div class="icons-single-column container">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/ski-icon.png" alt="an icon depicting a pair of skiis" class="icon"/>
						<h4>Ski</h4>
					</div>

					<div class="icons-single-column container">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/snowboard-icon.png" alt="an icon depicting a snowboard" class="icon"/>
						<h4>Snowboard</h4>
					</div>

					<div class="icons-single-column container">
						<img src="<?php echo get_template_directory_uri() ?>/assets/images/icons/snowshoe-icon.png" alt="an icon depicting a pair of snowshoes" class="icon"/>
						<h4>Snowshoe</h4>
					</div>

				</div>

				<div class="center single-column-2">
					<p><?php echo CFS()->get('winter_activities');?></p>
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
					The Meals
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

		<!-- This is the "maximum-groups" section -->

		<?php get_template_part( 'template-parts/content', 'maximum' ); ?>


		<!-- This is the "trip-estimate" section -->

		<?php get_template_part( 'template-parts/content', 'estimate' ); ?>



	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
