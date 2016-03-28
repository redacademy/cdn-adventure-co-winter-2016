<?php
/**
* Template Name: Prepare Page
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<!-- This is the "hot-to-prepare" hero banner -->
		<section>
			<div class="banner prepare-hero">
				<div class="banner-text">
					How to Prepare
				</div>
			</div>
		</section>

      <!-- This is the "pre-trip-planning" section -->
      <section>
				<div class="center-flex column-flex">
	         <div class="title">
	           <h1>Pre-Trip Planning</h1>
	         </div>

					 <div class="single-column">
							<p>Lorem ipsum dolor sit amet, at eos veri conceptam, duis equidem eu nam, usu cu errem
								splendide contentiones. At vel vidit efficiendi. Case justo dicta ea vix, cu dolor iudicabit
								eos, nam tation postulant suscipiantur ei. Modo errem veritus at eam. Quo cibo phaedrum vituperata
								ne, per ad probo eripuit, mea te prompta facilis eleifend. Nam debitis lucilius deseruisse ne.
								Qui deserunt philosophia ea, aperiri voluptatum ei nec. </p>
					 </div>
			 </div>
      </section>

		<!-- This is the "personal-gear" section -->
		<section>
			<div class="center-flex column-flex">
        <div>
					<img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/getting-here/we-cant-wait.jpg" alt="snowboarders hikinging up a mountain on a sunny day"/>
        </div>

				<h2>Personal Gear & Clothing</h2>

				<div class="list-double-column container">
					<ul>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
          </ul>

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


    <!-- This is the "equip-list" section -->
    <section>
			<div class="center-flex column-flex">
        <div>
					<!-- <img src="<?php echo get_template_directory_uri() ?>/assets/images/pictures/how-to-prepare/prepare3.jpg" alt="Equipment gear for mountain sports"/> -->
        </div>

				<h2>Equipment List</h2>

				<div class="list-double-column container">
          <ul>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
            <li>Lorem Ipsum is simply</li>
          </ul>

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

		<!-- This is the "laugh"" hero banner -->
		<section>
			<div class="banner laugh-hero">
			</div>
		</section>

      <!-- This is the "Download-Docs" section -->
      <section>

					<div class="center-flex column-flex">
						 <div class="title">
								<h2>Documents for download</h2>
		         </div>
					</div>

				<div class="list-double-column container">

						 <div class="center column-flex">
			         <button class="button">
			          Fast Facts
			         </button>
			         <div class="center">
			            <p>Includes venue, contact and terrain information.</p>
			         </div>
		        </div>

			       <div class="center column-flex">
			         <button class="button">
			          Backgrounder
			         </button>
							 <div class="center">
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
