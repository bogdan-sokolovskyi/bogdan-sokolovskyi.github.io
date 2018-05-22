<?php
/**
 * Template name: Home Page
 */

get_header(); ?>


<?php
$home_slider =  get_post_meta($post->ID, "home_slider", true);

if(!empty($home_slider)):

	?>
	<!-- FlexSlider Carousel -->
	<section class="flex-sidebar">

		<?php $radio_home =  get_post_meta($post->ID, "radio_home", true);

		switch ($radio_home) {
			case 'slider_home': ?>
				<div class="flex-sidebar-block">
					<h6 class="hidden">FlexSlider</h6>

					<div class="current-number">
						<div class="custom-navigation">
							<a href="#" class="flex-prev"></a>
							<span class="slider-item-current"></span> of <span class="slider-item-total"></span>
							<!--<div class="custom-controls-container"></div>-->
							<a href="#" class="flex-next">></a>
						</div>
					</div>

					<ul class="flex-slider">

						<?php foreach( $home_slider as $home_slider_item ) { ?>

							<li>
								<div class="item-description">
									<p>
										<span class="span-title"><?php echo $home_slider_item['slider_name']?></span>
										<?php echo $home_slider_item['slider_desc']?>
									</p>
								</div>
								<div class="slider-bg" style="background-image: url(<?php echo $home_slider_item['slider_image'];?>);"></div>
							</li>

						<?php  }//end foreach

						?>

					</ul>
				</div>
				<?php
				break;
			case 'img_home': ?>
				<div class="flex-image-block">
					<h6 class="hidden">FlexSlider</h6>

					<div class="current-number hidden">
						<div class="custom-navigation">
							<a href="#" class="flex-prev"></a>
							<span class="slider-item-current"></span> of <span class="slider-item-total"></span>
							<!--<div class="custom-controls-container"></div>-->
							<a href="#" class="flex-next">></a>
						</div>
					</div>

					<ul class="flex-slider">

						<li>
							<?php $image_name =  get_post_meta($post->ID, "image_name", true);
							$image_desc =  get_post_meta($post->ID, "image_desc", true);
							$img_image =  get_post_meta($post->ID, "img_image", true);
							?>

							<div class="item-description">
								<p>
									<span class="span-title"><?php echo $image_name; ?></span>
									<?php echo $image_desc;?>
								</p>
							</div>
							<div class="slider-bg" style="background-image: url(<?php echo esc_url($img_image); ?>);"></div>

						</li>
					</ul>
				</div>

				<?php
				break;
		}
		?>

	</section>

<?php endif;?>
	<!-- End FlexSlider Carousel -->

	<!-- Scrolling Content -->
	<section class="main-content">
		<div class="row equal-block">

				<?php  $home_1colum_block = get_post_meta($post->ID, "home_1colum_block", true);

				foreach( $home_1colum_block as $home_1colum_bl ) {
				?>

				<?php
				switch ($home_1colum_bl['radio_columns_two']) {
				case 'one_column_sm': ?>
				<div class="col-sm-12 col-xs-12 wide-hover-bg">
					<?php
					break;
					case 'two_column_sm': ?>
					<div class="col-sm-6 col-xs-6 eq-block">
						<?php
						break;
						}
						?>

						<div class="content-frame">

							<h4><?php echo $home_1colum_bl['home_header']; ?></h4>
							<hr class="hr-custom">
							<?php echo $home_1colum_bl['home_header_tagline']; ?>

						</div>

						<?php if (!empty($home_1colum_bl['home_1colum_upload'])) { ?>
						<div class="imageBox">
							<a href="<?php echo esc_url($home_1colum_bl['home_1colum_link']); ?>">
								<img src="<?php echo esc_url($home_1colum_bl['home_1colum_upload']); ?>" alt="Smaland">
								<div class="imageBox-inner">
									<div class="imageBox-inner-wrap">
										<h5><?php echo $home_1colum_bl['home_1colum_title']?></h5>
									</div>
								</div>
							</a>
							<div class="descr-col6"><?php echo $home_1colum_bl['home_1colum_desc']?></div>
						</div>
							<?php
						} //end if
						?>
					</div>

					<?php
					} //end foreach
					?>

				</div>
	</section>
	<!-- End Scrolling Content -->


<?php
get_footer();
