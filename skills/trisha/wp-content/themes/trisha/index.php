<?php
/**
 * @package WordPress
 * @subpackage Trisha
 */


get_header(); ?>

	<div class="nav-bar clearfix">

		<nav class="navbar navbar-default">
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

	<header id="intro" class="parallax">
		<div class="bkg-cover">
			<div class="container">
				<div class="row intro-elem">
					<div class="col-md-10 col-md-offset-1">

						<?php $intro_text_main_header = ot_get_option('intro_text_main_header'); ?>
						<h1 class="intro-text-h1"><?php echo $intro_text_main_header;?></h1>

						<?php $intro_text_header = ot_get_option('intro_text_header'); ?>
						<h4 class="intro-text"><?php echo $intro_text_header;?></h4>

						<?php $intro_button_text = ot_get_option('intro_button_text'); ?>
						<?php $intro_button_url = ot_get_option('intro_button_url'); ?>
						<p><a class="btn-style-1 goto" href="<?php echo esc_url($intro_button_url);?>"><?php echo $intro_button_text;?></a></p>

					</div><!--.col-md-8-->
				</div><!--.row-->

			</div> <!--.container-->

		</div><!--.bkg-cover-->
		<div class="home-bottom">
			<div class="container">
				<?php $scroll_down = ot_get_option('scroll_down'); ?>
				<?php $scroll_down_url = ot_get_option('scroll_down_url'); ?>
				<div id="section01" class="demo-btn">
					<a class="scroll-down goto" href="<?php echo esc_url($scroll_down_url);?>"><img src="<?php echo esc_url($scroll_down);?>" alt="Scroll Down"/><span></span></a>
				</div>
			</div>
		</div>

	</header> <!--#intro-->

<?php

if (($locations = get_nav_menu_locations()) && $locations['primary_menu'] ) {
	$menu = wp_get_nav_menu_object( $locations['primary_menu'] );
	$menu_items = wp_get_nav_menu_items($menu->term_id);
	$pageID = array();
	foreach($menu_items as $item) {
		if($item->object == 'page')
			$pageID[] = $item->object_id;
	}

	global $wp_query;
	wp_reset_query();

	$defaults = array( 'post_type' => 'page','post__in' => $pageID, 'posts_per_page' => count($pageID), 'orderby' => 'post__in' );
	$wp_query = new WP_Query($defaults);
}
while(have_posts() ) : the_post();

	?>
	<?php  $template_section_bkg_img =  get_post_meta($post->ID, "template_section_bkg_img", true);
	$template_section_bkg_cover_color =  get_post_meta($post->ID, "template_section_bkg_cover_color", true);
	$template_section_bkg_cover_alpha =  get_post_meta($post->ID, "template_section_bkg_cover_alpha", true);
	$template_section_parallax =  get_post_meta($post->ID, "template_section_parallax", true);
	$template_section_title_color =  get_post_meta($post->ID, "template_section_title_color", true);
	$template_section_text_color =  get_post_meta($post->ID, "template_section_text_color", true);

	if($template_section_parallax == 'true'){
		$sect_parallax = 'parallax';
	}
	else {$sect_parallax = 'no-parallax';}

	$template_cover_color = mt_hex2rgb($template_section_bkg_cover_color);

	?>

	<section id="<?php echo $post->post_name;?>" class=" <?php echo $sect_parallax;?>" style=" <?php if(!empty($template_section_bkg_img)){ ?>background-image:url(<?php echo esc_url($template_section_bkg_img) ?>); <?php } ?> color:<?php echo $template_section_text_color ?>;">

		<?php  $mt_template_section =  get_post_meta($post->ID, "template_section", true);

		switch($mt_template_section){
			case "about":{?>

				<div class="about-bkg mutualWrap" style=" <?php if($template_section_bkg_cover_alpha != 0){ ?> background-color:rgba(<?php echo $template_cover_color['red'];?>, <?php echo $template_cover_color['green'];?>, <?php echo $template_cover_color['blue'];?>, <?php echo $template_section_bkg_cover_alpha;?>); <?php }?>">
					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<div class="alignc wow fadeInUp">
									<?php $template_section_title = get_post_meta($post->ID, "template_section_title", true); ?>
									<h2 class="section-title" style="color:<?php echo $template_section_title_color;?>;"><?php echo $template_section_title;?></h2>
								</div>

								<?php $template_section_tagline = get_post_meta($post->ID, "template_section_tagline", true);

								if(!empty($template_section_tagline)){
									?>
									<div class="col-md-8 col-md-offset-2 wow fadeInUp">
										<h5 class="section-text alignc"><?php echo $template_section_tagline;?></h5>
										<hr class="line-hr" style="background:<?php echo $template_section_title_color;?>;">
									</div><!--end col-md-8 -->
								<?php }?>

							</div><!--end col-md-12 -->
						</div><!--end row -->

						<?php
						get_template_part('section', 'about');
						?>

					</div><!--end container -->
				</div><!--end about-bkg-->

				<?php break;}

			case "team_members":{ ?>

				<div class="team-bkg mutualWrap" style=" <?php if($template_section_bkg_cover_alpha != 0){ ?> background-color:rgba(<?php echo $template_cover_color['red'];?>, <?php echo $template_cover_color['green'];?>, <?php echo $template_cover_color['blue'];?>, <?php echo $template_section_bkg_cover_alpha;?>); <?php }?>">
					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<div class="alignc wow fadeInUp">
									<?php $template_section_title = get_post_meta($post->ID, "template_section_title", true); ?>
									<h2 class="section-sub-title" style="color:<?php echo $template_section_title_color;?>;"><?php echo $template_section_title;?></h2>
								</div>

								<?php $template_section_tagline = get_post_meta($post->ID, "template_section_tagline", true);

								if(!empty($template_section_tagline)){
									?>
									<div class="col-md-8 col-md-offset-2 wow fadeInUp">
										<h5 class="section-text alignc"><?php echo $template_section_tagline;?></h5>
										<hr class="line-hr" style="background:<?php echo $template_section_title_color;?>;">
									</div><!--end col-md-8 -->
								<?php }?>

							</div><!--end col-md-12 -->
						</div><!--end row -->

						<?php get_template_part('section', 'team'); ?>

					</div><!--end container -->
				</div><!--end team-bkg-->

				<?php break;}

			case "portfolio_ajax":{?>

				<div class="portfolio-bkg-ajax mutualWrap-port" style=" <?php if($template_section_bkg_cover_alpha != 0){ ?> background-color:rgba(<?php echo $template_cover_color['red'];?>, <?php echo $template_cover_color['green'];?>, <?php echo $template_cover_color['blue'];?>, <?php echo $template_section_bkg_cover_alpha;?>); <?php }?>">
					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<div class="alignc wow fadeInUp">
									<?php $template_section_title = get_post_meta($post->ID, "template_section_title", true); ?>
									<h2 class="section-title" style="color:<?php echo $template_section_title_color;?>;"><?php echo $template_section_title;?></h2>
								</div>

								<?php $template_section_tagline = get_post_meta($post->ID, "template_section_tagline", true);

								if(!empty($template_section_tagline)){
									?>
									<div class="col-md-8 col-md-offset-2 wow fadeInUp">
										<h5 class="section-text alignc"><?php echo $template_section_tagline;?></h5>
										<hr class="line-hr" style="background:<?php echo $template_section_title_color;?>;">
									</div><!--end col-md-8 -->
								<?php }?>

							</div><!--end col-md-12 -->
						</div><!--end row -->
					</div><!--end container -->

					<?php
					get_template_part('section', 'portfolio_ajax');
					?>

				</div><!--end portfolio-bkg-ajax-->

				<?php break;}

			case "portfolio":{?>

				<div class="portfolio-simple mutualWrap-port" style=" <?php if($template_section_bkg_cover_alpha != 0){ ?> background-color:rgba(<?php echo $template_cover_color['red'];?>, <?php echo $template_cover_color['green'];?>, <?php echo $template_cover_color['blue'];?>, <?php echo $template_section_bkg_cover_alpha;?>); <?php }?>">
					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<div class="alignc wow fadeInUp">
									<?php $template_section_title = get_post_meta($post->ID, "template_section_title", true); ?>
									<h2 class="section-title" style="color:<?php echo $template_section_title_color;?>;"><?php echo $template_section_title;?></h2>
								</div>

								<?php $template_section_tagline = get_post_meta($post->ID, "template_section_tagline", true);

								if(!empty($template_section_tagline)){
									?>
									<div class="col-md-8 col-md-offset-2 wow fadeInUp">
										<h5 class="section-text alignc"><?php echo $template_section_tagline;?></h5>
										<hr class="line-hr" style="background:<?php echo $template_section_title_color;?>;">
									</div><!--end col-md-8 -->
								<?php }?>

							</div><!--end col-md-12 -->
						</div><!--end row -->
					</div><!--end container -->

					<?php
					get_template_part('section', 'portfolio');
					?>

				</div><!--end portfolio-->

				<?php break;}

			case "testimonials":{ ?>

				<div class="testimonials-bkg mutualWrap" style=" <?php if($template_section_bkg_cover_alpha != 0){ ?> background-color:rgba(<?php echo $template_cover_color['red'];?>, <?php echo $template_cover_color['green'];?>, <?php echo $template_cover_color['blue'];?>, <?php echo $template_section_bkg_cover_alpha;?>); <?php }?>">
					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<div class="alignc wow fadeInUp">
									<?php $template_section_title = get_post_meta($post->ID, "template_section_title", true); ?>
									<h2 class="section-sub-title" style="color:<?php echo $template_section_title_color;?>;"><?php echo $template_section_title;?></h2>
								</div>

								<?php $template_section_tagline = get_post_meta($post->ID, "template_section_tagline", true);

								if(!empty($template_section_tagline)){
									?>
									<div class="col-md-8 col-md-offset-2 wow fadeInUp">
										<h5 class="section-text alignc"><?php echo $template_section_tagline;?></h5>
										<hr class="line-hr" style="background:<?php echo $template_section_title_color;?>;">
									</div><!--end col-md-8 -->
								<?php }?>

							</div><!--end col-md-12 -->
						</div><!--end row -->

						<?php get_template_part('section', 'testimonials'); ?>

					</div><!--end container -->
				</div><!--end testimonials-->

				<?php break;}

			case "services":{?>

				<div class="services-bkg mutualWrap" style=" <?php if($template_section_bkg_cover_alpha != 0){ ?> background-color:rgba(<?php echo $template_cover_color['red'];?>, <?php echo $template_cover_color['green'];?>, <?php echo $template_cover_color['blue'];?>, <?php echo $template_section_bkg_cover_alpha;?>); <?php }?>">
					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<div class="alignc wow fadeInUp">
									<?php $template_section_title = get_post_meta($post->ID, "template_section_title", true); ?>
									<h2 class="section-title" style="color:<?php echo $template_section_title_color;?>;"><?php echo $template_section_title;?></h2>
								</div>

								<?php $template_section_tagline = get_post_meta($post->ID, "template_section_tagline", true);

								if(!empty($template_section_tagline)){
									?>
									<div class="col-md-8 col-md-offset-2 wow fadeInUp">
										<h5 class="section-text alignc"><?php echo $template_section_tagline;?></h5>
										<hr class="line-hr" style="background:<?php echo $template_section_title_color;?>;">
									</div><!--end col-md-8 -->
								<?php }?>

							</div><!--end col-md-12 -->
						</div><!--end row -->

						<?php
						get_template_part('section', 'services');
						?>

					</div><!--end container -->
				</div><!--end services-bkg-->

				<?php break;}

			case "pricing_table":{ ?>

				<div class="pricing-table-bkg mutualWrap" style=" <?php if($template_section_bkg_cover_alpha != 0){ ?> background-color:rgba(<?php echo $template_cover_color['red'];?>, <?php echo $template_cover_color['green'];?>, <?php echo $template_cover_color['blue'];?>, <?php echo $template_section_bkg_cover_alpha;?>); <?php }?>">
					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<div class="alignc wow fadeInUp">
									<?php $template_section_title = get_post_meta($post->ID, "template_section_title", true); ?>
									<h2 class="section-sub-title" style="color:<?php echo $template_section_title_color;?>;"><?php echo $template_section_title;?></h2>
								</div>

								<?php $template_section_tagline = get_post_meta($post->ID, "template_section_tagline", true);

								if(!empty($template_section_tagline)){
									?>
									<div class="col-md-8 col-md-offset-2 wow fadeInUp">
										<h5 class="section-text alignc"><?php echo $template_section_tagline;?></h5>
										<hr class="line-hr" style="background:<?php echo $template_section_title_color;?>;">
									</div><!--end col-md-8 -->
								<?php }?>

							</div><!--end col-md-12 -->
						</div><!--end row -->

						<?php get_template_part('section', 'pricing'); ?>

					</div><!--end container -->
				</div><!--end pricing-table-bkg-->

				<?php break;}

			case "blog":{?>

				<div class="blog-bkg mutualWrap" style=" <?php if($template_section_bkg_cover_alpha != 0){ ?> background-color:rgba(<?php echo $template_cover_color['red'];?>, <?php echo $template_cover_color['green'];?>, <?php echo $template_cover_color['blue'];?>, <?php echo $template_section_bkg_cover_alpha;?>); <?php }?>">
					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<div class="alignc wow fadeInUp">
									<?php $template_section_title = get_post_meta($post->ID, "template_section_title", true); ?>
									<h2 class="section-title" style="color:<?php echo $template_section_title_color;?>;"><?php echo $template_section_title;?></h2>
								</div>

								<?php $template_section_tagline = get_post_meta($post->ID, "template_section_tagline", true);

								if(!empty($template_section_tagline)){
									?>
									<div class="col-md-8 col-md-offset-2 wow fadeInUp">
										<h5 class="section-text alignc"><?php echo $template_section_tagline;?></h5>
										<hr class="line-hr" style="background:<?php echo $template_section_title_color;?>;">
									</div><!--end col-md-8 -->
								<?php }?>

							</div><!--end col-md-12 -->
						</div><!--end row -->

						<?php
						get_template_part('section', 'blog');
						?>

					</div><!--end container -->
				</div><!--end blog-bkg-->

				<?php break;}

			case "contact":{?>

				<div class="contact-bkg mutualWrap" style=" <?php if($template_section_bkg_cover_alpha != 0){ ?> background-color:rgba(<?php echo $template_cover_color['red'];?>, <?php echo $template_cover_color['green'];?>, <?php echo $template_cover_color['blue'];?>, <?php echo $template_section_bkg_cover_alpha;?>); <?php }?>">
					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<div class="alignc wow fadeInUp">
									<?php $template_section_title = get_post_meta($post->ID, "template_section_title", true); ?>
									<h2 class="section-title section-color-c" style="color:<?php echo $template_section_title_color;?>;"><?php echo $template_section_title;?></h2>
								</div>

								<?php $template_section_tagline = get_post_meta($post->ID, "template_section_tagline", true);

								if(!empty($template_section_tagline)){
									?>
									<div class="col-md-8 col-md-offset-2 wow fadeInUp">
										<h5 class="section-text alignc"><?php echo $template_section_tagline;?></h5>
										<hr class="line-hr" style="background:<?php echo $template_section_title_color;?>;">
									</div><!--end col-md-8 -->
								<?php }?>

							</div><!--end col-md-12 -->
						</div><!--end row -->

						<?php
						get_template_part('section', 'contact');
						?>

					</div><!--end container -->
				</div><!--end contact-bkg-->

				<?php break;}

			case "custom":{?>

				<div class="custom-page-bkg mutualWrap" style=" <?php if($template_section_bkg_cover_alpha != 0){ ?> background-color:rgba(<?php echo $template_cover_color['red'];?>, <?php echo $template_cover_color['green'];?>, <?php echo $template_cover_color['blue'];?>, <?php echo $template_section_bkg_cover_alpha;?>); <?php }?>">
					<div class="container">
						<div class="row">
							<div class="col-md-12">

								<div class="alignc wow fadeInUp">
									<?php $template_section_title = get_post_meta($post->ID, "template_section_title", true); ?>
									<h2 class="section-title" style="color:<?php echo $template_section_title_color;?>;"><?php echo $template_section_title;?></h2>
								</div>

								<?php $template_section_tagline = get_post_meta($post->ID, "template_section_tagline", true);

								if(!empty($template_section_tagline)){
									?>
									<div class="col-md-8 col-md-offset-2 wow fadeInUp">
										<h5 class="section-text alignc"><?php echo $template_section_tagline;?></h5>
										<hr class="line-hr" style="background:<?php echo $template_section_title_color;?>;">
									</div><!--end col-md-8 -->
								<?php }?>

							</div><!--end col-md-12 -->
						</div><!--end row -->

						<div class="row">
							<div class="span12">

								<?php the_content();?>

							</div><!--end col-md-12 -->
						</div><!--end row -->

					</div><!--end container -->
				</div><!--end contact-bkg-->

				<?php break;}

		}//end switch
		?>

	</section>


<?php endwhile;?>

<?php get_footer(); ?>