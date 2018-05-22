<?php
$team = ot_get_option( 'team', array() );

if(!empty($team)):

	?>

	<div class="flexslider flexslider-team row">
	<ul class="slides col-md-12">

	<?php

	$count = 0;

	foreach( $team as $team_item ) {

		if ($count % 4 == 0){ ?>  <li> <div class="row">   <?php } ?>

		<div class="col-sm-6 col-md-3 team-member alignc wow fadeInUp">
			<div class="team-member-img">
				<img src="<?php echo $team_item['team_upload']?>" alt=""/>
			</div>
			<h4><?php echo $team_item['team_name']?></h4>
			<span><?php echo $team_item['team_job']?></span>

			<ul class="social">
				<?php if(!empty($team_item['team_fb'])): ?>
					<li><a class="facebook" href="<?php echo $team_item['team_fb']?>" target="_blank">Facebook</a></li>
				<?php endif;
				if(!empty($team_item['team_twitter'])):
					?>
					<li><a class="twitter" href="<?php echo $team_item['team_twitter']?>" target="_blank">Twitter</a></li>
				<?php endif;
				if(!empty($team_item['team_google'])):
					?>
					<li><a class="gplus" href="<?php echo $team_item['team_google']?>" target="_blank">Google+</a></li>
				<?php endif; ?>
			</ul>

		</div><!--end col-md-3-->

		<?php $count++; if(($count % 4) == 0) {?> </div></li><!--end team-row--> <?php }?>

	<?php  }//end foreach

	if(($count % 4) == 1 || ($count % 4) == 2  || ($count % 4) == 3) {?> </div></li><!--end team-row--> <?php } ?>

	</ul>

	</div><!--end flexslider-->

<?php endif;?>