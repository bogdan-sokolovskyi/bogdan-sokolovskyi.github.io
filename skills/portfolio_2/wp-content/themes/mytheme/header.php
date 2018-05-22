<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="ru" class="no-js"> <!--<![endif]-->

<head>

	<meta charset="utf-8" />

	<link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo esc_url( get_template_directory_uri() ); ?>/img/favicon/apple-touch-icon-114x114.png" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<?php wp_head(); ?>

</head>

<body<?php if ( !is_front_page() && !is_home() ) : ?> class="inside"<?php endif ?>>

	<aside class="left_side">

		<div class="btn_mnu" title="Меню">
			<div class="btn_row"></div>
			<div class="btn_row"></div>
			<div class="btn_row"></div>
		</div>

		<div class="aside_content">
			
			<div class="user_info">
				
				<?php
				$idObj = get_category_by_slug( 'about' );
				echo get_the_post_thumbnail($idObj->term_id); ?>

				<h2><?php echo get_bloginfo('name'); ?></h2>
				<p><?php echo get_bloginfo('description'); ?></p>
			</div>

			<nav>

				<?php wp_nav_menu( 'manu=left_mnu' ); ?>

			</nav>

		</div>

	</aside>

	<div class="content<?php if ( is_front_page() && is_home() ) : ?> gallery<?php endif ?>">
