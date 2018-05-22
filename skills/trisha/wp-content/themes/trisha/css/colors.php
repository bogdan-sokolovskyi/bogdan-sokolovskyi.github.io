<?php 
header("Content-type: text/css");

if(file_exists('../../../../wp-load.php')) :
	include '../../../../wp-load.php';
else:
	include '../../../../../wp-load.php';
endif; 
?>

/*==========================================================================================
	
This file contains styles related to the colour scheme of the theme

==========================================================================================*/

<?php $link_hover_primary = ot_get_option( 'link_hover_primary'); ?>
<?php $link_primary = ot_get_option( 'link_primary'); ?>
<?php $body_color = ot_get_option( 'body_color'); ?>
<?php $body_bkg = ot_get_option( 'body_bkg'); ?>
<?php $body_size = ot_get_option( 'body_size'); ?>
<?php $headers_family = ot_get_option( 'headers_family'); ?>
<?php $header_bkg = ot_get_option( 'header_bkg'); ?>

<?php $intro_bkg_img = ot_get_option('intro_bkg_img'); ?>
<?php $intro_text_color = ot_get_option('intro_text_color'); ?>
<?php $intro_bkg_cover = ot_get_option('intro_bkg_cover'); ?>
<?php $intro_bkg_cover_alpha = ot_get_option('intro_bkg_cover_alpha'); ?>
<?php $btn_flat_border = ot_get_option('btn_flat_border'); ?>
<?php $btn_flat_text = ot_get_option('btn_flat_text'); ?>
<?php $btn_flat_hover_text = ot_get_option('btn_flat_hover_text'); ?>
<?php $btn_flat_hover_bkg = ot_get_option('btn_flat_hover_bkg'); ?>
<?php $menu_link_1 = ot_get_option('menu_link_1'); ?>
<?php $menu_link_1_1 = ot_get_option('menu_link_1_1'); ?>
<?php $menu_link_2 = ot_get_option('menu_link_2'); ?>
<?php $menu_link_2_bkg = ot_get_option('menu_link_2_bkg'); ?>
<?php $team_bkg_img = ot_get_option('team_bkg_img'); ?>
<?php $team_bkg_cover = ot_get_option('team_bkg_cover'); ?>
<?php $team_bkg_cover_alpha = ot_get_option('team_bkg_cover_alpha'); ?>
<?php $testimonials_bkg_img = ot_get_option('testimonials_bkg_img'); ?>
<?php $testimonials_bkg_cover = ot_get_option('testimonials_bkg_cover'); ?>
<?php $testimonials_bkg_cover_alpha = ot_get_option('testimonials_bkg_cover_alpha'); ?>
<?php $services_bkg_color = ot_get_option('services_bkg_color'); ?>
<?php $price_bkg_img = ot_get_option('price_bkg_img'); ?>
<?php $price_bkg_cover = ot_get_option('price_bkg_cover'); ?>
<?php $price_bkg_cover_alpha = ot_get_option('price_bkg_cover_alpha'); ?>
<?php $blog_bkg_color = ot_get_option('blog_bkg_color'); ?>
<?php $contact_bkg_color = ot_get_option('contact_bkg_color'); ?>
<?php $contact_field_color = ot_get_option('contact_field_color'); ?>
<?php $contact_field_color_focus = ot_get_option('contact_field_color_focus'); ?>
<?php $contact_field_bkg = ot_get_option('contact_field_bkg'); ?>
<?php $contact_field_bkg_focus = ot_get_option('contact_field_bkg_focus'); ?>
<?php $footer_bkg_color = ot_get_option('footer_bkg_color'); ?>
<?php $custom_css = ot_get_option('custom_css'); ?>

<?php $icon_color = ot_get_option('icon_color'); ?>
<?php $title_sect_color = ot_get_option('title_sect_color'); ?>
<?php $text_price_color = ot_get_option('text_price_color'); ?>

a{color:<?php echo $link_hover_primary;?>;text-decoration:none;}
a:hover{text-decoration:none;
color:<?php echo $link_primary;?>;
}

body{color:<?php echo $body_color;?>;
background:<?php echo $body_bkg;?>;
font-size:<?php echo $body_size;?>;
font-family:'<?php echo $headers_family;?>', Arial, sans-serif;
line-height:20px;
-webkit-font-smoothing: antialiased;
-webkit-text-size-adjust: 100%;
}

h1,h2,h3, h4,h5,h6, .menu{font-family:'<?php echo $headers_family;?>', Arial, sans-serif;}

.nav-bar{background:<?php echo $header_bkg;?>;
-webkit-box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.2);
-moz-box-shadow:    0px 1px 3px rgba(0, 0, 0, 0.2);
box-shadow:         0px 1px 3px rgba(0, 0, 0, 0.2);
}

#intro{background-image:url("<?php echo $intro_bkg_img;?>");
	color: <?php echo $intro_text_color;?>;
}

<?php $cover_color = mt_hex2rgb($intro_bkg_cover); ?>

.bkg-cover{
background-color:rgba(<?php echo $cover_color['red'];?>, <?php echo $cover_color['green'];?>, <?php echo $cover_color['blue'];?>, <?php echo $intro_bkg_cover_alpha;?>);
height:100%;
}

.menu li a{color: <?php echo $intro_text_color;?>;}
.navbar-small .menu li a{color:<?php echo $menu_link_1_1;?>;}
.menu li a:hover, .menu li a:focus, .menu li a.active{color:<?php echo $menu_link_2;?>;
background:<?php echo $menu_link_2_bkg;?>;}

.about-feature h4{color:<?php echo $menu_link_1;?>;}

#team-bkg{background-image:url("<?php echo $team_bkg_img;?>");}

<?php $team_cover_color = mt_hex2rgb($team_bkg_cover); ?>

#team-bkg-cover{background-color:rgba(<?php echo $team_cover_color['red'];?>, <?php echo $team_cover_color['green'];?>, <?php echo $team_cover_color['blue'];?>, <?php echo $team_bkg_cover_alpha;?>);
}

.team-member h4, .flexslider-testimonials{color:<?php echo $intro_text_color;?>;}
.team-member span{color:<?php echo $menu_link_1;?>;}

#portfolio-filter li a, #portfolio-filter li:after{color:<?php echo $menu_link_1_1;?>;}
#portfolio-filter li a:hover,
#portfolio-filter li a:active,
#portfolio-filter li a:focus{color:<?php echo $menu_link_1;?>}
#portfolio-filter li a:focus{  border-bottom: 1px solid <?php echo $menu_link_1;?>;}

.shot-more{background: none repeat scroll 0 0 <?php echo $link_hover_primary;?>;
    color: <?php echo $intro_text_color;?>;}
    
#testimonials-bkg{background-image:url("<?php echo $testimonials_bkg_img;?>");}

<?php $testimonials_cover_color = mt_hex2rgb($testimonials_bkg_cover); ?>

#testimonials-bkg-cover{background-color:rgba(<?php echo $testimonials_cover_color['red'];?>, <?php echo $testimonials_cover_color['green'];?>, <?php echo $testimonials_cover_color['blue'];?>, <?php echo $testimonials_bkg_cover_alpha;?>);
}

.services-bkg{background:<?php echo $services_bkg_color;?>;}
.service h5{color:<?php echo $menu_link_1;?>}

#price-bkg{background-image:url("<?php echo $price_bkg_img;?>");}

<?php $price_cover_color = mt_hex2rgb($price_bkg_cover); ?>

#price-bkg-cover{background-color:rgba(<?php echo $price_cover_color['red'];?>, <?php echo $price_cover_color['green'];?>, <?php echo $price_cover_color['blue'];?>, <?php echo $price_bkg_cover_alpha;?>);
}

.table-column{background:#ffffff;}
.table-column ul{color:<?php echo $text_price_color;?>}
.column-title{background:<?php echo $menu_link_1;?>;
color:<?php echo $intro_text_color;?>;
}
.column-price{background:#f0f0f0;
color:<?php echo $menu_link_1;?>;
}

.blog-bkg{background:<?php echo $blog_bkg_color;?>;}
.blog-more{background:<?php echo $link_hover_primary;?>;}
.blog-info span{color:<?php echo $link_primary;?>}
.blog-info a, .title-blog-post a, .single-title-blog-post, .project-title{color:<?php echo $link_primary;?>}
.blog-info a:hover, .title-blog-post a:hover{color:<?php echo $link_hover_primary;?>}
.blog-info{border-bottom:1px solid #f0f0f0;}

.contact-bkg{background:<?php echo $contact_bkg_color;?>;}

input.comm-field, #message2{border:none;
color:<?php echo $contact_field_color?>;
background:<?php echo $contact_field_bkg?>;}

input.comm-field-post, #comment{border:2px solid #e5e5e5;}

input.comm-field:focus, #message2:focus{color:<?php echo $contact_field_color_focus?>;
background:<?php echo $contact_field_bkg_focus?>;}

.comm-title h5, .widgettitle{color:<?php echo $link_primary;?>;}
#search-string{border:2px solid #e5e5e5;}

.widget_recent_entries ul li a, .widget_categories ul li a, .widget_archive ul li a{color:<?php echo $link_primary;?>;}
.widget_recent_entries ul li a:hover, .widget_categories ul li a:hover, .widget_archive ul li a:hover{color:<?php echo $link_hover_primary;?>;}

.widget_tag_cloud a{background:<?php echo $link_primary;?> ;color:#ffffff;}
.widget_tag_cloud a:hover{background:<?php echo $link_hover_primary;?> ;color:<?php echo $link_primary;?>;}

.output2{border:1px solid #ff0000;}

.comment-body {border-bottom: 1px solid #e5e5e5; }
.comment-author .author a:link, .comment-author .author a:visited, .comment-reply-link, .title-archive { color: <?php echo $link_primary;?>;}
.comment-author .author a:hover, .comment-reply-link:hover, .widget_recent_entries ul li:before, .widget_categories ul li:before, .widget_archive ul li:before { color: <?php echo $link_hover_primary;?>;}

footer{background:<?php echo $footer_bkg_color;?>;}

.flexslider-testimonials .flex-control-nav li a {background:#ffffff;}

.flexslider-project .flex-control-nav li a, .flexslider-testimonials .flex-control-nav li a.flex-active,
.flexslider-testimonials .flex-control-nav li a:hover {background:<?php echo $menu_link_1;?>;}

.flexslider-project .flex-control-nav li a.flex-active,
.flexslider-project .flex-control-nav li a:hover {
	background:<?php echo $link_hover_primary;?>;
}

.project-close span{border:1px solid <?php echo $link_hover_primary;?>;
background:<?php echo $link_hover_primary;?>;
color:#ffffff;
}
.project-close span:hover{
	border:1px solid <?php echo $link_hover_primary;?>;
	color:<?php echo $link_hover_primary;?>;
	background:none;
}

.size-2x,.back-icon{color:<?php echo $icon_color;?>;}
.feature-info h4{color:<?php echo $title_sect_color;?>;}

.btn-style-1 {
	border: 3px solid <?php echo $btn_flat_border;?>;
	background: <?php echo $btn_flat_border;?>;
	color:<?php echo $btn_flat_text;?>;
	}
.btn-style-1:before {	background:<?php echo $btn_flat_hover_bkg;?>;	}
.btn-style-1:hover {	color: <?php echo $btn_flat_hover_text;?>;	}

#scrollUp:hover{background: <?php echo $btn_flat_border;?>;}

.single-page .section-title{color:<?php echo $menu_link_1;?>}

.collapse.in .menu li a {color:<?php echo $menu_link_1_1;?>;}
.collapse.in .menu li a:hover {color:<?php echo $menu_link_2;?>;}

.navbar-default .navbar-toggle {
	border-color: <?php echo $btn_flat_border;?>;
	background-color: <?php echo $btn_flat_hover_bkg;?>;
}
.navbar-default .navbar-toggle .icon-bar{background:<?php echo $menu_link_1;?>;}

<?php echo $custom_css;?>