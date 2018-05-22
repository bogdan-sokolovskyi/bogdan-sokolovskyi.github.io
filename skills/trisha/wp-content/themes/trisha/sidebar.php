<?php
/**
 * @package WordPress
 * @subpackage Trisha
 */
?>
<aside class="col-md-4">
	<ul>
		<?php 	/* Widgetized sidebar, if you have the plugin installed. */
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>

		<?php endif; ?>

	</ul>


</aside><!-- end sidebar -->