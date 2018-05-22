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

                    <div class="single-section-title alignc wow fadeInUp">
                        <h1 class="section-title"><?php _e('Blog', 'match')?></h1>
                    </div>

                </div><!--end col-md-12 -->
            </div><!--end row -->

            <div class="row">

                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php $classes_post = array('col-md-8', 'blog-post-single');?>

                <article id="post-<?php the_ID(); ?>" <?php post_class($classes_post); ?>>
                    <div class="single-post-img wow fadeInUp">
                        <?php if ( has_post_thumbnail($post->ID ) ){ ?>

                            <?php the_post_thumbnail('blog-image', array('class' => 'img-responsive', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().''));

                        } ?>
                    </div><!--end single-post-img-->
                    <div class="blog-info wow fadeInUp">posted on <span><?php echo get_the_date(get_option('date_format')); ?></span> | in <?php the_category(', ') ?> </div>
                    <div class="content wow fadeInUp">
                        <h3 class="single-title-blog-post"><?php the_title(); ?></h3>

                        <?php the_content();?>

                        <?php endwhile; else: ?>
                            <p><?php _e('Sorry, no posts matched your criteria.', 'match')?></p>
                        <?php endif; ?>

                        <?php comments_template(); ?>

                    </div><!--end content-->
                </article><!--col-md-8-->

                <?php get_sidebar();?>

            </div><!--end row -->
        </div><!--end container -->
    </div><!--end single-page-->

<?php get_footer();?>