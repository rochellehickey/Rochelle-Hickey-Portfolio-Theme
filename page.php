<?php

// Being used by the Blog Site Page

  // Header Area
  get_header();
?>


<div class="main-content-width-wrapper">
  <main class="main-content">

    <h1><?php the_title(); ?></h1>


    <?php
      $args = array(
        'post_type' => 'post',
      );
      $blogposts = get_posts( $args );

      if(have_posts()):
    ?>

    <div class="blog-post-wrapper">
      <?php foreach ($blogposts as $key => $post) : setup_postdata( $post ) ?>

        <div class="blog-item <?php echo ($key == 0 ) ? 'active' : ''?>">
          <?php get_the_post_thumbnail(); ?>

            <!-- Display the Title as a link to the Post's permalink -->
            <h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
            <!-- Display the date (November 16th, 2009 format) and a link to other posts by this posts author -->
            <p class="entry-dates">Posted: <?php the_time('F j, Y'); ?></p>
            <!-- Display the post exerpt -->
            <p><?php the_excerpt(); ?></p>

        </div> <!-- end .blog-item -->

      <?php endforeach; ?>

    </div> <!-- end .blog-post-wrapper -->

    <?php endif; ?>




  </main><!-- end .main-content -->
</div><!-- end .main-content-width-wrapper -->

<?php
  // Footer Area
  get_footer();
?>