<?php
/**
 * @package WordPress
 * @subpackage Trisha
 */

show_admin_bar(false);
load_theme_textdomain('match', get_template_directory() . '/languages');
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'title-tag' );

// Add Page Meta Box
load_template( trailingslashit( get_template_directory() ) . 'include/page-meta-box.php' );

// Add Portfolio Custom Post Type
load_template( trailingslashit( get_template_directory() ) . 'include/portfolio-custom-post-type.php' );

// Add Portfolio Meta Boxes
load_template( trailingslashit( get_template_directory() ) . 'include/portfolio-meta-boxes.php' );

/**
 * Optional: set 'ot_show_pages' filter to false.
 * This will hide the settings & documentation pages.
 */
add_filter( 'ot_show_pages', '__return_false' );

/**
 * Optional: set 'ot_show_new_layout' filter to false.
 * This will hide the "New Layout" section on the Theme Options page.
 */
add_filter( 'ot_show_new_layout', '__return_false' );

/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */

load_template( trailingslashit( get_template_directory() ) . 'admin/ot-loader.php' );
load_template( trailingslashit( get_template_directory() ) . 'include/theme-options.php' );


// Enqueue Google Fonts

function mt_fonts() {

	$headers_family = ot_get_option( 'headers_family');

	$protocol = is_ssl() ? 'https' : 'http';
	wp_enqueue_style( 'mt-theme-font', $protocol.'://fonts.googleapis.com/css?family='.str_replace(' ', '+', $headers_family).':300,400,400italic,700,700italic,900' );}

add_action( 'wp_enqueue_scripts', 'mt_fonts' );


//	Register and load front end JS and CSS files

if( !function_exists( 'mt_scripts_init' ) ) {
	function mt_scripts_init() {

		$protocol = is_ssl() ? 'https' : 'http';

		wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap/css/bootstrap.min.css');
		wp_register_style('font-awesome', get_template_directory_uri() .'/css/font-awesome/css/font-awesome.min.css');
		wp_register_style('flexslider-css', get_template_directory_uri() . '/css/flexslider.css');
		wp_register_style('animate', get_template_directory_uri() . '/css/animate.css');
		wp_register_style('style-css', get_stylesheet_directory_uri() . '/style.css');
		wp_register_style('colors-css', get_template_directory_uri() . '/css/colors.php');
		wp_register_style('pretty-css', get_template_directory_uri() . '/js/prettyphoto/css/prettyPhoto.css');

		wp_enqueue_style('bootstrap-css');
		wp_enqueue_style('font-awesome');
		wp_enqueue_style('flexslider-css');
		wp_enqueue_style('animate');
		wp_enqueue_style('style-css');
		wp_enqueue_style('colors-css');
		wp_enqueue_style('pretty-css');


		wp_register_script('bootstrap', get_template_directory_uri() . '/css/bootstrap/js/bootstrap.min.js','','',true);
		wp_register_script('easing', get_template_directory_uri() . '/js/jquery.easing.min.js','','',true);
		wp_register_script('flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js','','',true);
		wp_register_script('isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js','','',true);
		wp_register_script('moderniz', get_template_directory_uri() . '/js/moderniz.min.js','','',true);
		wp_register_script('wow-animate', get_template_directory_uri() . '/js/wow.min.js','','',true);
		wp_register_script('scrollup', get_template_directory_uri() . '/js/scrollup-2.4.1.min.js','','',true);
		wp_register_script('pretty-photo', get_template_directory_uri() . '/js/prettyphoto/js/jquery.prettyPhoto.js','','',true);
		wp_register_script('contactform', get_template_directory_uri() . '/js/contactform.js','','',true);
		wp_register_script('init', get_template_directory_uri() . '/js/init.js','','',true);

		wp_enqueue_script('jquery');
		if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
		wp_enqueue_script('bootstrap');
		wp_enqueue_script('easing');
		wp_enqueue_script('flexslider');
		wp_enqueue_script('isotope');
		wp_enqueue_script('moderniz');
		wp_enqueue_script('wow-animate');
		wp_enqueue_script('scrollup');
		wp_enqueue_script('pretty-photo');
		wp_enqueue_script('contactform');
		wp_enqueue_script('init');

	}

	add_action('wp_enqueue_scripts', 'mt_scripts_init');
}

if ( ! isset( $content_width ) ) $content_width = 940;

// Register Custom Menus
add_action( 'init', 'mt_register_my_menus' );
function mt_register_my_menus() {
	register_nav_menus(
		array(
			'primary_menu' => __( 'Primary Menu' )
		)
	);
}

// Register Post Thumbnail
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(400,300,true);
add_image_size( 'small-img', 400, 300, true );
add_image_size( 'blog-image', 770, 360, true );

// Register Sidebar
if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'id' => 'sidebar-1',
		'name' => 'Sidebar',
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h5 class="widgettitle">',
		'after_title' => '</h5>',
	));
}

// Custom Menu Links
class mt_description_walker extends Walker_Nav_Menu{
	function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0){
		global $wp_query;
		$indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
		$class_names = $value = '';
		$classes = empty( $item->classes ) ? array() : (array) $item->classes;
		$class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
		$class_names = ' class="'. esc_attr( $class_names ) . '"';
		$output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
		$attributes  = ! empty( $item->attr_title ) ? ' title="'  . esc_attr( $item->attr_title ) .'"' : '';
		$attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
		$attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
		if($item->object == 'page')
		{
			$varpost = get_post($item->object_id);
			if(is_home()){
				$attributes .= ' href="#' . $varpost->post_name . '"';
			}else{
				$attributes .= ' href="'.home_url().'/#' . $varpost->post_name . '"';
			}
		}
		else
			$attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';
		$item_output = $args->before;
		$item_output .= '<a'. $attributes .'>';
		$item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID );
		$item_output .= $args->link_after;
		$item_output .= '</a>';
		$item_output .= $args->after;
		$output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args, $id );
	}
}

function mt_set_tags($mt_args) {
	$mt_args = array('smallest' => 14, 'largest' => 14, 'unit' => 'px', 'number' => 20);
	return $mt_args;
}
add_filter('widget_tag_cloud_args','mt_set_tags');

// Excerpt Content
function mt_excerptlength_index($length) { return 30;  }
function mt_excerptmore($more) { return '...'; }
function mt_excerpt($length_callback='', $more_callback='') {
	global $post;
	if(function_exists($length_callback)){
		add_filter('excerpt_length', $length_callback);
	}
	if(function_exists($more_callback)){
		add_filter('excerpt_more', $more_callback);
	}
	$output = get_the_excerpt();
	$output = apply_filters('wptexturize', $output);
	$output = apply_filters('convert_chars', $output);
	$output = '<p>'.$output.'</p>';
	echo $output;
}

//create new comments output
function mt_custom_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment;
	?>
<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
	<div id="comment-<?php comment_ID(); ?>" class="comment-body <?php if ($comment->comment_approved == '0') echo 'pending-comment'; ?> clearfix">
		<div class="comment-details">
			<div class="comment-avatar">
				<?php echo get_avatar($comment, $size = '45'); ?>
			</div><!-- /comment-avatar -->
			<section class="comment-author vcard">
				<?php printf(__('<cite class="author">%s</cite>'), get_comment_author_link()) ?>
				<span class="comment-date"> - <?php echo get_comment_date(); ?></span>
			</section><!-- /comment-meta -->
			<section class="comment-content">
				<div class="comment-text">
					<?php comment_text() ?>
				</div><!-- /comment-text -->
				<div class="reply">
					<?php comment_reply_link(array_merge( $args, array('reply_text' => __('Reply','match'),'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
				</div><!-- /reply -->
			</section><!-- /comment-content -->
		</div><!-- /comment-details -->
	</div><!-- /comment -->
	<?php
} //end my_custom_comments()

function mt_pagenavi( $p = 2 ) { // pages will be show before and after current page
	if ( is_singular() ) return; // don't show in single page
	global $wp_query, $paged;
	$max_page = $wp_query->max_num_pages;
	if ( $max_page == 1 ) return; // don't show when only one page
	if ( empty( $paged ) ) $paged = 1;
	echo '<div class="prev-next">'; // pages
	if ( $paged > $p + 1 ) mt_p_link( 1, 'First' );
	if ( $paged > $p + 2 ) echo '... ';
	for( $i = $paged - $p; $i <= $paged + $p; $i++ ) { // Middle pages
		if ( $i > 0 && $i <= $max_page ) $i == $paged ? print "<span class='page-numbers btn-flat-fill current-page'>{$i}</span> " : mt_p_link( $i );
	}
	if ( $paged < $max_page - $p - 1 ) echo '... ';
	if ( $paged < $max_page - $p ) mt_p_link( $max_page, 'Last' );
	echo '</div><!--end-->';
}
function mt_p_link( $i, $title = '' ) {
	if ( $title == '' ) $title = "Page {$i}";
	echo "<a class='page-numbers btn-flat-fill' href='", esc_html( get_pagenum_link( $i ) ), "' title='{$title}'>{$i}</a> ";
}

//Search only posts
function mt_is_type_page() {
	global $post;
	if ( ($post->post_type == 'page') || ($post->post_type == 'portfolio')) {
		return true;
	} else {
		return false;
	}}

function mt_fix_category_tag($mt_output) {
	$mt_output = str_replace(array('rel="category tag"','rel="category"'),'', $mt_output);

	return $mt_output;
}
add_filter( 'the_category', 'mt_fix_category_tag' );

// Transform HEX color to RGB color
function mt_hex2rgb( $colour ) {

	if ( substr($colour,0,1) == '#' ) {
		$colour = substr( $colour, 1 );
	}
	if ( strlen( $colour ) == 6 ) {
		list( $r, $g, $b ) = array( $colour[0] . $colour[1], $colour[2] . $colour[3], $colour[4] . $colour[5] );
	} elseif ( strlen( $colour ) == 3 ) {
		list( $r, $g, $b ) = array( $colour[0] . $colour[0], $colour[1] . $colour[1], $colour[2] . $colour[2] );
	} else {
		return false;
	}
	$r = hexdec( $r );
	$g = hexdec( $g );
	$b = hexdec( $b );
	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}
?>