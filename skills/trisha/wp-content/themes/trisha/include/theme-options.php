<?php
/**
 * Initialize the options before anything else. 
 */
add_action( 'admin_init', '_custom_theme_options', 1 );

/**
 * Theme Mode demo code of all the available option types.
 *
 * @return    void
 *
 * @access    private
 * @since     2.0
 */
function _custom_theme_options() {
  
  /**
   * Get a copy of the saved settings array. 
   */
  $saved_settings = get_option( 'option_tree_settings', array() );
  $my_fonts = mt_get_google_fonts();
  
  /**
   * Create a custom settings array that we pass to 
   * the OptionTree Settings API Class.
   */
  $custom_settings = array(
    'sections'        => array(
	 array(
        'title'       => 'General Settings',
        'id'          => 'general'
      ),
	  
	   array(
        'title'       => 'Colors & Typo',
        'id'          => 'colors_typo'
      ),
	 
     array(
        'title'       => 'Section About',
        'id'          => 'section_about'
      ),
	  
	  array(
        'title'       => 'Section Team',
        'id'          => 'section_team'
      ),
	
	   array(
        'title'       => 'Section Testimonials',
        'id'          => 'section_testimonials'
      ),
	  
	   array(
        'title'       => 'Section Services',
        'id'          => 'section_services'
      ),
	  
	  array(
        'title'       => 'Section Pricing',
        'id'          => 'section_pricing'
      ),
	  
	  array(
        'title'       => 'Section Blog',
        'id'          => 'section_blog'
      ),
	  
	  array(
        'title'       => 'Section Contact',
        'id'          => 'section_contact'
      ),
	  
	   array(
        'title'       => 'Footer',
        'id'          => 'section_footer'
      )
	  
	  
    ),
    'settings'        => array(

	    array(
		    'label'       => 'Logo Dark',
		    'id'          => 'logo_small_dark',
		    'type'        => 'upload',
		    'desc'        => 'Upload small logo image used in menu bar.',
		    'std'         => get_stylesheet_directory_uri() . '/images/logo-dark.png',
		    'rows'        => '',
		    'post_type'   => '',
		    'taxonomy'    => '',
		    'class'       => '',
		    'section'     => 'general'
	    ),

	    array(
		    'label'       => 'Logo White',
		    'id'          => 'logo_small_white',
		    'type'        => 'upload',
		    'desc'        => 'Upload small logo image used in menu bar.',
		    'std'         => get_stylesheet_directory_uri() . '/images/logo-white.png',
		    'rows'        => '',
		    'post_type'   => '',
		    'taxonomy'    => '',
		    'class'       => '',
		    'section'     => 'general'
	    ),
	  
	  array(
        'label'       => 'Favicon Image',
        'id'          => 'favicon',
        'type'        => 'upload',
        'desc'        => 'Upload favicon image.',
        'std'         => get_stylesheet_directory_uri() . '/images/favicon.ico',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	   array(
        'label'       => 'Google Analytics',
        'id'          => 'analytics',
        'type'        => 'textarea-simple',
        'desc'        => 'Add Google Analytics code.',
        'std'         => '',
        'rows'        => '7',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	   array(
        'label'       => 'Custom CSS',
        'id'          => 'custom_css',
        'type'        => 'textarea-simple',
        'desc'        => 'Add custom CSS code.',
        'std'         => '',
        'rows'        => '10',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	  array(
        'label'       => 'Intro Section - Background Image',
        'id'          => 'intro_bkg_img',
        'type'        => 'upload',
        'desc'        => 'Upload intro background image.',
        'std'         => get_stylesheet_directory_uri() . '/images/background/bg-image.jpg',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	   array(
        'label'       => 'Intro Section - Background Cover Color',
        'id'          => 'intro_bkg_cover',
        'type'        => 'colorpicker',
        'desc'        => 'Choose intro background cover color.',
        'std'         => '#000000',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	  array(
        'label'       => 'Intro Section - Background Cover Color Alpha',
        'id'          => 'intro_bkg_cover_alpha',
        'type'        => 'text',
        'desc'        => 'Choose intro background cover color alpha.(between 0 - 1)',
        'std'         => '0.7',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	  array(
        'label'       => 'Intro Section - Text Color',
        'id'          => 'intro_text_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose intro section text color.',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),

    array(
	    'label'       => 'Intro Section - Main Header',
	    'id'          => 'intro_text_main_header',
	    'type'        => 'text',
	    'desc'        => 'Choose intro text header.',
	    'std'         => 'My Business Portfolio',
	    'rows'        => '',
	    'post_type'   => '',
	    'taxonomy'    => '',
	    'class'       => '',
	    'section'     => 'general'
    ),

	  array(
        'label'       => 'Intro Section - Text Header',
        'id'          => 'intro_text_header',
        'type'        => 'text',
        'desc'        => 'Choose intro text header.',
        'std'         => 'Wordpress theme suitable for individual portfolios or small businesses',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	  array(
        'label'       => 'Intro Section - Button Text',
        'id'          => 'intro_button_text',
        'type'        => 'text',
        'desc'        => 'Choose intro button text',
        'std'         => 'Go to Portfolio',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	  array(
        'label'       => 'Intro Section - Button URL',
        'id'          => 'intro_button_url',
        'type'        => 'text',
        'desc'        => 'Choose intro button URL',
        'std'         => '#',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	
	   array(
        'label'       => 'Scroll Down Image',
        'id'          => 'scroll_down',
        'type'        => 'upload',
        'desc'        => 'Upload scroll down image.',
        'std'         => get_stylesheet_directory_uri() . '/images/arrow-down.png',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	  
	   array(
        'label'       => 'Scroll Down Image - URL',
        'id'          => 'scroll_down_url',
        'type'        => 'text',
        'desc'        => 'Choose scroll down URL',
        'std'         => '#',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'general'
      ),
	 
	  array(
        'label'       => 'Feature Items',
        'id'          => 'about_items',
        'type'        => 'list-item',
        'desc'        => 'Create feature items for the About section. Add as much items as you want.',
        'settings'    => array(
	        array(
		        'label'       => 'Font Awesome Icons',
		        'id'          => 'about_icons',
		        'type'        => 'text',
		        'desc'        => 'Change feature icon class.',
		        'std'         => 'fa-book',
		        'rows'        => '',
		        'post_type'   => '',
		        'taxonomy'    => '',
		        'class'       => ''
	        ),
		  
		   array(
            'label'       => 'Description',
            'id'          => 'about_desc',
            'type'        => 'textarea-simple',
            'desc'        => 'Change feature item description.',
            'std'         => '',
            'rows'        => '5',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          )
		  
		     ),

	      'std'         => '',
	      'rows'        => '',
	      'post_type'   => '',
	      'taxonomy'    => '',
	      'class'       => '',
	      'section'     => 'section_about'
    ),
	    array(
		    'label'       => 'Title Section - Color',
		    'id'          => 'title_sect_color',
		    'type'        => 'colorpicker',
		    'desc'        => 'Choose intro section text color.',
		    'std'         => '#555555',
		    'rows'        => '',
		    'post_type'   => '',
		    'taxonomy'    => '',
		    'class'       => '',
		    'section'     => 'section_about'
	    ),
	    array(
		    'label'       => 'Icons - Color',
		    'id'          => 'icon_color',
		    'type'        => 'colorpicker',
		    'desc'        => 'Choose intro section text color.',
		    'std'         => '#1D609C',
		    'rows'        => '',
		    'post_type'   => '',
		    'taxonomy'    => '',
		    'class'       => '',
		    'section'     => 'section_about'
	    ),
	 
	  array(
        'label'       => 'Team Members',
        'id'          => 'team',
        'type'        => 'list-item',
        'desc'        => 'Create team members. Add as much items as you want.',
        'settings'    => array(
		array(
            'label'       => 'Team Member Name',
            'id'          => 'team_name',
            'type'        => 'text',
            'desc'        => 'Choose team member name',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
		array(
            'label'       => 'Team Member Job Position',
            'id'          => 'team_job',
            'type'        => 'text',
            'desc'        => 'Choose team member job position',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
		  array(
            'label'       => 'Upload Team Member Image',
            'id'          => 'team_upload',
            'type'        => 'upload',
            'desc'        => 'Upload team member image file.',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
          array(
            'label'       => 'Team Member Facebook URL',
            'id'          => 'team_fb',
            'type'        => 'text',
            'desc'        => 'Change team member Facebook URL',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
		  array(
            'label'       => 'Team Member Twitter URL',
            'id'          => 'team_twitter',
            'type'        => 'text',
            'desc'        => 'Change team member Twitter URL',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
		  array(
            'label'       => 'Team Member Google+ URL',
            'id'          => 'team_google',
            'type'        => 'text',
            'desc'        => 'Change team member Google+ URL',
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
        'class'       => '',
        'section'     => 'section_team'
      ),
	  
	   array(
        'label'       => 'Testimonials Section - Create Testimonials',
        'id'          => 'testimonials',
        'type'        => 'list-item',
        'desc'        => 'Create testimonials. Add as much items as you want.',
        'settings'    => array(
		array(
            'label'       => 'Client Name',
            'id'          => 'testimonials_client',
            'type'        => 'text',
            'desc'        => 'Add client name',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
		array(
            'label'       => 'Client Text',
            'id'          => 'testimonials_text',
            'type'        => 'textarea-simple',
            'desc'        => 'Add client testimonial.',
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
        'class'       => '',
        'section'     => 'section_testimonials'
      ),
	  
	  array(
        'label'       => 'Services Items',
        'id'          => 'service_items',
        'type'        => 'list-item',
        'desc'        => 'Create services. Add as much items as you want.',
        'settings'    => array(
		 array(
            'label'       => 'Upload Icon',
            'id'          => 'service_image',
            'type'        => 'upload',
            'desc'        => 'Upload image icon. Make sure your image is 80x80px for a better view.',
            'std'         => '',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
		   array(
            'label'       => 'Description',
            'id'          => 'service_desc',
            'type'        => 'textarea-simple',
            'desc'        => 'Change service description.',
            'std'         => '',
            'rows'        => '7',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          )
		  
		     ),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_services'
      ),
	  
	   array(
        'label'       => 'Pricing Table Items',
        'id'          => 'price_table',
        'type'        => 'list-item',
        'desc'        => 'Create pricing table columns. Add a maximum of 4 columns for a better view.',
        'settings'    => array(
		 
		 array(
            'label'       => 'Price',
            'id'          => 'price_price',
            'type'        => 'text',
            'desc'        => 'Change column pricing option.',
            'std'         => '$199',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
		   array(
            'label'       => 'Features',
            'id'          => 'price_features',
            'type'        => 'textarea-simple',
            'desc'        => 'Change column features.',
            'std'         => '<ul>
<li>Unlimited Web Space</li>
<li>FREE Site Building Tools</li>
<li>FREE Domain Registar</li>
<li>24/7/365 Support </li>
<li>FREE Marketing & SEO Tools</li>
<li>99.9% Service Uptime</li>
<li>30 Day Money Back Guarantee</li>
</ul>',
            'rows'        => '7',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
		  array(
            'label'       => 'Button Text',
            'id'          => 'price_button',
            'type'        => 'text',
            'desc'        => 'Change column text button.',
            'std'         => 'Sign Up',
            'rows'        => '',
            'post_type'   => '',
            'taxonomy'    => '',
            'class'       => ''
          ),
		  
		  array(
            'label'       => 'Button URL',
            'id'          => 'price_button_url',
            'type'        => 'text',
            'desc'        => 'Change column button URL.',
            'std'         => '#',
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
        'class'       => '',
        'section'     => 'section_pricing'
      ),
			array(
				'label'       => 'Text - Color',
				'id'          => 'text_price_color',
				'type'        => 'colorpicker',
				'desc'        => 'Choose intro section text color.',
				'std'         => '#555555',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'section_pricing'
			),
	  
	  array(
        'label'       => 'Number of posts',
        'id'          => 'blog_nr_posts',
        'type'        => 'text',
        'desc'        => 'Change number of post to be displayed',
        'std'         => '6',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_blog'
      ),
	  
	  array(
        'label'       => 'Your Email Address',
        'id'          => 'mt_email_contact',
        'type'        => 'text',
        'desc'        => 'Add your email address where you want to receive messages',
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_contact'
      ),
			array(
				'label'       => 'Your Project Name',
				'id'          => 'mt_project_name',
				'type'        => 'text',
				'desc'        => 'Add your project name.',
				'std'         => 'Site Name',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'section_contact'
			),
			array(
				'label'       => 'Your Form Subject',
				'id'          => 'mt_form_subject',
				'type'        => 'text',
				'desc'        => 'Add your form subject.',
				'std'         => 'Form Subject',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'section_contact'
			),
	  	 
	  array(
        'label'       => 'Contact Field Background Color',
        'id'          => 'contact_field_bkg',
        'type'        => 'colorpicker',
        'desc'        => 'Change contact field background color',
        'std'         => '#7C7C7C',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_contact'
      ),
	  
	  array(
        'label'       => 'Contact Field Text Color Focus',
        'id'          => 'contact_field_color_focus',
        'type'        => 'colorpicker',
        'desc'        => 'Change contact field text color focus state',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_contact'
      ),
	  
	  array(
        'label'       => 'Contact Field Background Color Focus',
        'id'          => 'contact_field_bkg_focus',
        'type'        => 'colorpicker',
        'desc'        => 'Change contact field background color focus state',
        'std'         => '#9A9A9A',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_contact'
      ),
	  
	  array(
        'label'       => 'Title Right',
        'id'          => 'tright_contact',
        'type'        => 'text',
        'desc'        => 'Change the right title',
        'std'         => 'Contact Details',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_contact'
      ),
	  
	  array(
        'label'       => 'Text Right Side',
        'id'          => 'text_contact',
        'type'        => 'textarea-simple',
        'desc'        => 'Change the right side text',
        'std'         => 'Our company is a leading global professional services, providing a broad range of services and solutions in strategy, consulting, analysis of investment projects and business planning.',
        'rows'        => '7',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_contact'
      ),
	  
	  array(
        'label'       => 'Address Right Side',
        'id'          => 'address_contact',
        'type'        => 'text',
        'desc'        => 'Change contact address',
        'std'         => 'Head office, 564 North Catalina Avenue, California 90277, USA.',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_contact'
      ),
	  
	  array(
        'label'       => 'Phone Right Side',
        'id'          => 'phone_contact',
        'type'        => 'text',
        'desc'        => 'Change contact phone',
        'std'         => '0123 456 7890',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_contact'
      ),
	  
	  array(
        'label'       => 'Email Right Side',
        'id'          => 'email_contact',
        'type'        => 'text',
        'desc'        => 'Change contact email, displayed on the right side',
        'std'         => 'trisha@support.com',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_contact'
      ),

			array(
				'label'       => 'Button Text',
				'id'          => 'intro_button_form_text',
				'type'        => 'text',
				'desc'        => 'Choose intro button text',
				'std'         => 'Send',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'section_contact'
			),
	  
	  array(
        'label'       => 'Background Color',
        'id'          => 'footer_bkg_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose footer background color',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_footer'
      ),
	  
	  array(
        'label'       => 'Copyright text',
        'id'          => 'footer_text',
        'type'        => 'text',
        'desc'        => 'Change copyright footer text',
        'std'         => 'Trisha &copy; 2016. All Rights Reserved.',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_footer'
      ),
	  
	  array(
        'label'       => __('Facebook URL', 'match'),
        'id'          => 'mt_social_facebook_url',
        'type'        => 'text',
        'desc'        => __('Add Facebook URL. If the field is empty the icon will not be displayed.', 'match'),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_footer'
      ),
	  
	  array(
        'label'       => __('Twitter URL', 'match'),
        'id'          => 'mt_social_twitter_url',
        'type'        => 'text',
        'desc'        => __('Add Twitter URL. If the field is empty the icon will not be displayed.', 'match'),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_footer'
      ),
	  
	  array(
        'label'       => __('Google Plus URL', 'match'),
        'id'          => 'mt_social_gplus_url',
        'type'        => 'text',
        'desc'        => __('Add Google Plus URL. If the field is empty the icon will not be displayed.', 'match'),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_footer'
      ),
	  
	  array(
        'label'       => __('Linkedin URL', 'match'),
        'id'          => 'mt_social_linkedin_url',
        'type'        => 'text',
        'desc'        => __('Add Linkedin URL. If the field is empty the icon will not be displayed.', 'match'),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_footer'
      ),
	  
	  array(
        'label'       => __('Pinterest URL', 'match'),
        'id'          => 'mt_social_pinterest_url',
        'type'        => 'text',
        'desc'        => __('Add Pinterest URL. If the field is empty the icon will not be displayed.', 'match'),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_footer'
      ),
	  
	  array(
        'label'       => __('YouTube URL', 'match'),
        'id'          => 'mt_social_youtube_url',
        'type'        => 'text',
        'desc'        => __('Add YouTube URL. If the field is empty the icon will not be displayed.', 'match'),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_footer'
      ),
	  
	  array(
        'label'       => __('Vimeo URL', 'match'),
        'id'          => 'mt_social_vimeo_url',
        'type'        => 'text',
        'desc'        => __('Add Vimeo URL. If the field is empty the icon will not be displayed.', 'match'),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_footer'
      ),
	  
	  array(
        'label'       => __('Instagram URL', 'match'),
        'id'          => 'mt_social_instagram_url',
        'type'        => 'text',
        'desc'        => __('Add Instagram URL. If the field is empty the icon will not be displayed.', 'match'),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_footer'
      ),
	  
	  array(
        'label'       => __('Dribbble URL', 'match'),
        'id'          => 'mt_social_dribbble_url',
        'type'        => 'text',
        'desc'        => __('Add Dribbble URL. If the field is empty the icon will not be displayed.', 'match'),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_footer'
      ),
	  
	  array(
        'label'       => __('Skype URL', 'match'),
        'id'          => 'mt_social_skype_url',
        'type'        => 'text',
        'desc'        => __('Add Skype URL. If the field is empty the icon will not be displayed.', 'match'),
        'std'         => '',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'section_footer'
      ),
	  	 	  
	   array(
        'label'       => 'Link Color',
        'id'          => 'link_primary',
        'type'        => 'colorpicker',
        'desc'        => 'Choose link color.',
        'std'         => '#333333',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'colors_typo'
      ),
	  
	   array(
        'label'       => 'Link Hover Color',
        'id'          => 'link_hover_primary',
        'type'        => 'colorpicker',
        'desc'        => 'Choose link hover color.',
        'std'         => '#034682',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'colors_typo'
      ),
	  
	  array(
        'label'       => 'Body Text Color',
        'id'          => 'body_color',
        'type'        => 'colorpicker',
        'desc'        => 'Choose your font color.',
        'std'         => '#555555',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'colors_typo'
      ),
	  
	  array(
        'label'       => 'Body Background Color',
        'id'          => 'body_bkg',
        'type'        => 'colorpicker',
        'desc'        => 'Choose background color.',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'colors_typo'
      ),
	  
	  array(
        'label'       => 'Headers and Menu Font Family',
        'id'          => 'headers_family',
        'type'        => 'select',
        'desc'        => 'Select headers and menu font family for the Google Web Fonts.',
        'choices'     => $my_fonts,
        'std'         => 'Roboto',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'colors_typo'
      ),
	  
	  array(
        'label'       => 'Body Font Size',
        'id'          => 'body_size',
        'type'        => 'select',
        'desc'        => 'Select text font page size.',
        'choices'     => array(
          array(
            'label'       => '14px',
            'value'       => '14px'
          ),
          array(
            'label'       => '16px',
            'value'       => '16px'
          ),
          array(
            'label'       => '18px',
            'value'       => '18px'
          ),
          array(
            'label'       => '20px',
            'value'       => '20px'
          ),
          array(
            'label'       => '24px',
            'value'       => '24px'
          )
          
        ),
        'std'         => '16px',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'colors_typo'
      ),
	  
	   array(
        'label'       => 'Navigation Bar Background Color',
        'id'          => 'header_bkg',
        'type'        => 'colorpicker',
        'desc'        => 'Choose navigation bar background color.',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'colors_typo'
      ),
	  
	   array(
        'label'       => 'Menu Link - Text Color',
        'id'          => 'menu_link_1',
        'type'        => 'colorpicker',
        'desc'        => 'Choose menu link - text color.',
        'std'         => '#1D609C',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'colors_typo'
      ),

	    array(
		    'label'       => 'Menu Link - Text Color on the Panel',
		    'id'          => 'menu_link_1_1',
		    'type'        => 'colorpicker',
		    'desc'        => 'Choose menu link - text color.',
		    'std'         => '#333333',
		    'rows'        => '',
		    'post_type'   => '',
		    'taxonomy'    => '',
		    'class'       => '',
		    'section'     => 'colors_typo'
	    ),

	  array(
        'label'       => 'Menu Link - Hover Text Color',
        'id'          => 'menu_link_2',
        'type'        => 'colorpicker',
        'desc'        => 'Choose menu link hover color.',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'colors_typo'
      ),
	  
	  array(
        'label'       => 'Menu Link - Hover Background Color',
        'id'          => 'menu_link_2_bkg',
        'type'        => 'colorpicker',
        'desc'        => 'Choose menu link - hover background color.',
        'std'         => '#1D609C',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'colors_typo'
      ),
	  
	   array(
        'label'       => 'Button Flat - Border Color',
        'id'          => 'btn_flat_border',
        'type'        => 'colorpicker',
        'desc'        => 'Choose button flat border color.',
        'std'         => '#1D609C',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'colors_typo'
      ),
	  
	  array(
        'label'       => 'Button Flat - Text Color',
        'id'          => 'btn_flat_text',
        'type'        => 'colorpicker',
        'desc'        => 'Choose button flat text color.',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'colors_typo'
      ),

	    array(
		    'label'       => 'Button Flat - Hover Text Color',
		    'id'          => 'btn_flat_hover_text',
		    'type'        => 'colorpicker',
		    'desc'        => 'Choose button flat text color.',
		    'std'         => '#1D609C',
		    'rows'        => '',
		    'post_type'   => '',
		    'taxonomy'    => '',
		    'class'       => '',
		    'section'     => 'colors_typo'
	    ),
	  
	  array(
        'label'       => 'Button Flat - Hover Background Color',
        'id'          => 'btn_flat_hover_bkg',
        'type'        => 'colorpicker',
        'desc'        => 'Choose button flat hover background color.',
        'std'         => '#ffffff',
        'rows'        => '',
        'post_type'   => '',
        'taxonomy'    => '',
        'class'       => '',
        'section'     => 'colors_typo'
      )
	  
	)
  );
  
  /* allow settings to be filtered before saving */
  $custom_settings = apply_filters( 'option_tree_settings_args', $custom_settings );
  
  /* settings are not the same update the DB */
  if ( $saved_settings !== $custom_settings ) {
    update_option( 'option_tree_settings', $custom_settings ); 
  }
  
}

if ( ! function_exists( 'mt_get_google_fonts' ) ) :

function mt_get_google_fonts(){

$xfonts = array(
          array(
            'label'       => 'ABeeZee',
            'value'       => 'ABeeZee'
          ),
          array(
            'label'       => 'Abel',
            'value'       => 'Abel'
          ),
          array(
            'label'       => 'Acme',
            'value'       => 'Acme'
          ),
          array(
            'label'       => 'Actor',
            'value'       => 'Actor'
          ),
          array(
            'label'       => 'Adamina',
            'value'       => 'Adamina'
          ),
          array(
            'label'       => 'Aldrich',
            'value'       => 'Aldrich'
          ),
          array(
            'label'       => 'Alice',
            'value'       => 'Alice'
          ),
          array(
            'label'       => 'Allerta',
            'value'       => 'Allerta'
          ),
          array(
            'label'       => 'Almendra',
            'value'       => 'Almendra'
          ),
          array(
            'label'       => 'Amaranth',
            'value'       => 'Amaranth'
          ),
          array(
            'label'       => 'Anonymous Pro',
            'value'       => 'Anonymous Pro'
          ),
          array(
            'label'       => 'Anton',
            'value'       => 'Anton'
          ),
          array(
            'label'       => 'Arapey',
            'value'       => 'Arapey'
          ),
          array(
            'label'       => 'Archivo Narrow',
            'value'       => 'Archivo Narrow'
          ),
          array(
            'label'       => 'Arvo',
            'value'       => 'Arvo'
          ),
          array(
            'label'       => 'Asul',
            'value'       => 'Asul'
          ),
          array(
            'label'       => 'Belgrano',
            'value'       => 'Belgrano'
          ),
          array(
            'label'       => 'Belleza',
            'value'       => 'Belleza'
          ),
          array(
            'label'       => 'BenchNine',
            'value'       => 'BenchNine'
          ),
          array(
            'label'       => 'Bentham',
            'value'       => 'Bentham'
          ),
          array(
            'label'       => 'Bitter',
            'value'       => 'Bitter'
          ),
          array(
            'label'       => 'Brawler',
            'value'       => 'Brawler'
          ),
          array(
            'label'       => 'Bree Serif',
            'value'       => 'Bree Serif'
          ),
          array(
            'label'       => 'Buenard',
            'value'       => 'Buenard'
          ),
          array(
            'label'       => 'Cabin',
            'value'       => 'Cabin'
          ),
          array(
            'label'       => 'Cagliostro',
            'value'       => 'Cagliostro'
          ),
          array(
            'label'       => 'Cambo',
            'value'       => 'Cambo'
          ),
          array(
            'label'       => 'Candal',
            'value'       => 'Candal'
          ),
          array(
            'label'       => 'Cantarell',
            'value'       => 'Cantarell'
          ),
          array(
            'label'       => 'Cantora One',
            'value'       => 'Cantora One'
          ),
          array(
            'label'       => 'Capriola',
            'value'       => 'Capriola'
          ),
          array(
            'label'       => 'Cardo',
            'value'       => 'Cardo'
          ),
          array(
            'label'       => 'Carme',
            'value'       => 'Carme'
          ),
          array(
            'label'       => 'Caudex',
            'value'       => 'Caudex'
          ),
          array(
            'label'       => 'Chivo',
            'value'       => 'Chivo'
          ),
          array(
            'label'       => 'Cinzel',
            'value'       => 'Cinzel'
          ),
          array(
            'label'       => 'Convergence',
            'value'       => 'Convergence'
          ),
          array(
            'label'       => 'Copse',
            'value'       => 'Copse'
          ),
          array(
            'label'       => 'Cousine',
            'value'       => 'Cousine'
          ),
          array(
            'label'       => 'Coustard',
            'value'       => 'Coustard'
          ),
          array(
            'label'       => 'Crete Round',
            'value'       => 'Crete Round'
          ),
          array(
            'label'       => 'Crimson Text',
            'value'       => 'Crimson Text'
          ),
          array(
            'label'       => 'Cuprum',
            'value'       => 'Cuprum'
          ),
          array(
            'label'       => 'Cutive',
            'value'       => 'Cutive'
          ),
          array(
            'label'       => 'Cutive Mono',
            'value'       => 'Cutive Mono'
          ),
          array(
            'label'       => 'Days One',
            'value'       => 'Days One'
          ),
          array(
            'label'       => 'Della Respira',
            'value'       => 'Della Respira'
          ),
          array(
            'label'       => 'Didact Gothic',
            'value'       => 'Didact Gothic'
          ),
          array(
            'label'       => 'Doppio One',
            'value'       => 'Doppio One'
          ),
          array(
            'label'       => 'Dorsa',
            'value'       => 'Dorsa'
          ),
          array(
            'label'       => 'Dosis',
            'value'       => 'Dosis'
          ),
          array(
            'label'       => 'Droid Sans',
            'value'       => 'Droid Sans'
          ),
          array(
            'label'       => 'Droid Sans Mono',
            'value'       => 'Droid Sans Mono'
          ),
          array(
            'label'       => 'Droid Serif',
            'value'       => 'Droid Serif'
          ),
          array(
            'label'       => 'Duru Sans',
            'value'       => 'Duru Sans'
          ),
          array(
            'label'       => 'EB Garamond',
            'value'       => 'EB Garamond'
          ),
          array(
            'label'       => 'Economica',
            'value'       => 'Economica'
          ),
          array(
            'label'       => 'Electrolize',
            'value'       => 'Electrolize'
          ),
          array(
            'label'       => 'Englebert',
            'value'       => 'Englebert'
          ),
          array(
            'label'       => 'Enriqueta',
            'value'       => 'Enriqueta'
          ),
          array(
            'label'       => 'Esteban',
            'value'       => 'Esteban'
          ),
          array(
            'label'       => 'Exo',
            'value'       => 'Exo'
          ),
          array(
            'label'       => 'Fanwood Text',
            'value'       => 'Fanwood Text'
          ),
          array(
            'label'       => 'Federo',
            'value'       => 'Federo'
          ),
          array(
            'label'       => 'Fenix',
            'value'       => 'Fenix'
          ),
          array(
            'label'       => 'Fjord One',
            'value'       => 'Fjord One'
          ),
          array(
            'label'       => 'Francois One',
            'value'       => 'Francois One'
          ),
          array(
            'label'       => 'Fresca',
            'value'       => 'Fresca'
          ),
          array(
            'label'       => 'Gafata',
            'value'       => 'Gafata'
          ),
          array(
            'label'       => 'Galdeano',
            'value'       => 'Galdeano'
          ),
          array(
            'label'       => 'Gentium Basic',
            'value'       => 'Gentium Basic'
          ),
          array(
            'label'       => 'Gentium Book Basic',
            'value'       => 'Gentium Book Basic'
          ),
          array(
            'label'       => 'Geo',
            'value'       => 'Geo'
          ),
          array(
            'label'       => 'Gilda Display',
            'value'       => 'Gilda Display'
          ),
          array(
            'label'       => 'Glegoo',
            'value'       => 'Glegoo'
          ),
          array(
            'label'       => 'Gudea',
            'value'       => 'Gudea'
          ),
          array(
            'label'       => 'Habibi',
            'value'       => 'Habibi'
          ),
          array(
            'label'       => 'Hammersmith One',
            'value'       => 'Hammersmith One'
          ),
          array(
            'label'       => 'Headland One',
            'value'       => 'Headland One'
          ),
          array(
            'label'       => 'Holtwood One SC',
            'value'       => 'Holtwood One SC'
          ),
          array(
            'label'       => 'Homenaje',
            'value'       => 'Homenaje'
          ),
          array(
            'label'       => 'Imprima',
            'value'       => 'Imprima'
          ),
          array(
            'label'       => 'Inconsolata',
            'value'       => 'Inconsolata'
          ),
          array(
            'label'       => 'Inder',
            'value'       => 'Inder'
          ),
          array(
            'label'       => 'Inika',
            'value'       => 'Inika'
          ),
          array(
            'label'       => 'Istok Web',
            'value'       => 'Istok Web'
          ),
          array(
            'label'       => 'Italiana',
            'value'       => 'Italiana'
          ),
          array(
            'label'       => 'Jacques Francois',
            'value'       => 'Jacques Francois'
          ),
          array(
            'label'       => 'Jockey One',
            'value'       => 'Jockey One'
          ),
          array(
            'label'       => 'Josefin Sans',
            'value'       => 'Josefin Sans'
          ),
          array(
            'label'       => 'Josefin Slab',
            'value'       => 'Josefin Slab'
          ),
          array(
            'label'       => 'Judson',
            'value'       => 'Judson'
          ),
          array(
            'label'       => 'Junge',
            'value'       => 'Junge'
          ),
          array(
            'label'       => 'Kameron',
            'value'       => 'Kameron'
          ),
          array(
            'label'       => 'Karla',
            'value'       => 'Karla'
          ),
          array(
            'label'       => 'Kite One',
            'value'       => 'Kite One'
          ),
          array(
            'label'       => 'Kotta One',
            'value'       => 'Kotta One'
          ),
          array(
            'label'       => 'Kreon',
            'value'       => 'Kreon'
          ),
          array(
            'label'       => 'Lato',
            'value'       => 'Lato'
          ),
          array(
            'label'       => 'Ledger',
            'value'       => 'Ledger'
          ),
          array(
            'label'       => 'Lekton',
            'value'       => 'Lekton'
          ),
          array(
            'label'       => 'Lora',
            'value'       => 'Lora'
          ),
          array(
            'label'       => 'Lusitana',
            'value'       => 'Lusitana'
          ),
          array(
            'label'       => 'Lustria',
            'value'       => 'Lustria'
          ),
          array(
            'label'       => 'Magra',
            'value'       => 'Magra'
          ),
          array(
            'label'       => 'Mako',
            'value'       => 'Mako'
          ),
          array(
            'label'       => 'Marcellus',
            'value'       => 'Marcellus'
          ),
          array(
            'label'       => 'Marko One',
            'value'       => 'Marko One'
          ),
          array(
            'label'       => 'Marmelad',
            'value'       => 'Marmelad'
          ),
          array(
            'label'       => 'Marvel',
            'value'       => 'Marvel'
          ),
          array(
            'label'       => 'Mate',
            'value'       => 'Mate'
          ),
          array(
            'label'       => 'Maven Pro',
            'value'       => 'Maven Pro'
          ),
          array(
            'label'       => 'Merriweather',
            'value'       => 'Merriweather'
          ),
          array(
            'label'       => 'Metrophobic',
            'value'       => 'Metrophobic'
          ),
          array(
            'label'       => 'Michroma',
            'value'       => 'Michroma'
          ),
          array(
            'label'       => 'Molengo',
            'value'       => 'Molengo'
          ),
          array(
            'label'       => 'Montaga',
            'value'       => 'Montaga'
          ),
          array(
            'label'       => 'Montserrat',
            'value'       => 'Montserrat'
          ),
          array(
            'label'       => 'Mouse Memoirs',
            'value'       => 'Mouse Memoirs'
          ),
          array(
            'label'       => 'Muli',
            'value'       => 'Muli'
          ),
          array(
            'label'       => 'Neuton',
            'value'       => 'Neuton'
          ),
          array(
            'label'       => 'News Cycle',
            'value'       => 'News Cycle'
          ),
          array(
            'label'       => 'Nobile',
            'value'       => 'Nobile'
          ),
          array(
            'label'       => 'Noticia Text',
            'value'       => 'Noticia Text'
          ),
		   array(
            'label'       => 'Noto Sans',
            'value'       => 'Noto Sans'
          ),
		   array(
            'label'       => 'Noto Serif',
            'value'       => 'Noto Serif'
          ),		  
          array(
            'label'       => 'Numans',
            'value'       => 'Numans'
          ),
          array(
            'label'       => 'Nunito',
            'value'       => 'Nunito'
          ),
          array(
            'label'       => 'Old Standard TT',
            'value'       => 'Old Standard TT'
          ),
          array(
            'label'       => 'Open Sans',
            'value'       => 'Open Sans'
          ),
          array(
            'label'       => 'Open Sans Condensed',
            'value'       => 'Open Sans Condensed'
          ),
          array(
            'label'       => 'Oranienbaum',
            'value'       => 'Oranienbaum'
          ),
          array(
            'label'       => 'Orbitron',
            'value'       => 'Orbitron'
          ),
          array(
            'label'       => 'Orienta',
            'value'       => 'Orienta'
          ),
          array(
            'label'       => 'Oswald',
            'value'       => 'Oswald'
          ),
          array(
            'label'       => 'Ovo',
            'value'       => 'Ovo'
          ),
          array(
            'label'       => 'Oxygen',
            'value'       => 'Oxygen'
          ),
          array(
            'label'       => 'Oxygen Mono',
            'value'       => 'Oxygen Mono'
          ),
          array(
            'label'       => 'PT Mono',
            'value'       => 'PT Mono'
          ),
          array(
            'label'       => 'PT Sans',
            'value'       => 'PT Sans'
          ),
          array(
            'label'       => 'PT Sans Caption',
            'value'       => 'PT Sans Caption'
          ),
          array(



            'label'       => 'PT Sans Narrow',
            'value'       => 'PT Sans Narrow'
          ),
          array(
            'label'       => 'PT Serif',
            'value'       => 'PT Serif'
          ),
          array(
            'label'       => 'PT Serif Caption',
            'value'       => 'PT Serif Caption'
          ),
          array(
            'label'       => 'Paytone One',
            'value'       => 'Paytone One'
          ),
          array(
            'label'       => 'Petrona',
            'value'       => 'Petrona'
          ),
          array(
            'label'       => 'Philosopher',
            'value'       => 'Philosopher'
          ),
          array(
            'label'       => 'Play',
            'value'       => 'Play'
          ),
          array(
            'label'       => 'Playfair Display',
            'value'       => 'Playfair Display'
          ),
          array(
            'label'       => 'Podkova',
            'value'       => 'Podkova'
          ),
          array(
            'label'       => 'Poly',
            'value'       => 'Poly'
          ),
          array(
            'label'       => 'Pontano Sans',
            'value'       => 'Pontano Sans'
          ),
          array(
            'label'       => 'Port Lligat Sans',
            'value'       => 'Port Lligat Sans'
          ),
          array(
            'label'       => 'Port Lligat Slab',
            'value'       => 'Port Lligat Slab'
          ),
          array(
            'label'       => 'Prata',
            'value'       => 'Prata'
          ),
          array(
            'label'       => 'Prociono',
            'value'       => 'Prociono'
          ),
          array(
            'label'       => 'Puritan',
            'value'       => 'Puritan'
          ),
          array(
            'label'       => 'Quando',
            'value'       => 'Quando'
          ),
          array(
            'label'       => 'Quantico',
            'value'       => 'Quantico'
          ),
          array(
            'label'       => 'Quattrocento',
            'value'       => 'Quattrocento'
          ),
          array(
            'label'       => 'Quattrocento Sans',
            'value'       => 'Quattrocento Sans'
          ),
          array(
            'label'       => 'Questrial',
            'value'       => 'Questrial'
          ),
          array(
            'label'       => 'Quicksand',
            'value'       => 'Quicksand'
          ),
          array(
            'label'       => 'Radley',
            'value'       => 'Radley'
          ),
          array(
            'label'       => 'Raleway',
            'value'       => 'Raleway'
          ),
          array(
            'label'       => 'Rambla',
            'value'       => 'Rambla'
          ),
          array(
            'label'       => 'Rationale',
            'value'       => 'Rationale'
          ),
					array(
						'label'       => 'Roboto',
						'value'       => 'Roboto'
					),
          array(
            'label'       => 'Rokkitt',
            'value'       => 'Rokkitt'
          ),
          array(
            'label'       => 'Ropa Sans',
            'value'       => 'Ropa Sans'
          ),
          array(
            'label'       => 'Rosario',
            'value'       => 'Rosario'
          ),
          array(
            'label'       => 'Rufina',
            'value'       => 'Rufina'
          ),
          array(
            'label'       => 'Ruluko',
            'value'       => 'Ruluko'
          ),
          array(
            'label'       => 'Rum Raisin',
            'value'       => 'Rum Raisin'
          ),
          array(
            'label'       => 'Russo One',
            'value'       => 'Russo One'
          ),
          array(
            'label'       => 'Sanchez',
            'value'       => 'Sanchez'
          ),
          array(
            'label'       => 'Scada',
            'value'       => 'Scada'
          ),
          array(
            'label'       => 'Seymour One',
            'value'       => 'Seymour One'
          ),
          array(
            'label'       => 'Shanti',
            'value'       => 'Shanti'
          ),
          array(
            'label'       => 'Share Tech',
            'value'       => 'Share Tech'
          ),
          array(
            'label'       => 'Share Tech Mono',
            'value'       => 'Share Tech Mono'
          ),
          array(
            'label'       => 'Signika',
            'value'       => 'Signika'
          ),
          array(
            'label'       => 'Signika Negative',
            'value'       => 'Signika Negative'
          ),
          array(
            'label'       => 'Snippet',
            'value'       => 'Snippet'
          ),
          array(
            'label'       => 'Sorts Mill Goudy',
            'value'       => 'Sorts Mill Goudy'
          ),
          array(
            'label'       => 'Source Code Pro',
            'value'       => 'Source Code Pro'
          ),
          array(
            'label'       => 'Source Sans Pro',
            'value'       => 'Source Sans Pro'
          ),
          array(
            'label'       => 'Spinnaker',
            'value'       => 'Spinnaker'
          ),
          array(
            'label'       => 'Stoke',
            'value'       => 'Stoke'
          ),
          array(
            'label'       => 'Strait',
            'value'       => 'Strait'
          ),
          array(
            'label'       => 'Telex',
            'value'       => 'Telex'
          ),
          array(
            'label'       => 'Tenor Sans',
            'value'       => 'Tenor Sans'
          ),
          array(
            'label'       => 'Text Me One',
            'value'       => 'Text Me One'
          ),
          array(
            'label'       => 'Tienne',
            'value'       => 'Tienne'
          ),
          array(
            'label'       => 'Tinos',
            'value'       => 'Tinos'
          ),
          array(
            'label'       => 'Trocchi',
            'value'       => 'Trocchi'
          ),
          array(
            'label'       => 'Ubuntu',
            'value'       => 'Ubuntu'
          ),
          array(
            'label'       => 'Ubuntu Condensed',
            'value'       => 'Ubuntu Condensed'
          ),
          array(
            'label'       => 'Ubuntu Mono',
            'value'       => 'Ubuntu Mono'
          ),
          array(
            'label'       => 'Ultra',
            'value'       => 'Ultra'
          ),
          array(
            'label'       => 'Unna',
            'value'       => 'Unna'
          ),
          array(
            'label'       => 'Varela',
            'value'       => 'Varela'
          ),
          array(
            'label'       => 'Varela Round',
            'value'       => 'Varela Round'
          ),
          array(
            'label'       => 'Vidaloka',
            'value'       => 'Vidaloka'
          ),
          array(
            'label'       => 'Viga',
            'value'       => 'Viga'
          ),
          array(
            'label'       => 'Volkhov',
            'value'       => 'Volkhov'
          ),
          array(
            'label'       => 'Vollkorn',
            'value'       => 'Vollkorn'
          ),
          array(
            'label'       => 'Voltaire',
            'value'       => 'Voltaire'
          ),
          array(
            'label'       => 'Wire One',
            'value'       => 'Wire One'
          ),
          array(
            'label'       => 'Yanone Kaffeesatz',
            'value'       => 'Yanone Kaffeesatz'
          )
          
        );
	
	return apply_filters( 'mt_get_google_fonts', $xfonts );
	
	}
	
endif;