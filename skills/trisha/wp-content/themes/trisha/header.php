<?php
/**
 * @package WordPress
 * @subpackage Trisha
 */
?>

  <!DOCTYPE html>
  <!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
  <!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
  <!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
  <!--[if (gte IE 9)|!(IE)]><!--><html <?php language_attributes(); ?>> <!--<![endif]-->
  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <![endif]-->

    <!-- Favicons -->
    <?php $favicon = ot_get_option('favicon'); ?>
    <link rel="shortcut icon" href="<?php echo esc_url($favicon);?>">

    <?php wp_head(); ?>

    <?php $analytics = ot_get_option( 'analytics');

    echo $analytics;
    ?>

  </head>
<body <?php body_class(); ?> >

<?php if(!is_home()){ ?>

  <div class="nav-bar clearfix">

    <?php if(is_home()){ ?>
      <nav class="navbar navbar-default">
    <?php } else { ?>
      <nav class="navbar-default navbar-small">
    <?php }  ?>
      <div class="container">
        <div class="row">
          <div class="col-md-12">

            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapse-navigation">
                <span class="sr-only"><?php _e('Toggle navigation', 'match')?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>

              <?php $logo_small_dark = ot_get_option( 'logo_small_dark'); ?>
              <div class="logo l-dark"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php echo esc_url($logo_small_dark);?>" alt=""/></a></div>

              <?php $logo_small_white = ot_get_option( 'logo_small_white'); ?>
              <div class="logo l-white"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img class="img-responsive" src="<?php echo esc_url($logo_small_white);?>" alt=""/></a></div>

            </div>

            <div class="my-nav collapse navbar-collapse" id="collapse-navigation">

              <?php

              if (has_nav_menu('primary_menu')) {

                wp_nav_menu(array('theme_location' => 'primary_menu', 'menu_class' => 'menu', 'walker' => new mt_description_walker, 'container' => 'false'));

              }
              ?>
            </div><!-- .navbar-collapse -->

          </div><!-- col-md-12 -->
        </div><!-- row -->
      </div><!-- .container -->
    </nav>

  </div><!--.nav-bar-->

<?php } ?>