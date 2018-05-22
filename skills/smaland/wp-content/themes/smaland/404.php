<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package smaland
 */

get_header(); ?>

	<!-- Scrolling Content -->
	<section class="main-content">
		<div class="row">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'smaland' ); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e( 'It looks like nothing was found at this location.', 'smaland' ); ?></p>
				</div><!-- .page-content -->
			</section><!-- .error-404 -->

	</div>
	</section>
	<!-- End Scrolling Content -->

<?php
get_footer();
