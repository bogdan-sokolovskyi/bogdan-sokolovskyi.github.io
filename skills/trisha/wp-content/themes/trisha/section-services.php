<?php
$count = 0;
$service_items = ot_get_option( 'service_items', array() );

foreach( $service_items as $service_item ) {

	if ($count % 2 == 0){

		?>

		<div class="row service-items">
		<div class="col-md-5 service wow fadeInUp">
			<span><img src="<?php echo $service_item['service_image'];?>" alt=""></span>
			<h5><?php echo $service_item['title'];?></h5>
			<p><?php echo $service_item['service_desc'];?></p>
		</div><!--end service-->

	<?php } else{ ?>

		<div class="col-md-5 col-md-offset-2 service wow fadeInUp">
			<span><img src="<?php echo $service_item['service_image'];?>" alt=""></span>
			<h5><?php echo $service_item['title'];?></h5>
			<p><?php echo $service_item['service_desc'];?></p>
		</div><!--end service-->

	<?php } $count++; if(($count % 2) == 0) {?> </div><!--end row--> <?php }?>

<?php }//end for each

if(($count % 2) == 1) {?> </div><!--end row--> <?php } ?>