<?php
$testimonials = ot_get_option( 'testimonials', array() );

if(!empty($testimonials)):

	?>

	<div class="row">
		<div class="col-md-8 col-md-offset-2 wow fadeInUp">
			<div class="flexslider flexslider-testimonials">

				<ul class="slides">

					<?php foreach( $testimonials as $testimonials_item ) { ?>

						<li><h4><?php echo $testimonials_item['testimonials_text']?><span> - <?php echo $testimonials_item['testimonials_client']?></span></h4></li>

					<?php  }//end foreach

					?>

				</ul>

			</div><!--end flexslider-testimonials-->
		</div><!--end col-md-8-->
	</div><!--end row-->

<?php endif;?>
