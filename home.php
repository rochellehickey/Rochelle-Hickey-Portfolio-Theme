<?php
/* Template Name: Home Template */

  // Header Area
  get_header();
?>

<div class="main-content-width-wrapper">
  <h1><?php echo get_the_title() ?></h1>
  <main class="main-content">

      <!-- Start the Loop. -->
       <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

        <!-- Display the Post's content. -->

          <?php the_content(); ?>

        <!-- Stop The Loop (but note the "else:" - see next line). -->

       <?php endwhile; else : ?>

        <!-- The very first "if" tested to see if there were any Posts to -->
        <!-- display.  This "else" part tells what do if there weren't any. -->
        <p><?php esc_html_e( 'Sorry, this does not exist.' ); ?></p>

        <!-- REALLY stop The Loop. -->
     <?php endif; ?>

    </main><!-- end .main-content -->
  </div><!-- end .main-content-width-wrapper -->


<?php
  // Footer Area
  get_footer();
?>