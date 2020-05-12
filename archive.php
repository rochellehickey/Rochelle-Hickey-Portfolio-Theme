<?php

// The template used to display archive content

  // Header Area
  get_header();
?>


<div class="main-content-width-wrapper">
  <main class="main-content">

    <h1>Archives</h1>

    <?php
      // Get the categories in an array
      $categories = get_categories();

      // for each category, print out the category name in an H2 tag
      foreach ($categories as $category) {
        echo '<h2>'. $category->cat_name .'</h2>';

        // within each category, print out each blog link
        foreach (get_posts('cat='.$category->term_id) as $post) {
          setup_postdata( $post );
          echo '<p><a href="'.get_permalink($post->ID).'">'.get_the_title().'</a></p>';
        }
      }
    ?>

  </main><!-- end .main-content -->
</div><!-- end .main-content-width-wrapper -->

<?php
  // Footer Area
  get_footer();
?>