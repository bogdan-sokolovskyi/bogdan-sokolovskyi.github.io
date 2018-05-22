<?php
/**
 * Initialize the meta boxes. 
 */
add_action( 'admin_init', '_custom_meta_boxes' );

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
function _custom_meta_boxes() {
  
  /**
   * Create a custom meta boxes array that we pass to 
   * the OptionTree Meta Box API Class.
   */
   $meta_box_info = array(
    'id'          => 'meta_box_info',
    'title'       => 'Page Customization',
    'desc'        => '',
    'pages'       => array( 'page' ),
    'context'     => 'normal',
    'priority'    => 'high',
    'fields'      => array(
      
	  array(
        'label'       => 'Templates',
        'id'          => 'template_section',
        'type'        => 'select',
        'desc'        => 'Select a template section for this page.',
        'choices'     => array(
		
		 array(
            'label'       => 'Custom',
            'value'       => 'custom'
          ),
		  
          array(
            'label'       => 'About',
            'value'       => 'about'
          ),
		   array(
            'label'       => 'Portfolio Ajax Effect',
            'value'       => 'portfolio_ajax'
          ),
           array(
            'label'       => 'Portfolio Simple',
            'value'       => 'portfolio'
          ),
           array(
            'label'       => 'Services',
            'value'       => 'services'
          ),
		  array(
            'label'       => 'Blog',
            'value'       => 'blog'
          ),
		  array(
            'label'       => 'Contact',
            'value'       => 'contact'
          ),
		  array(
            'label'       => 'Team Members',
            'value'       => 'team_members'
          ),
		  array(
            'label'       => 'Testimonials',
            'value'       => 'testimonials'
          ),
		  
		  array(
            'label'       => 'Pricing Table',
            'value'       => 'pricing_table'
          )
         
          
        ),
        'std'         => 'custom',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
	  array(
        'label'       => 'Custom Title',
        'id'          => 'template_section_title',
        'type'        => 'text',
        'desc'        => 'Change template section custom title',
        'std'         => 'Custom Title',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''       
      ),
	  
	  array(
        'label'       => 'Title Color',
        'id'          => 'template_section_title_color',
        'type'        => 'colorpicker',
        'desc'        => 'Change template section title color',
        'std'         => '#1D609C',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''       
      ),
	  
	  array(
        'label'       => 'Text Color',
        'id'          => 'template_section_text_color',
        'type'        => 'colorpicker',
        'desc'        => 'Change template section text color',
        'std'         => '#555555',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''       
      ),


	  
	  array(
        'label'       => 'Tagline text',
        'id'          => 'template_section_tagline',
        'type'        => 'text',
        'desc'        => 'Change template section tagline text',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'label'       => 'Background Image',
        'id'          => 'template_section_bkg_img',
        'type'        => 'upload',
        'desc'        => 'Upload template section background image.',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  array(
        'label'       => 'Background Cover Color',
        'id'          => 'template_section_bkg_cover_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose template section background cover color.',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	  
	  array(
        'label'       => 'Background Cover Color Alpha',
        'id'          => 'template_section_bkg_cover_alpha',
        'type'        => 'text',
        'desc'        => 'Choose template section background cover color alpha.(between 0 - 1)',
        'std'         => '0.0',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => ''
      ),
	   array(
        'label'       => 'Parallax Effect',
        'id'          => 'template_section_parallax',
        'type'        => 'text',
        'desc'        => 'Choose parallax template section background( true / false)',
        'std'         => 'true',
        'rows'        => '',
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
  ot_register_meta_box( $meta_box_info); 
 

}