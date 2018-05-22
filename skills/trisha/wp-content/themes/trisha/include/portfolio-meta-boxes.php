<?php
/**
 * Initialize the meta boxes. 
 */
add_action( 'admin_init', '_portfolio_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types
 * in demo-theme-options.php.
 *
 * @return    void
 *
 * @access    private
 * @since     2.0
 */
function _portfolio_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
     
  $my_meta_box = array(
    'id'          => 'my_meta_box',
    'title'       => 'Display Slider / Image / Video',
    'desc'        => '',
    'pages'       => array( 'portfolio' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
     array(
        'label'       => 'Choose what you want to display',
        'id'          => 'portfolio_radio',
        'type'        => 'radio',
        'desc'        => 'Select Slider / Image / Video',
        'choices'     => array(
          array(
            'label'       => 'Slider',
            'value'       => 'slider'
          ),
          array(
            'label'       => 'Image',
            'value'       => 'image'
          ), 
          array(
            'label'       => 'Video',
            'value'       => 'video'
          )
        ),
        'std'         => 'slider',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''        
      ),
       array(
        'label'       => 'Slider Items',
        'id'          => 'portfolio_slides',
        'type'        => 'list-item',
        'desc'        => 'Display slider. Add as much items as you want.',
        'settings'    => array(
		  array(
            'label'       => 'Upload',
            'id'          => 'portfolio_slide_upload',
            'type'        => 'upload',
            'desc'        => 'Upload image file. Make sure your image width is at least 770x360px for a better view.',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          )
		  
         	     ),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''      
      ),
	  array(
        'label'       => 'Single Image',
        'id'          => 'portfolio_image',
        'type'        => 'upload',
        'desc'        => 'Display single image.',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	   array(
        'label'       => 'Video',
        'id'          => 'portfolio_video',
        'type'        => 'textarea-simple',
        'desc'        => 'Display video.Embed the video iframe code here.',
        'std'         => '<iframe width="854" height="480" src="https://www.youtube.com/embed/Scxs7L0vhZ4" frameborder="0" allowfullscreen></iframe>',
        'rows'        => '5',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
	  )
  	)
  );
  
  /**
   * Register our meta boxes using the 
   * ot_register_meta_box() function.
   */
   ot_register_meta_box( $my_meta_box );

}