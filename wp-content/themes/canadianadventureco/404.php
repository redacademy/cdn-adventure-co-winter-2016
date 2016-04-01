<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area site-404">
		<main id="main" class="site-main" role="main">

			<section>
				<div class="center-flex column-flex">
					<h1 class="title center"><?php echo esc_html( 'Oops! That page can&rsquo;t be found.' ); ?></h1>
				</div>
			</section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
