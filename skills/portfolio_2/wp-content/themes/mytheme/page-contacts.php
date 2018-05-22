<?php get_header(); ?>

<?php
	// Start the loop.
	while ( have_posts() ) : the_post(); ?>

		<div class="content_header">
			<h1><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</div>

		<div class="content_body">
			<div class="row form_contacts">
				<div class="col-sm-6">
					<ul class="ul_contacts">
						<li>
							<h3><i class="icon icon-basic-webpage-img-txt"></i> Мой сайт:</h3>
							<p><a href="http://<?php echo get_post_meta($post->ID, 'website', true); ?>" target="_blank"><?php echo get_post_meta($post->ID, 'website', true); ?></a></p>
						</li>
						<li>
							<h3><i class="icon icon-basic-geolocalize-05"></i> Адрес:</h3>
							<p><?php echo get_post_meta($post->ID, 'address', true); ?></p>
						</li>
						<li>
							<h3><i class="icon icon-basic-smartphone"></i> Телефон:</h3>
							<p><?php echo get_post_meta($post->ID, 'phone', true); ?></p>
						</li>
					</ul>
				</div>
				<div class="col-sm-6">
					<form id="callback" class="callback">
						
						<h3>Оставить заявку</h3>

						<label>
							Ваше имя
							<input type="text" name="name" required>
						</label>

						<label>
							Ваше E-mail
							<input type="text" name="email" required>
						</label>

						<label>
							Комментарий к заказу
							<textarea name="message"></textarea>
						</label>
						
						<button class="button" type="submit">Отправить заявку</button>

					</form>
				</div>
			</div>

		</div>

	<?php endwhile; ?>

<?php get_footer(); ?>