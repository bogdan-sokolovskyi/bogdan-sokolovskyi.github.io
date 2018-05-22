<?php
/**
 * Template name: Contact
 */

get_header(); ?>

	<!-- Scrolling Content -->
	<div class="main-content">
		<div class="row">
			<div class="col-sm-12">
				<div class="content-frame">

					<?php $contact_meta_box_title =  get_post_meta($post->ID, "contact_meta_box_title", true); ?>
					<?php $contact_meta_box_tagline =  get_post_meta($post->ID, "contact_meta_box_tagline", true); ?>

					<h4><?php echo $contact_meta_box_title; ?></h4>
					<hr class="hr-custom">
					<?php echo $contact_meta_box_tagline; ?>

					<main class="content">
						<div class="contact-section clearfix">
							<address class="contact-info">

								<?php $address_upload = ot_get_option( 'address_upload'); ?>

								<img src="<?php echo esc_url($address_upload);?>" alt="Smaland" class="logo-small">


								<?php
								$add_category = ot_get_option( 'add_category', array() );

								foreach( $add_category as $add_cat ) {
									?>

									<div class="address-box"> <strong class="title"><?php echo $add_cat['name_name']?></strong>
										<ul>
											<li><?php echo $add_cat['info_info']?></li>
										</ul>
									</div>

								<?php  }//end foreach  ?>

							</address>

							<form class="callback">

								<!-- Hidden Required Fields -->
								<?php $site_name_form = ot_get_option( 'site_name_form'); ?>
								<?php $value_admin_email = ot_get_option( 'value_admin_email'); ?>
								<?php $value_form_subject = ot_get_option( 'value_form_subject'); ?>

								<input type="hidden" name="project_name" value="<?php echo $site_name_form; ?>">
								<input type="hidden" name="admin_email" value="<?php echo $value_admin_email; ?>">
								<input type="hidden" name="form_subject" value="<?php echo $value_form_subject; ?>">
								<!-- END Hidden Required Fields -->

								<div class="success">
									<div class="success-text">

										<?php $set_form_title = ot_get_option( 'set_form_title'); ?>
										<?php $set_form_desc = ot_get_option( 'set_form_desc'); ?>

										<h2><?php echo $set_form_title; ?></h2>

										<?php echo $set_form_desc; ?>

									</div>
								</div>

								<?php $address_title_form = ot_get_option( 'address_title_form'); ?>

								<h4 class="page-title text-center"><?php echo $address_title_form; ?></h4>

								<?php $name_form = ot_get_option( 'name_form'); ?>
								<?php $telephone = ot_get_option( 'telephone'); ?>
								<?php $e_mail = ot_get_option( 'e_mail'); ?>
								<?php $branch_office = ot_get_option( 'branch_office'); ?>
								<?php $textarea_info = ot_get_option( 'textarea_info'); ?>

								<!-- Field Form InBox E-Mail -->
								<?php $settings_name_form = ot_get_option( 'settings_name_form'); ?>
								<?php $settings_telephone = ot_get_option( 'settings_telephone'); ?>
								<?php $settings_e_mail = ot_get_option( 'settings_e_mail'); ?>
								<?php $settings_branch_office = ot_get_option( 'settings_branch_office'); ?>
								<?php $settings_textarea_info = ot_get_option( 'settings_textarea_info'); ?>

								<div class="col-md-6">
									<span><?php echo $name_form; ?></span>
									<div class="input-wrap">
										<input name="<?php echo $settings_name_form; ?>" type="text" required>
									</div>
								</div>
								<div class="col-md-6">
									<span><?php echo $telephone; ?></span>
									<div class="input-wrap">
										<input name="<?php echo $settings_telephone; ?>" type="text" required>
									</div>
								</div>
								<div class="col-md-6">
									<span><?php echo $e_mail; ?></span>
									<div class="input-wrap">
										<input name="<?php echo $settings_e_mail; ?>" type="text" required>
									</div>
								</div>
								<div class="col-md-6">
									<span><?php echo $branch_office; ?></span>
									<div class="input-wrap">
										<input name="<?php echo $settings_branch_office; ?>" type="text" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="area-block">
										<span><?php echo $textarea_info; ?></span>
										<textarea name="<?php echo $settings_textarea_info; ?>"></textarea>

										<div class="form-img-block">
											<?php $img_form = ot_get_option( 'img_form'); ?>
											<div class="form-bg" style="background-image: url(<?php echo esc_url($img_form); ?>);"></div>
										</div>
									</div>
								</div>
								<div class="col-md-12">
									<div class="button-form">
										<?php $btn_text = ot_get_option( 'btn_text'); ?>
										<button class="btn-action"><?php echo $btn_text; ?></button>
									</div>
								</div>
							</form>
						</div>
					</main>

				</div>
			</div>
		</div>
	</div>
		<!-- End Scrolling Content -->

<?php get_footer(); ?>