<div class="row sect-contact">
	<div class="col-md-7">

		<div id="contact-container" class="clearfix wow fadeInUp">

			<form class="form">

				<input type="text" name="author" class="comm-field" placeholder="<?php _e('Name', 'match')?>"  value="" size="22" tabindex="1" required />
				<input type="text" name="email" class="comm-field" placeholder="<?php _e('Email', 'match')?>" value="" size="22" tabindex="2" required  />
				<input type="text" name="title" class="comm-field" placeholder="<?php _e('Subject', 'match')?>" value="" size="22" tabindex="3" required />

				<textarea name="message" id="message2" placeholder="<?php _e('Message', 'match')?>" rows="6" tabindex="4"></textarea>

				<?php $intro_button_form_text = ot_get_option('intro_button_form_text'); ?>
				<button class="btn-style-1 btn-form" type="submit" tabindex="5"><?php echo $intro_button_form_text;?></button>

			</form>
		</div>

		<div id="output" class="margin-t"></div>

	</div><!--end col-md-7-->

	<div class="col-md-4 col-md-offset-1 wow fadeInUp">

		<header class="tright-contact">
			<?php $tright_contact = ot_get_option( 'tright_contact'); ?>
			<h5><?php echo $tright_contact;?></h5>
		</header>

		<?php 	$text_contact = ot_get_option( 'text_contact');
		$address_contact = ot_get_option( 'address_contact');
		$phone_contact = ot_get_option( 'phone_contact');
		$email_contact = ot_get_option( 'email_contact');
		?>

		<div class="margin-t">
			<p><?php echo $text_contact;?></p>

			<div class="contact-address">
				<ul>
					<li><?php echo $address_contact;?></li>
					<li><?php echo $phone_contact;?></li>
					<li><?php echo $email_contact;?></li>
				</ul>
			</div>

		</div>

	</div><!--end col-md-4-->
</div><!--end row-->