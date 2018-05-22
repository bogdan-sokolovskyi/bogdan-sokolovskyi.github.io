<?php
/**
 * @package WordPress
 * @subpackage Trisha
 */

?>

<div class="row">

  <div class="col-md-8 portfolioLeft">

    <?php  $portfolio_radio = get_post_meta($post->ID, "portfolio_radio", true);

    switch ($portfolio_radio) {
      case 'slider':

        ?>
        <div class="flexslider flexslider-project">
          <ul class="slides">

            <?php  $portfolio_slides = get_post_meta($post->ID, "portfolio_slides", true);

            foreach( $portfolio_slides as $portfolio_slide ) {

              ?>
              <li>  <img class="img-responsive" src="<?php echo esc_url($portfolio_slide['portfolio_slide_upload']); ?>" alt="" />   </li>
              <?php
            } //end foreach
            ?>

          </ul>
        </div><!--end flexslider-->

        <?php
        break;
      case 'image':
        ?>
        <div class="single-img">
          <?php  $portfolio_image = get_post_meta($post->ID, "portfolio_image", true); ?>

          <img class="img-responsive" src="<?php echo esc_url($portfolio_image); ?>" alt="" />
        </div>

        <?php
        break;
      case 'video':
        ?>

        <div class="embed single-img">
          <?php  $portfolio_video = get_post_meta($post->ID, "portfolio_video", true);

          echo $portfolio_video;
          ?>

        </div>

        <?php
        break;
    }
    ?>


  </div><!--end portfolioLeft-->

  <div class="col-md-4 portfolioRight">
    <h4 class="project-title"><?php the_title();?></h4>

    <?php if (have_posts()) : while (have_posts()) : the_post(); 	 ?>
      <?php the_content(); ?>

    <?php endwhile; else: ?>
      <p>Sorry, no posts matched your criteria.</p>
    <?php endif; ?>

  </div><!--end portfolioRight-->

</div><!--end row-->