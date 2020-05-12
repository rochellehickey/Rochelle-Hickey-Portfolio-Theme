<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package rochelleportfoliotwentytwenty
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main  class="main-content">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'rochelleportfoliotwentytwenty' ); ?></h1>
				</header><!-- end .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'rochelleportfoliotwentytwenty' ); ?></p>

				</div><!-- end .page-content -->
			</section><!-- end .error-404 -->

		</main><!-- end main -->
	</div><!-- end .content-area -->

<?php
get_footer();
?>