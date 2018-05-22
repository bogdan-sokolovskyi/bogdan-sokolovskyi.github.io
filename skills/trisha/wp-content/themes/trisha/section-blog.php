<?php
$blog_nr_posts = ot_get_option('blog_nr_posts');

$query = array('post_type' => 'post', 'showposts'=> $blog_nr_posts);
$blog_query = new WP_Query($query);
$count = 0;

while ($blog_query -> have_posts()) : $blog_query -> the_post();

	$classes_post = array('col-md-4', 'blog-col');

	if ($count % 3 == 0){ ?> <div class="row">  <?php } ?>

	<div id="post-<?php the_ID(); ?>" <?php post_class($classes_post); ?>>
		<div class="blog-img wow fadeInUp">
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
		<div class="blog-info wow fadeInUp">posted on <span><?php echo get_the_date(get_option('date_format')); ?></span> | in <?php the_category(', ') ?> </div>
		<div class="blog-text wow fadeInUp">
			<h4 class="title-blog-post"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
			<?php mt_excerpt('mt_excerptlength_index', 'mt_excerptmore');?>
		</div>
	</div><!--blog-col-->

	<?php $count++; if(($count % 3) == 0) {?> </div><!--end row--> <?php }?>

<?php endwhile; if(($count % 3) == 1 || ($count % 3) == 2) {?> </div><!--end row--> <?php } ?> 