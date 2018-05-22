<?php
/**
 * @package WordPress
 * @subpackage Trisha
 */

get_header(); ?>

	<div class="single-page mutualWrap">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="single-section-title alignc">
						<h1 class="section-title"><?php the_title(); ?></h1>
					</div>

				</div><!--end col-md-12 -->
			</div><!--end row -->

			<?php if (have_posts()) : while (have_posts()) : the_post();

				if(!empty($post->post_content)):
					?>
					<div class="row">
						<div class="col-md-12">

							<?php the_content(); ?>

						</div><!--end col-md-12-->
					</div><!--end row-->
				<?php endif; endwhile; endif; ?>

		</div><!--end container -->
	</div><!--end single-page-->

<?php get_footer(); ?>