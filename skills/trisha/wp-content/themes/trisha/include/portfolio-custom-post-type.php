<?php
add_action('init', 'buildPortfolio');
function buildPortfolio() {
	
		$labels = array(
		'name' => _x('Portfolio', 'post type general name'),
		'singular_name' => _x('Portfolio Item', 'post type singular name'),
		'add_new' => _x('Add Portfolio Item', 'portfolio item'),
		'add_new_item' => __('Add New Portfolio Item'),
		'edit_item' => __('Edit Portfolio Item'),
		'new_item' => __('New Portfolio Item'),
		'view_item' => __('View Portfolio Item'),
		'search_items' => __('Search Portfolio'),
		'not_found' =>  __('Nothing found'),
		'not_found_in_trash' => __('Nothing found in Trash'),
		'parent_item_colon' => ''
		);
	
    	$portfolio_args = array(
        	'labels' => $labels,
        	'label' => __('Portfolio2'),
        	'singular_label' => __('Portfolio3'),
        	'public' => true,
        	'show_ui' => true,
        	'capability_type' => 'post',
        	'hierarchical' => false,
        	'rewrite' => true,
        	'supports' => array('title', 'editor', 'thumbnail')
        );
		register_post_type('portfolio',$portfolio_args);
		
		 $labelsPortfolioSection = array(
    'name' => _x( 'Sections', 'taxonomy general name' ),
    'singular_name' => _x( 'Section', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Sections' ),
    'all_items' => __( 'All Sections' ),
    'parent_item' => __( 'Parent Section' ),
    'parent_item_colon' => __( 'Parent Section:' ),
    'edit_item' => __( 'Edit Section' ),
    'update_item' => __( 'Update Section' ),
    'add_new_item' => __( 'Add New Section' ),
    'new_item_name' => __( 'New Section Name' ),
  ); 	

  register_taxonomy('section','portfolio',array(
    'hierarchical' => true,
    'labels' => $labelsPortfolioSection
  ));

}

?>