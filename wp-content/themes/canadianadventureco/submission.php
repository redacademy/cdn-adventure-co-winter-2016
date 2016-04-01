<?php
/**
* Template Name: Submission Page
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <section class="submission container title">

      <h1>We've Received Your Submission!</h1>

      <p>
        Thank you for your request. We will contact you shortly.
      </p>

      <a href="<?php echo esc_url(home_url('/')); ?>" class="button">
          Go Back Home
      </a>

    </section>


  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
