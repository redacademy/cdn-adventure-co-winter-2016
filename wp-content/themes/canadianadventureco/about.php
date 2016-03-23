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
			<div class="banner">
				<img src="" alt="" />
				<p>Who we are</p>
			</div>
		</section>

      <!-- This is the "get to know the mcmanus family" section -->
      <section>
         <div class="">
           <h1>Get to know the McManus Family</h1>
         </div>
         <div class="">
            <?php //put the info text here ?>
            <p>Lorem ipsum dolor sit amet, at eos veri conceptam, duis equidem eu nam, usu cu errem
              splendide contentiones. At vel vidit efficiendi. Case justo dicta ea vix, cu dolor iudicabit
              eos, nam tation postulant suscipiantur ei. Modo errem veritus at eam. Quo cibo phaedrum vituperata
              ne, per ad probo eripuit, mea te prompta facilis eleifend. Nam debitis lucilius deseruisse ne.
              Qui deserunt philosophia ea, aperiri voluptatum ei nec. Ne offendit ocurreret voluptatibus eos,
              soleat phaedrum ex usu. Ut melius integre petentium mel, his stet veniam invenire eu.
              Vim causae euismod liberavisse id, ei usu facer recusabo. Eum et diceret lobortis.</p>
         </div>
      </section>

		<!-- This is the about sub banner -->
		<section>
			<div class="banner center">
				<img src="" alt="" />
				<p>It all started in 1985</p>
			</div>
		</section>

      <!-- This is the "why we built the mallard lodge" section -->
      <section>
         <div class="">
            <h2>Why we built the Mallard Lodge</h2>
         </div>
         <div class="">
            <?php //put the info text here ?>
            <p>Lorem ipsum dolor sit amet, at eos veri conceptam, duis equidem eu nam, usu cu errem
              splendide contentiones. At vel vidit efficiendi. Case justo dicta ea vix, cu dolor iudicabit
              eos, nam tation postulant suscipiantur ei. Modo errem veritus at eam. Quo cibo phaedrum vituperata
              ne, per ad probo eripuit, mea te prompta facilis eleifend. Nam debitis lucilius deseruisse ne.
              Qui deserunt philosophia ea, aperiri voluptatum ei nec. Ne offendit ocurreret voluptatibus eos,
              soleat phaedrum ex usu. Ut melius integre petentium mel, his stet veniam invenire eu.
              Vim causae euismod liberavisse id, ei usu facer recusabo. Eum et diceret lobortis.</p>
         </div>

			<button class="button">
				Explore the lodge
			</button>
		</section>

		<!-- This is the explore packages section (only for mobile)-->
		<?php get_template_part( 'template-parts/content', 'explore' ); ?>

	</main><!-- #main -->
</div><!-- #primary -->


<?php get_footer(); ?>
