<?php
/**
 * Initialize the custom Meta Boxes.
 */
add_action( 'admin_init', 'custom_meta_boxes' );

/**
 * Meta Boxes demo code.
 *
 * You can find all the available option types in demo-theme-options.php.
 *
 * @return    void
 * @since     2.0
 */
function custom_meta_boxes() {

	/**
	 * Create a custom meta boxes array that we pass to
	 * the OptionTree Meta Box API Class.
	 */
	$home_page = array(
		'id'          => 'home_page_box',
		'title'       => 'Meta Box',
		'desc'        => '',
		'pages'       => array( 'page' ),
		'context'     => 'normal',
		'priority'    => 'high',
		'fields'      => array(
			array(
				'label'       => 'Slider',
				'id'          => 'home_slider_tab',
				'type'        => 'tab'
			),

			array(
				'id'          => 'radio_home',
				'label'       => 'Add slider or image',
				'desc'        => '',
				'std'         => '',
				'type'        => 'radio',
				'rows'        => '',
				'class'       => '',
				'choices'     => array(
					array(
						'value'       => 'slider_home',
						'label'       => 'Slider',
						'src'         => ''
					),
					array(
						'value'       => 'img_home',
						'label'       => 'Image',
						'src'         => ''
					)
				)
			),

			array(
				'label'       => 'Home Slider',
				'id'          => 'home_slider',
				'type'        => 'list-item',
				'desc'        => 'Create slider. Add as much sliders as you want.',
				'settings'    => array(

					array(
						'label'       => 'Slider Name',
						'id'          => 'slider_name',
						'type'        => 'text',
						'desc'        => 'Change slider title.',
						'std'         => '',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'class'       => ''
					),

					array(
						'label'       => 'Description',
						'id'          => 'slider_desc',
						'type'        => 'textarea',
						'desc'        => '',
						'std'         => '',
						'rows'        => '5',
						'post_type'   => '',
						'taxonomy'    => '',
						'class'       => ''
					),

					array(
						'label'       => 'Upload Slider Image',
						'id'          => 'slider_image',
						'type'        => 'upload',
						'desc'        => 'Upload slider image.',
						'std'         => '',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'class'       => ''
					),

				),
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'condition'   => 'radio_home:is(slider_home)',
			),


					array(
						'label'       => 'Image Title',
						'id'          => 'image_name',
						'type'        => 'text',
						'desc'        => 'Change slider title.',
						'std'         => '',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'class'       => '',
						'condition'   => 'radio_home:is(img_home)',
					),

					array(
						'label'       => 'Description',
						'id'          => 'image_desc',
						'type'        => 'textarea',
						'desc'        => '',
						'std'         => '',
						'rows'        => '5',
						'post_type'   => '',
						'taxonomy'    => '',
						'class'       => '',
						'condition'   => 'radio_home:is(img_home)',
					),

					array(
						'label'       => 'Upload Image',
						'id'          => 'img_image',
						'type'        => 'upload',
						'desc'        => 'Upload image.',
						'std'         => '',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'class'       => '',
						'condition'   => 'radio_home:is(img_home)',
					),



			array(
				'label'       => 'Right Section',
				'id'          => 'home_1colum_tab',
				'type'        => 'tab'
			),

			array(
				'label'       => 'Image Items',
				'id'          => 'home_1colum_block',
				'type'        => 'list-item',
				'desc'        => '',
				'settings'    => array(
					array(
						'id'          => 'radio_columns_two',
						'label'       => 'Enter the number of columns',
						'desc'        => '',
						'std'         => '',
						'type'        => 'radio',
						'rows'        => '',
						'class'       => '',
						'choices'     => array(
							array(
								'value'       => 'one_column_sm',
								'label'       => '1 column',
								'src'         => ''
							),
							array(
								'value'       => 'two_column_sm',
								'label'       => '2 column',
								'src'         => ''
							)
						)
					),


					array(
						'label'       => 'Custom Header',
						'id'          => 'home_header',
						'type'        => 'text',
						'desc'        => 'Change template section custom title',
						'std'         => '',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'class'       => ''
					),
					array(
						'label'       => 'Description',
						'id'          => 'home_header_tagline',
						'type'        => 'textarea',
						'desc'        => '',
						'std'         => '',
						'rows'        => '7',
						'post_type'   => '',
						'taxonomy'    => '',
						'class'       => ''
					),

					array(
						'label'       => 'Upload',
						'id'          => 'home_1colum_upload',
						'type'        => 'upload',
						'desc'        => 'Upload image file.',
						'std'         => '',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'class'       => ''
					),
					array(
						'label'       => 'Link',
						'id'          => 'home_1colum_link',
						'type'        => 'text',
						'desc'        => 'Change template section custom link',
						'std'         => '',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'class'       => ''
					),
					array(
						'label'       => 'Custom Title',
						'id'          => 'home_1colum_title',
						'type'        => 'text',
						'desc'        => 'Change template section custom title',
						'std'         => '',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'class'       => ''
					),
					array(
						'label'       => 'Custom Description',
						'id'          => 'home_1colum_desc',
						'type'        => 'textarea',
						'desc'        => 'Change template section custom description',
						'std'         => '',
						'rows'        => '7',
						'post_type'   => '',
						'taxonomy'    => '',
						'class'       => ''
					),

				),
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => ''
			),


		)
	);


	$project_page_2 = array(
		'id'          => 'project_page_box_2',
		'title'       => 'Meta Box',
		'desc'        => '',
		'pages'       => array( 'page' ),
		'context'     => 'normal',
		'priority'    => 'high',
		'fields'      => array(

			array(
				'label'       => 'Create Post',
				'id'          => 'project_post_blocks',
				'type'        => 'list-item',
				'desc'        => '',
				'condition'   => '',
				'settings'    => array(
					array(
						'id'          => 'radio_columns',
						'label'       => 'Enter the number of columns',
						'desc'        => 'Make sure that you select column.',
						'std'         => 'one_col',
						'type'        => 'radio',
						'rows'        => '',
						'class'       => '',
						'choices'     => array(
							array(
								'value'       => 'one_col',
								'label'       => '1 column',
								'src'         => ''
							),
							array(
								'value'       => 'two_col',
								'label'       => '2 column',
								'src'         => ''
							)
						)
					),
					array(
						'label'       => 'Custom Header',
						'id'          => 'project_header',
						'type'        => 'text',
						'desc'        => 'Change template section custom title',
						'std'         => '',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'class'       => ''
					),
					array(
						'label'       => 'Header Description',
						'id'          => 'project_header_tagline',
						'type'        => 'textarea',
						'desc'        => '',
						'std'         => '',
						'rows'        => '7',
						'post_type'   => '',
						'taxonomy'    => '',
						'class'       => ''
					),

					array(
						'id'          => 'radio_columns_img',
						'label'       => 'Add section slider or image',
						'desc'        => '',
						'std'         => '',
						'type'        => 'radio',
						'rows'        => '',
						'class'       => '',
						'choices'     => array(
							array(
								'value'       => 'slider_col',
								'label'       => 'Slider',
								'src'         => ''
							),
							array(
								'value'       => 'img_col',
								'label'       => 'Image',
								'src'         => ''
							)
						)
					),

					array(
						'id'          => 'project_gallery_slides',
						'label'       => 'Slider Items',
						'desc'        => 'Display slider. Add as much items as you want.',
						'std'         => '',
						'type'        => 'gallery',
						'condition'   => 'radio_columns_img:is(slider_col)',
					),

					array(
						'label'       => 'Upload',
						'id'          => 'img_project_gallery_upload',
						'type'        => 'upload',
						'desc'        => 'Upload image file.',
						'std'         => '',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'condition'   => 'radio_columns_img:is(img_col)',
						'class'       => ''
					),
					array(
						'label'       => 'Custom Span',
						'id'          => 'img_project_gallery_slides_span',
						'type'        => 'text',
						'desc'        => 'Change template section custom title span',
						'std'         => '',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'condition'   => 'radio_columns_img:is(img_col)',
						'class'       => ''
					),
					array(
						'label'       => 'Custom Title',
						'id'          => 'img_project_gallery_slides_desc',
						'type'        => 'text',
						'desc'        => 'Change template section custom title',
						'std'         => '',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'condition'   => 'radio_columns_img:is(img_col)',
						'class'       => ''
					),

					array(
						'label'       => 'Upload Mini Image',
						'id'          => 'project_gallery_mini',
						'type'        => 'upload',
						'desc'        => 'Upload mini image file.',
						'std'         => '',
						'rows'        => '',
						'post_type'   => '',
						'taxonomy'    => '',
						'class'       => ''
					),
					array(
						'id'          => 'project_gallery_slide_content',
						'label'       => 'Content',
						'desc'        => '',
						'std'         => '',
						'type'        => 'textarea',
						'rows'        => '7',
					),
					array(
						'id'          => 'project_gallery_slide_button',
						'label'       => 'Button Text',
						'desc'        => '',
						'std'         => '',
						'type'        => 'text',
					),


				),
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => ''
			),


		)
	);



	$contact_meta_box = array(
		'id'          => 'contact_post_meta_box',
		'title'       => 'Meta Box',
		'desc'        => '',
		'pages'       => array( 'page' ),
		'context'     => 'normal',
		'priority'    => 'high',
		'fields'      => array(
			array(
				'label'       => 'Custom Title',
				'id'          => 'contact_meta_box_title',
				'type'        => 'text',
				'desc'        => 'Change template section custom title',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => ''
			),
			array(
				'label'       => 'Tagline text',
				'id'          => 'contact_meta_box_tagline',
				'type'        => 'textarea',
				'desc'        => 'Change template section tagline text.',
				'std'         => '',
				'rows'        => '10',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => ''
			),


		)
	);


	/**
	 * Textarea for meta-box
	 */
	function allow_textare_in_metabox($value, $id){
		if($id == 'template_section_tagline'){
			$value = true;
		}
		else if($id == 'wide_under_slide_content'){
			$value = true;
		}
		else if($id == 'col6_under_slide_content'){
			$value = true;
		}
		else if($id == 'project_gallery_slide_content'){
			$value = true;
		}
		else if($id == 'project_page_tagline'){
			$value = true;
		}
		else if($id == 'home_2colum_desc'){
			$value = true;
		}
		else if($id == 'home_2colum_tagline'){
			$value = true;
		}
		else if($id == 'contact_meta_box_tagline'){
			$value = true;
		}
		else if($id == 'home_1colum_tagline'){
			$value = true;
		}
		else if($id == 'home_1colum_desc'){
			$value = true;
		}
		else if($id == 'home_header_tagline'){
			$value = true;
		}
		else if($id == 'project_header_tagline'){
			$value = true;
		}

		return $value;
	}
	add_filter('ot_override_forced_textarea_simple','allow_textare_in_metabox',10,2);

	/**
	 * Register our meta boxes using the
	 * ot_register_meta_box() function.
	 */
	if ( function_exists( 'ot_register_meta_box' ) )
		/*ot_register_meta_box( $post_meta_box );*/

	$post_id = isset( $_GET['post'] ) ? $_GET['post'] : ( isset( $_POST['post_ID'] ) ? $_POST['post_ID'] : 0 );
	$template_file = get_post_meta($post_id, '_wp_page_template', TRUE);
	if ( $template_file == 'home-page.php' ){
		ot_register_meta_box( $home_page );
	}

	$page_id_2 = isset( $_GET['post'] ) ? $_GET['post'] : ( isset( $_POST['post_ID'] ) ? $_POST['post_ID'] : 0 );
	$template_page_file_2 = get_post_meta($page_id_2, '_wp_page_template', TRUE);
	if ( $template_page_file_2 == 'project-page.php' ){
		ot_register_meta_box( $project_page_2 );
	}

	$contact_id = isset( $_GET['post'] ) ? $_GET['post'] : ( isset( $_POST['post_ID'] ) ? $_POST['post_ID'] : 0 );
	$template_contact_id = get_post_meta($contact_id, '_wp_page_template', TRUE);
	if ( $template_contact_id == 'contact.php' ){
		ot_register_meta_box( $contact_meta_box );
	}
}