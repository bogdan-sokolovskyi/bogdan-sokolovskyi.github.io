<?php
/**
 * @package WordPress
 * @subpackage Trisha
 */

get_header();
?>

	<div class="single-page mutualWrap">
		<div class="container">
			<div class="row">
				<div class="col-md-12">

					<div class="single-section-title alignc">
						<h1 class="section-title"><?php _e('Blog Archives ', 'match')?></h1>
					</div>

					<?php if (have_posts()) : ?>

					<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
					<?php /* If this is a category archive */ if (is_category()) { ?>
						<h2 class="title-archive"><?php _e('Archive for ', 'match')?>"<?php single_cat_title(); ?>"</h2>
						<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
						<h2 class="title-archive"><?php _e('Posts Tagged ', 'match')?>&#8216;<?php single_tag_title(); ?>&#8217;</h2>
						<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
						<h2>Archive for <?php the_time('F jS, Y'); ?></h2>
						<h2 class="title-archive"><?php _e('Archive for ', 'match')?><?php echo get_the_date(get_option('date_format')); ?></h2>
						<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
						<h2 class="title-archive"><?php _e('Archive for ', 'match')?><?php echo get_the_date(get_option('date_format')); ?></h2>
						<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
						<h2 class="title-archive"><?php _e('Archive for ', 'match')?><?php echo get_the_date(get_option('date_format')); ?></h2>
						<?php /* If this is an author archive */ } elseif (is_author()) { ?>
						<h2 class="title-archive"><?php _e('Author Archive ', 'match')?></h2>
						<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
						<h2 class="title-archive"><?php _e('Blog Archives ', 'match')?></h2>
					<?php } ?>

				</div><!--end col-md-12 -->
			</div><!--end row -->

			<?php

			$count = 0;

			while (have_posts()) : the_post();

				$classes_post = array('col-md-4', 'blog-col');

				if (mt_is_type_page()) continue;

				if ($count % 3 == 0){ ?> <div class="row"> <?php }?>

				<div id="post-<?php the_ID(); ?>" <?php post_class($classes_post); ?>>
					<div class="blog-img">
						<?php if ( has_post_thumbnail($post->ID ) ){ ?>

							<?php the_post_thumbnail('small-img', array('class' => 'img-responsive', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().''));

						} ?>

						<div class="blog-more">
							<div class="view-more">
								<div class="view-more-cell">
									<a class="btn-style-1" href="<?php the_permalink() ?>" title=""><?php _e('Read More', 'match')?></a>
								</div>
							</div>
						</div><!--end .blog-more-->

					</div><!--end blog-img-->
					<div class="blog-info">posted on <span><?php echo get_the_date(get_option('date_format')); ?></span> | in <?php the_category(', ') ?> </div>
					<div class="blog-text">
						<h4 class="title-blog-post"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
						<?php mt_excerpt('mt_excerptlength_index', 'mt_excerptmore');?>
					</div>
				</div><!--blog-col-->

				<?php $count++; if(($count % 3) == 0) {?> </div><!--end row--> <?php }?>

			<?php endwhile;endif; if(($count % 3) == 1 || ($count % 3) == 2) {?> </div><!--end row--> <?php } ?>


		<?php if(function_exists('mt_pagenavi')) :

		?>
		<div class="col-md-12">

			<?php
			mt_pagenavi();


			else : ?>
				<ul class="other-entries">
					<li class="newer-entries"><span><?php previous_posts_link('&laquo; Previous') ?></span></li>
					<li class="older-entries"><span><?php next_posts_link('Next &raquo;') ?></span></li>
				</ul>

			<?php endif; ?>

		</div><!--end col-md-12-->

	</div><!--end row -->
	</div><!--end container-->
	</div><!--end single page-->

<?php get_footer();?>