<?php
/**
* Template Name: Summer-Packages Page
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<!-- This is the summer-packages hero banner -->
		<section>
			<div class="banner summer-packages-hero">
				<div class="banner-text">
					Summer Packages
				</div>
			</div>
		</section>

      <!-- This is the "our summer season" section -->
      <section>
				<div class="banner column-flex">
	         <div class="main-title">
	           <h1>Our Summer Season is from TBD to TBD</h1>
	         </div>
	         <div class="single-column">
	            <p>Lorem ipsum dolor sit amet, at eos veri conceptam, duis equidem eu nam, usu cu errem
	              splendide contentiones. At vel vidit efficiendi. Case justo dicta ea vix, cu dolor iudicabit
	              eos, nam tation postulant suscipiantur ei.</p>
	         </div>
			 </div>
      </section>

      <!-- This is the "summer activities" section -->
      <section class="banner column">
         <div class="">
            <h2>Summer Activities</h2>
         </div>
         <div class="">
            <img src="" alt="Hiking Boot Icon">
            <img src="" alt="Camping Tent Icon">
            <img src="" alt="Relaxation Hut Icon">
         </div>

         <div>
           <p>Lorem ipsum dolor sit amet, at eos veri conceptam, duis equidem eu nam, usu cu errem
             splendide contentiones. At vel vidit efficiendi. Case justo dicta ea vix, cu dolor iudicabit
             eos, nam tation postulant suscipiantur ei.</p>
        </div>
		</section>

    <!-- This is the guided sub banner -->
    <section>
      <div class="banner guided-summer-hero">
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
