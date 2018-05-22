<?php

remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_generator');

show_admin_bar(false);

add_theme_support('post-thumbnails');

add_theme_support('menus');

//Добавление <title>:
add_theme_support( 'title-tag' );

//Добавление скриптов и стилей
//functions.php
function my_theme_load_resources() {

	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/libs/bootstrap/css/bootstrap.min.css', array(), '0.1' );
	wp_enqueue_style( 'linea', get_template_directory_uri() . '/libs/linea/styles.css', array(), '0.1' );
	wp_enqueue_style( 'magnific', get_template_directory_uri() . '/libs/magnific-popup/magnific-popup.css', array(), '0.1' );
	
	wp_enqueue_style( 'fonts', get_template_directory_uri() . '/css/fonts.css', array(), '0.1' );
	wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', array(), '0.1' );
	wp_enqueue_style( 'media', get_template_directory_uri() . '/css/media.css', array(), '0.1' );


	wp_enqueue_script( 'jqueryjs', get_template_directory_uri() . '/libs/jquery/jquery-1.11.2.min.js', array(), '0.1', true );
	wp_enqueue_script( 'modernizrjs', get_template_directory_uri() . '/libs/modernizr/modernizr.js', array(), '0.1' );
	wp_enqueue_script( 'bootstrapjs', get_template_directory_uri() . '/libs/bootstrap/js/bootstrap.min.js', array(), '0.1', true );
	wp_enqueue_script( 'freewalljs', get_template_directory_uri() . '/libs/freewall/freewall.js', array(), '0.1', true );
	wp_enqueue_script( 'magnificjs', get_template_directory_uri() . '/libs/magnific-popup/jquery.magnific-popup.min.js', array(), '0.1', true );
	wp_enqueue_script( 'nicescrolljs', get_template_directory_uri() . '/libs/nicescroll/jquery.nicescroll.min.js', array(), '0.1', true );
	wp_enqueue_script( 'lazyjs', get_template_directory_uri() . '/libs/lazyload/jquery.lazyload.min.js', array(), '0.1', true );
	
	wp_enqueue_script( 'commonjs', get_template_directory_uri() . '/js/common.js', array(), '0.1', true );

};
add_action( 'wp_enqueue_scripts', 'my_theme_load_resources' );

//Добавление нового типа записей
//functions.php
add_action( 'init', 'tpl_portfolio' );
function tpl_portfolio() {
	register_post_type( 'portfolio', array(
		'public' => true,
		'labels' => array(
			'name' => 'Портфолио',
			'all_items' => 'Все работы',
			'add_new' => 'Добавить работу',
			'add_new_item' => 'Добавление работы в портфолио'
			),
		'supports' => array( 'title', 'thumbnail' ),
		'taxonomies' => array( 'post_tag', 'category ')
		)
	);
};

// Транслитерация строк.
function str2eng($string) {
		$converter = array(
				'а' => 'a',   'б' => 'b',   'в' => 'v',
				'г' => 'g',   'д' => 'd',   'е' => 'e',
				'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
				'и' => 'i',   'й' => 'y',   'к' => 'k',
				'л' => 'l',   'м' => 'm',   'н' => 'n',
				'о' => 'o',   'п' => 'p',   'р' => 'r',
				'с' => 's',   'т' => 't',   'у' => 'u',
				'ф' => 'f',   'х' => 'h',   'ц' => 'c',
				'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
				'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
				'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
				
				'А' => 'A',   'Б' => 'B',   'В' => 'V',
				'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
				'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
				'И' => 'I',   'Й' => 'Y',   'К' => 'K',
				'Л' => 'L',   'М' => 'M',   'Н' => 'N',
				'О' => 'O',   'П' => 'P',   'Р' => 'R',
				'С' => 'S',   'Т' => 'T',   'У' => 'U',
				'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
				'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
				'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
				'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
		);
		return strtr($string, $converter);
};
function transliterate($str) {
		// переводим в транслит
		$str = str2eng($str, $converter);
		// в нижний регистр
		$str = strtolower($str);
		// заменям все ненужное нам на "-"
		$str = preg_replace('~[^-a-z0-9_]+~u', '-', $str);
		// удаляем начальные и конечные '-'
		$str = trim($str, "-");
		return $str;
}