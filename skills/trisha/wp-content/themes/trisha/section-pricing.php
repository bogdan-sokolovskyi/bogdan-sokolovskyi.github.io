<div class="row main-table">

	<?php $price_table = ot_get_option( 'price_table');

	if(!empty($price_table)) {

		foreach($price_table as $price_column){
			?>

			<div class="col-sm-6 col-md-3">
				<div class="table-column wow fadeInUp">
					<header>
						<h3 class="column-title"><?php echo $price_column['title'];?></h3>
						<h4 class="column-price"><?php echo $price_column['price_price'];?></h4>
					</header>
					<?php echo $price_column['price_features'];?>
					<div class="price-btn">
						<a class="btn-style-1" href="<?php echo esc_url($price_column['price_button_url']);?>"><?php echo $price_column['price_button'];?></a>
					</div>
				</div><!--end table-col -->
			</div><!--col-md-3-->

		<?php }//end foreach

	}//endif		
	?>

</div><!--end main-table -->


