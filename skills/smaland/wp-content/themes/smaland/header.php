<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta name="description" content="">

	<?php $favicon = ot_get_option('favicon'); ?>
	<link rel="shortcut icon" href="<?php echo esc_url($favicon);?>" type="image/x-icon">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<!-- Main SideBar Area -->
<div class="mainNav">
	<div class="mainNav-inner">
		<!-- SideBar Menu Area -->
		<nav>

			<?php $logo_main = ot_get_option( 'logo_main'); ?>

			<a class="mainNav-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
				<img src="<?php echo esc_url($logo_main);?>" alt="Smaland">
			</a>

			<hr class="hr-custom">

			<?php wp_nav_menu( array('theme_location' => 'main_menu' )); ?>

			<hr class="hr-custom">
		</nav>
		<!-- End SideBar Menu Area -->

		<!-- SideBar Description Menu Area -->
		<div class="mainNav-sidebar">
			<hr class="hr-custom">

			<?php $footer_text_left = ot_get_option('footer_text_left'); ?>

			<div class="contactInfo text-left pd-left">
				<p class="info-font"><?php echo $footer_text_left;?></p>
			</div>

			<?php $footer_text_right = ot_get_option('footer_text_right'); ?>

			<div class="contactInfo text-right pd-right">
				<p class="info-font"><?php echo $footer_text_right;?></p>
			</div>

			<hr class="hr-custom">

			<?php $footer_text = ot_get_option('footer_text');

			if(!empty($footer_text)){
				?>
				<div class="contactInfo text-left pd-left">
					<p class="info-font">&copy; <?php echo date('Y'); ?><br><span><?php echo $footer_text;?></span></p>
				</div>
			<?php }?>

			<?php
			$mt_social_facebook_url = ot_get_option( 'mt_social_facebook_url');
			$mt_social_twitter_url = ot_get_option( 'mt_social_twitter_url');
			$mt_social_pinterest_url = ot_get_option( 'mt_social_pinterest_url');
			$mt_social_instagram_url = ot_get_option( 'mt_social_instagram_url');
			?>

			<div class="contactInfo text-right pd-right">
				<ul class="list-unstyled">

					<?php if (!empty($mt_social_facebook_url) ): ?>
						<li><a href="<?php echo esc_url($mt_social_facebook_url);?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
					<?php endif; ?>

					<?php if (!empty($mt_social_twitter_url) ): ?>
						<li><a href="<?php echo esc_url($mt_social_twitter_url);?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
					<?php endif; ?>

					<?php if (!empty($mt_social_instagram_url) ): ?>
						<li><a href="<?php echo esc_url($mt_social_instagram_url);?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
					<?php endif; ?>

					<?php if (!empty($mt_social_pinterest_url) ): ?>
						<li><a href="<?php echo esc_url($mt_social_pinterest_url);?>" target="_blank"><i class="fa fa-pinterest-p"></i></a></li>
					<?php endif; ?>

				</ul>
			</div>
		</div>
		<!-- End SideBar Description Menu Area -->
	</div>
</div>
<!-- End Main SideBar Area -->

<div class="pageWrapper marg-content" >
	<!-- Mobile Menu Area -->
	<nav class="navbar navbar-default navbar-alt">
		<div class="bg-navbar-menu"></div>
		<div class="container">
			<div class="navbar-header">

				<?php $mobile_button_text = ot_get_option( 'mobile_button_text'); ?>

				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
					<span><?php echo $mobile_button_text;?></span>
				</button>

				<?php $logo_mobile = ot_get_option( 'logo_mobile'); ?>

				<a class="navbar-brand to-top" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<img src="<?php echo esc_url($logo_mobile);?>" alt="Smaland" class="logo-small">
				</a>

			</div>
			<div class="collapse navbar-collapse" id="main-nav">
				<div class="open-mainNav">

					<a class="mainNav-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_url($logo_main);?>" alt="Smaland">
					</a>

					<hr class="hr-custom">

					<?php wp_nav_menu( array('theme_location' => 'main_menu' )); ?>

					<hr class="hr-custom">
				</div>
			</div>
		</div>
	</nav>
	<!-- Mobile Menu Area End -->