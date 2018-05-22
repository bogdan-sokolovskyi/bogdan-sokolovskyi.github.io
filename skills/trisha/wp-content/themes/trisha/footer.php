<?php
/**
 * @package WordPress
 * @subpackage Trisha
 */
?>

<footer class="mutualWrap footer">

  <div class="container">

    <?php
    $mt_social_facebook_url = ot_get_option( 'mt_social_facebook_url');
    $mt_social_twitter_url = ot_get_option( 'mt_social_twitter_url');
    $mt_social_gplus_url = ot_get_option( 'mt_social_gplus_url');
    $mt_social_linkedin_url = ot_get_option( 'mt_social_linkedin_url');
    $mt_social_pinterest_url = ot_get_option( 'mt_social_pinterest_url');
    $mt_social_youtube_url = ot_get_option( 'mt_social_youtube_url');
    $mt_social_vimeo_url = ot_get_option( 'mt_social_vimeo_url');
    $mt_social_instagram_url = ot_get_option( 'mt_social_instagram_url');
    $mt_social_dribbble_url = ot_get_option( 'mt_social_dribbble_url');
    $mt_social_skype_url = ot_get_option( 'mt_social_skype_url');
    ?>

    <div class="row">
      <div class="col-md-12 footer-icons">

        <ul class="footer-social wow fadeInUp">

          <?php if (!empty($mt_social_facebook_url) ): ?>
            <li><a class="social-facebook" href="<?php echo esc_url($mt_social_facebook_url);?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
          <?php endif; ?>

          <?php if (!empty($mt_social_twitter_url) ): ?>
            <li><a class="social-twitter" href="<?php echo esc_url($mt_social_twitter_url);?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
          <?php endif; ?>

          <?php if (!empty($mt_social_gplus_url) ): ?>
            <li><a class="social-gplus" href="<?php echo esc_url($mt_social_gplus_url);?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
          <?php endif; ?>

          <?php if (!empty($mt_social_linkedin_url) ): ?>
            <li><a class="social-linkedin" href="<?php echo esc_url($mt_social_linkedin_url);?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
          <?php endif; ?>

          <?php if (!empty($mt_social_pinterest_url) ): ?>
            <li><a class="social-pinterest" href="<?php echo esc_url($mt_social_pinterest_url);?>" target="_blank"><i class="fa fa-pinterest"></i></a></li>
          <?php endif; ?>

          <?php if (!empty($mt_social_youtube_url) ): ?>
            <li><a class="social-youtube" href="<?php echo esc_url($mt_social_youtube_url);?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
          <?php endif; ?>

          <?php if (!empty($mt_social_vimeo_url) ): ?>
            <li><a class="social-vimeo" href="<?php echo esc_url($mt_social_vimeo_url);?>" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>
          <?php endif; ?>

          <?php if (!empty($mt_social_instagram_url) ): ?>
            <li><a class="social-instagram" href="<?php echo esc_url($mt_social_instagram_url);?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
          <?php endif; ?>

          <?php if (!empty($mt_social_dribbble_url) ): ?>
            <li><a class="social-dribbble" href="<?php echo esc_url($mt_social_dribbble_url);?>" target="_blank"><i class="fa fa-dribbble"></i></a></li>
          <?php endif; ?>

          <?php if (!empty($mt_social_skype_url) ): ?>
            <li><a class="social-skype" href="<?php echo esc_url($mt_social_skype_url);?>" target="_blank"><i class="fa fa-skype"></i></a></li>
          <?php endif; ?>

        </ul>

      </div><!--end col-md-12 -->

    </div><!--end row -->

    <div class="row">

      <?php $footer_text = ot_get_option('footer_text');

      if(!empty($footer_text)){
        ?>
        <div class="col-md-8 col-md-offset-2 wow fadeInUp">
          <p class="alignc"><?php echo $footer_text;?></p>
        </div><!--end col-md-8 -->
      <?php }?>

    </div><!--end row -->

  </div><!--end container-->

</footer>

<?php wp_footer(); ?>

</body>
</html>