<?php
/**
 * Template name: Project Page
 */

get_header(); ?>

	<!-- Scrolling Content -->
	<section class="main-content">
		<div class="row equal-block">

			<?php  $project_post_blocks = get_post_meta($post->ID, "project_post_blocks", true);

			if(!empty($project_post_blocks) ) {

			foreach ($project_post_blocks as $project_post_block) { ?>

			<?php
			switch ($project_post_block['radio_columns']) {
			case 'one_col': ?>
			<div class="col-sm-12 col-xs-12">
				<?php
				break;
				case 'two_col': ?>

				<div class="col-sm-6 col-xs-6 eq-block">
					<?php
					break;
					}
					?>

					<div class="content-frame">
						<?php if (!empty($project_post_block['project_header'])) { ?>
							<h4><?php echo $project_post_block['project_header']; ?></h4>
							<hr class="hr-custom">
						<?php } ?>
						<?php echo $project_post_block['project_header_tagline']; ?>
					</div>

					<?php if (!empty($project_post_block['project_gallery_slides']) || !empty($project_post_block['img_project_gallery_upload']) || !empty($project_post_block['project_gallery_mini']) ) { ?>
					<div class="flex-gallery">

						<?php
						switch ($project_post_block['radio_columns_img']) {
							case 'slider_col': ?>

								<ul class="gallery-slides">

									<?php
									$images = explode(',', $project_post_block['project_gallery_slides']);
									if (!empty($images)) {
										foreach ($images as $id) {
											$img = wp_prepare_attachment_for_js($id);
											if (!empty($id)) {
												$full_img_src = wp_get_attachment_image_src($id, '');
												$alt = $img['alt'];
												$caption = $img['caption'];
												$title = $img['title'];
												if (!empty($full_img_src) && (!empty($caption) || !empty($title))) {
													echo '
														<li>
															<img src="' . $full_img_src[0] . '" alt="' . $alt . '" />
															
															<div class="block-descr">
																<span class="num-slide">' . $caption . '</span>
																<p class="text-slide">' . $title . '</p>
															</div>								

															</li>
														';
												} //end if
												elseif (!empty($full_img_src) && (empty($caption) || empty($title))) {
													echo '
														<li>
															<img src="' . $full_img_src[0] . '" alt="' . $alt . '" />																																
														</li>
														';
												} //end elseif
											}
										}
									}
									?>

								</ul>
								<div class="gallery-navigation">
									<a href="#" class="flex-prev"><span></span></a>
									<a href="#" class="flex-next"><span></span></a>
								</div>
								<?php
								break;
							case 'img_col': ?>
								<div class="gallery-img">

									<img src="<?php echo esc_url($project_post_block['img_project_gallery_upload']); ?>" alt="Smaland"/>

									<?php if (!empty($project_post_block['img_project_gallery_slides_span']) || !empty($project_post_block['img_project_gallery_slides_desc'])) { ?>
										<div class="block-descr">
											<span
												class="num-slide"><?php echo $project_post_block['img_project_gallery_slides_span']; ?></span>
											<p class="text-slide"><?php echo $project_post_block['img_project_gallery_slides_desc']; ?></p>
										</div>
									<?php } ?>

								</div>
								<div class="gallery-navigation hidden">
									<a href="#" class="flex-prev"><span></span></a>
									<a href="#" class="flex-next"><span></span></a>
								</div>

								<?php
								break;
						}
						?>
					</div>


					<div class="content-frame mgt-30 content-frame-col">
						<?php if (!empty($project_post_block['project_gallery_mini'])) { ?>
							<div class="mini-img">
								<img src="<?php echo esc_url($project_post_block['project_gallery_mini']); ?>" alt="Smaland">
							</div>
						<?php } ?>
						<?php echo $project_post_block['project_gallery_slide_content']; ?>
						<?php if (!empty($project_post_block['project_gallery_slide_button'])) {
							?>
							<div class="button-custom">
								<a href="#callback"
									 class="btn-grey popup-with-move-anim"><?php echo $project_post_block['project_gallery_slide_button']; ?></a>
							</div>
						<?php } ?>

					</div>
						<?php
					} //end if ?>

				</div>
			<?php
			} //end foreach
			} //end if
			?>


			</div>
	</section>
	<!-- End Scrolling Content -->

<?php get_footer(); ?>