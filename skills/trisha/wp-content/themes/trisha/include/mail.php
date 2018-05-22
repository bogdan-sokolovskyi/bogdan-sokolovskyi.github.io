<?php

$parse_uri = explode( 'wp-content', $_SERVER['SCRIPT_FILENAME'] );
require( $parse_uri[0] . 'wp-load.php' );


$method = $_SERVER['REQUEST_METHOD'];

//Script Foreach
$c = true;
if ( $method === 'POST' ) {

	$project_name = ot_get_option('mt_project_name');
	$admin_email  = ot_get_option('mt_email_contact');
	$form_subject = ot_get_option('mt_form_subject');

	if ( $admin_email == '' ):
		$admin_email = get_bloginfo('admin_email');
	endif;

	foreach ( $_POST as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
		</tr>
		";
		}
	}
} else if ( $method === 'GET' ) {

	$project_name = ot_get_option('mt_project_name');
	$admin_email  = ot_get_option('mt_email_contact');
	$form_subject = ot_get_option('mt_form_subject');

	if ( $admin_email == '' ):
		$admin_email = get_bloginfo('admin_email');
	endif;

	foreach ( $_GET as $key => $value ) {
		if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
			$message .= "
			" . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
			<td style='padding: 10px; border: #e9e9e9 1px solid;'><b>$key</b></td>
			<td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
		</tr>
		";
		}
	}
}

$message = "<table style='width: 100%;'>$message</table>";

function adopt($text) {
	return '=?UTF-8?B?'.Base64_encode($text).'?=';
}

$headers = "MIME-Version: 1.0" . PHP_EOL .
	"Content-Type: text/html; charset=utf-8" . PHP_EOL .
	'From: '.adopt($project_name).' <'.$admin_email.'>' . PHP_EOL .
	'Reply-To: '.$admin_email.'' . PHP_EOL;

mail($admin_email, adopt($form_subject), $message, $headers );