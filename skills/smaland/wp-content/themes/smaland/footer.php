<!-- Footer Sidebar -->
<div class="mainNav-sidebar sidebar-footer">
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

	if(!empty($footer_text)){ ?>
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

</div>

<div class="hidden">

	<form class="callback popup-form zoom-anim-dialog" id="callback">
		<div class="gradient-box"></div>

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

		<div class="col-md-7">
			<div class="popup-contact-descr text-left">

				<?php $address_title_form = ot_get_option( 'address_title_form'); ?>
				<?php $popup_switch_content = ot_get_option( 'popup_switch_content'); ?>
				<h4 class="page-title"><?php echo $address_title_form; ?></h4>

				<?php echo $popup_switch_content; ?>
			</div>
		</div>

		<div class="col-md-5">
			<div class="pop-form-img-block">
				<?php $popup_switch_mini_img = ot_get_option( 'popup_switch_mini_img'); ?>
				<div class="pop-form-bg" style="background-image: url(<?php echo esc_url($popup_switch_mini_img); ?>);"></div>
			</div>
		</div>

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
			<div class="popup-area-block">
				<span><?php echo $textarea_info; ?></span>
				<textarea name="<?php echo $settings_textarea_info; ?>"></textarea>
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

<?php wp_footer(); ?>
</body>
</html>