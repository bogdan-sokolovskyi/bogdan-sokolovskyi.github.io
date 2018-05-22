<div class="row">

 <?php
 		$about_items = ot_get_option( 'about_items', array() );
                                                
		foreach( $about_items as $about_item ) {
		?>
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 feature-column wow fadeInUp">
				<div class="feature-icon">
					<i class="fa <?php echo $about_item['about_icons']?> size-2x"></i>
					<i class="fa <?php echo $about_item['about_icons']?> back-icon"></i>
				</div>
				<div class="feature-info">
					<h4><?php echo $about_item['title']?></h4>
					<p class="feature-description"><?php echo $about_item['about_desc']?></p>
				</div>
			</div>

	<?php  }//end foreach  ?>	

</div><!--end row-->

