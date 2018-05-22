<?php $categories=get_categories('taxonomy=section&orderby=id'); ?>

<div class="portfolio-holder">
	<ul id="portfolio-filter" class="wow fadeInUp">
		<li><a href="#" data-filter="*"><?php _e('All', 'match')?></a></li>

		<?php foreach($categories as $category) { ?>

			<li><a href="#" data-filter=".<?php echo strtolower($category->slug); ?>"><?php echo $category->name; ?></a></li>

		<?php }//end foreach ?>

	</ul>

	<ul id="portfolio-items">

		<?php
		$defaults = array('post_type' => 'portfolio', 'showposts' => 40);
		$port_query = new WP_Query($defaults);
		?>

		<?php while ($port_query -> have_posts() ) : $port_query -> the_post();

			$terms = get_the_terms( get_the_ID(), 'section' );

			?>

			<li class="portfolio-item <?php foreach ($terms as $term) { echo strtolower($term->slug).' '; } ?>">
				<div class="shot-wrap">
					<?php if ( has_post_thumbnail($post->ID ) ){ ?>

						<?php the_post_thumbnail('small-img', array('class' => 'img-responsive', 'alt' => ''.get_the_title().'', 'title' => ''.get_the_title().''));

						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
						?>

					<?php } ?>

					<div class="shot-more">
						<h4 class="shot-title"><?php the_title(); ?></h4>
						<span><?php foreach ($terms as $term) { echo $term->name.' '; }?></span>

						<div class="view-larger">
							<a class="btn-style-1" href="<?php echo $image[0]; ?>" data-rel="prettyPhoto[gallery]" title=""><?php _e('View Larger', 'match')?></a>
						</div>
					</div><!--end .shot-more-->

				</div><!--end .shot-wrap-->

			</li>

		<?php endwhile;?>

	</ul><!--end .portfolio-items-->
</div><!--end portfolio-holder-->