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
					<?php $blog_title = ot_get_option('blog_title'); ?>
					<h1 class="section-title"><?php echo $blog_title;?></h1>
				</div>

				<h2 class="title-archive"><?php _e('Search results for ', 'match')?>"<?php the_search_query(); ?>"</h2>

			</div><!--end col-md-12 -->
		</div><!--end row -->



		<div class="row">

			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

				<?php if (mt_is_type_page()) continue; ?>

				<div class="col-sm-6 col-md-4 blog-col">
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

			<?php endwhile; endif;?>

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
