<?php
/* Template Name: Single Blog Page Template */

// Being used by the Blog Site Page

  // Header Area
  get_header();
?>


<div class="main-content-width-wrapper">
  <main class="main-content">

    <h1><?php the_title(); ?></h1>

    <!-- Begin the Loop -->
    <?php if (have_posts()) : ?>

      <!-- If there is a post, -->
      <?php if (($wp_query->post_count) > 1) : ?>
         <?php while (have_posts()) : the_post(); ?>
           <!-- Add the excerpt -->
              <?php the_excerpt() ?>
         <?php endwhile; ?>

      <?php else : ?>

        <!-- else add content for single post -->
        <?php while (have_posts()) : the_post(); ?>
            <?php the_content() ?>
        <?php endwhile; ?>

      <?php endif; ?>

    <?php else : ?>
         <!-- Stuff to do if there are no posts-->

    <?php endif; ?>

    &#8230;

    <!-- Post date information -->
    <p class="postmetadata alt entry-dates">
      This entry was posted on <?php the_time('l, F j, Y') ?> and is filed under <?php the_category(', ') ?>.
    </p>

    <!-- Previous and Next page links -->
    <div class="previous-next-page">
      <p>
        <?php previous_post_link( '&#8612; %link', '%title', false ); ?> |
        <?php next_post_link( '%link &#8614;', '%title', false ); ?>
      </p>
    </div>

  </main><!-- end .main-content -->
</div><!-- end .main-content-width-wrapper -->

<?php
  // Footer Area
  get_footer();
?>