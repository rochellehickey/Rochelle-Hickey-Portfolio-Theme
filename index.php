<?php
/* Main Template File */

  // Header Area
  get_header();
?>


<div class="main-content-width-wrapper">
  <main class="main-content">

    <!-- Begin The Loop -->
    <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>

        <h2 id="post-<?php the_ID(); ?>">
        <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
        <p class="entry-dates"><?php the_time('F jS, Y') ?> by <?php the_author() ?></p>

        <div class="entry">
          <?php the_content(); ?>
        </div>

        <!-- Display a comma separated list of the Post's Categories -->
        <p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>

      <!-- Stop While -->
      <?php endwhile; ?>

    <!-- Stop The Loop -->
    <?php endif; ?>


  </main><!-- end .main-content -->
</div><!-- end .main-content-width-wrapper -->

<?php
  // Footer Area
  get_footer();
?>