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
				'title'       => 'Contact Form',
				'id'          => 'contact_form'
			),

			array(
				'title'       => 'Footer',
				'id'          => 'section_footer'
			)

		),

		'settings'        => array(

			/************ General ************/
			array(
				'label'       => 'Main Logo',
				'id'          => 'logo_main',
				'type'        => 'upload',
				'desc'        => 'Upload logo image used in menu bar.',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'general'
			),
			array(
				'label'       => 'Mobile Logo',
				'id'          => 'logo_mobile',
				'type'        => 'upload',
				'desc'        => 'Upload mobile logo image used in menu bar.',
				'std'         => '',
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
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'general'
			),
			array(
				'label'       => 'Mobile Button Text',
				'id'          => 'mobile_button_text',
				'type'        => 'text',
				'desc'        => 'Choose intro button text',
				'std'         => 'Menu',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'general'
			),


			/************ Contact Form ************/
			array(
				'label'       => 'Address Info',
				'id'          => 'sml_contact_form',
				'type'        => 'tab',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Upload Image Title',
				'id'          => 'address_upload',
				'type'        => 'upload',
				'desc'        => 'Upload image file.',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Add category',
				'id'          => 'add_category',
				'type'        => 'list-item',
				'desc'        => 'Add as much items as you want.',
				'settings'    => array(
						array(
							'label'       => 'Name',
							'id'          => 'name_name',
							'type'        => 'text',
							'desc'        => 'Change name.',
							'std'         => '',
							'rows'        => '',
							'post_type'   => '',
							'taxonomy'    => '',
							'class'       => ''
						),
						array(
							'label'       => 'Info',
							'id'          => 'info_info',
							'type'        => 'text',
							'desc'        => 'Change info.',
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
				'section'     => 'contact_form'
			),


			array(
				'label'       => 'Contact Form',
				'id'          => 'addresss_form_tab_info',
				'type'        => 'tab',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Add Title',
				'id'          => 'address_title_form',
				'type'        => 'text',
				'desc'        => 'Change title.',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Only for PopUp Form',
				'id'          => 'popup_switch',
				'type'        => 'on-off',
				'desc'        => 'Add description and mini image.',
				'std'         => 'off',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Upload Mini Image',
				'id'          => 'popup_switch_mini_img',
				'type'        => 'upload',
				'desc'        => 'Upload mini image file.',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'condition'   => 'popup_switch:is(on)',
				'class'       => '',
				'section'     => 'contact_form'
			),
			array(
				'id'          => 'popup_switch_content',
				'label'       => 'Description PopUp Form',
				'desc'        => '',
				'std'         => '',
				'type'        => 'textarea',
				'rows'        => '10',
				'condition'   => 'popup_switch:is(on)',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Name',
				'id'          => 'name_form',
				'type'        => 'text',
				'desc'        => 'Change name.',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Telephone',
				'id'          => 'telephone',
				'type'        => 'text',
				'desc'        => 'Change name.',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'E-mail',
				'id'          => 'e_mail',
				'type'        => 'text',
				'desc'        => 'Change name.',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Office',
				'id'          => 'branch_office',
				'type'        => 'text',
				'desc'        => 'Change name.',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Textarea Info',
				'id'          => 'textarea_info',
				'type'        => 'text',
				'desc'        => 'Change name.',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Upload Image',
				'id'          => 'img_form',
				'type'        => 'upload',
				'desc'        => 'Upload image file.',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Button Text',
				'id'          => 'btn_text',
				'type'        => 'text',
				'desc'        => 'Change button text.',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'contact_form'
			),



			array(
				'label'       => 'Settings Form',
				'id'          => 'settings_form_tab',
				'type'        => 'tab',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'contact_form'
			),
			array(
				'id'          => 'settings_form_textblock',
				'label'       => 'Textblock',
				'desc'        => 'NOTE: It added a text description of the fields after the form is submitted. As well as the description of the form fields in incoming messages on the mail.',
				'std'         => '',
				'type'        => 'textblock',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'min_max_step'=> '',
				'class'       => '',
				'condition'   => '',
				'section'     => 'contact_form'
			),



			array(
				'label'       => 'Value Form Field',
				'id'          => 'value_form_switch',
				'type'        => 'on-off',
				'desc'        => 'Shows the Block when set to %s.',
				'std'         => 'off',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Site Name',
				'id'          => 'site_name_form',
				'type'        => 'text',
				'desc'        => 'Change name.',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'condition'   => 'value_form_switch:is(on)',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Admin E-mail',
				'id'          => 'value_admin_email',
				'type'        => 'text',
				'desc'        => 'Change admin e-mail.',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'condition'   => 'value_form_switch:is(on)',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Form Subject',
				'id'          => 'value_form_subject',
				'type'        => 'text',
				'desc'        => 'Change form subject.',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'condition'   => 'value_form_switch:is(on)',
				'section'     => 'contact_form'
			),



			array(
				'label'       => 'Show Form Field',
				'id'          => 'settings_form_switch',
				'type'        => 'on-off',
				'desc'        => 'Shows the Block when set to %s.',
				'std'         => 'off',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Name Field 1',
				'id'          => 'settings_name_form',
				'type'        => 'text',
				'desc'        => 'Change name.',
				'std'         => 'Name',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'condition'   => 'settings_form_switch:is(on)',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Name Field 2',
				'id'          => 'settings_telephone',
				'type'        => 'text',
				'desc'        => 'Change name.',
				'std'         => 'Telephone',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'condition'   => 'settings_form_switch:is(on)',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Name Field 3',
				'id'          => 'settings_e_mail',
				'type'        => 'text',
				'desc'        => 'Change name.',
				'std'         => 'E-Mail',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'condition'   => 'settings_form_switch:is(on)',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Name Field 4',
				'id'          => 'settings_branch_office',
				'type'        => 'text',
				'desc'        => 'Change name.',
				'std'         => 'Office',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'condition'   => 'settings_form_switch:is(on)',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Name Field 5',
				'id'          => 'settings_textarea_info',
				'type'        => 'text',
				'desc'        => 'Change name.',
				'std'         => 'Textarea Field',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'condition'   => 'settings_form_switch:is(on)',
				'section'     => 'contact_form'
			),


			array(
				'label'       => 'Show Field: Message sent',
				'id'          => 'set_form_switch',
				'type'        => 'on-off',
				'desc'        => 'Shows the Block when set to %s.',
				'std'         => 'off',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Text Title',
				'id'          => 'set_form_title',
				'type'        => 'text',
				'desc'        => 'Change title.',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'condition'   => 'set_form_switch:is(on)',
				'section'     => 'contact_form'
			),
			array(
				'label'       => 'Text Description',
				'id'          => 'set_form_desc',
				'type'        => 'textarea',
				'desc'        => 'Change description.',
				'std'         => '',
				'rows'        => '7',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'condition'   => 'set_form_switch:is(on)',
				'section'     => 'contact_form'
			),



			/************ Section Footer ************/
			array(
				'label'       => 'Copyright text left',
				'id'          => 'footer_text_left',
				'type'        => 'text',
				'desc'        => 'Change footer text left',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'section_footer'
			),
			array(
				'label'       => 'Copyright text right',
				'id'          => 'footer_text_right',
				'type'        => 'text',
				'desc'        => 'Change footer text right',
				'std'         => '',
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
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'section_footer'
			),
			array(
				'label'       => 'Facebook URL',
				'id'          => 'mt_social_facebook_url',
				'type'        => 'text',
				'desc'        => 'Add Facebook URL. If the field is empty the icon will not be displayed.',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'section_footer'
			),
			array(
				'label'       => 'Twitter URL',
				'id'          => 'mt_social_twitter_url',
				'type'        => 'text',
				'desc'        => 'Add Twitter URL. If the field is empty the icon will not be displayed.',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'section_footer'
			),
			array(
				'label'       => 'Instagram URL',
				'id'          => 'mt_social_instagram_url',
				'type'        => 'text',
				'desc'        => 'Add Instagram URL. If the field is empty the icon will not be displayed.',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'section_footer'
			),
			array(
				'label'       => 'Pinterest URL',
				'id'          => 'mt_social_pinterest_url',
				'type'        => 'text',
				'desc'        => 'Add Pinterest URL. If the field is empty the icon will not be displayed.',
				'std'         => '',
				'rows'        => '',
				'post_type'   => '',
				'taxonomy'    => '',
				'class'       => '',
				'section'     => 'section_footer'
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
