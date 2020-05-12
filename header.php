<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
  <body>

    <header class="header">
      <div class="logo">
        <h1 class="logo-name">Rochelle Hickey</h1>
        <p class="logo-title">Front-End Web Developer &#38; Graphic Designer</p>
      </div>

      <nav id="site-navigation" class="main-navigation-container main-navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( '&#x2630;', 'rochelleportfoliotwentytwenty' ); ?></button>
        <?php
          wp_nav_menu( array(
            'menu_class' => 'navigation',
            'menu-id' => 'primary-menu',
            'theme_location' => 'primary'
          ));
        ?>
      </nav><!-- #site-navigation -->
    </header>