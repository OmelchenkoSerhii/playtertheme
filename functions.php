<?php 
		add_action( 'wp_footer', 'playter_footer_styles' );
		function playter_footer_styles() {
			wp_enqueue_script( 'payter_plyr_script', get_stylesheet_directory_uri() .  '/assets/js/libs/test.js', null, true );
		}
			
	
		add_action( 'wp_enqueue_scripts', 'playter_styles' );
		function playter_styles() {
			//wp_enqueue_style( 'playter_normalize', get_template_directory_uri() . '/assets/css/normalize.min.css' );
			wp_enqueue_style( 'playter_bootstrap_grid', get_template_directory_uri() . '/assets/libs/bootstrap/bootstrap-grid.min.css' );
			
			wp_enqueue_style( 'playter_css', get_template_directory_uri() . '/dist/main.min.css' );
			// wp_enqueue_style( 'playter_select', get_template_directory_uri() . '/dist/selectbox.css' );
			wp_enqueue_style( 'playter_swiper', get_stylesheet_directory_uri() .  '/assets/js/libs/swiper-bundle.min.css' );
			wp_enqueue_style( 'playter_plyr_styles', get_stylesheet_directory_uri() .  '/assets/js/libs/plyr.css' );
			wp_enqueue_style( 'playter_animatecss', get_stylesheet_directory_uri() .  '/assets/js/libs/animate.min.css' );
			wp_enqueue_style( 'style', get_stylesheet_uri() );
		}
		add_action( 'wp_enqueue_scripts', 'playter_scripts', 11 );
		function playter_scripts() {
			//wp_deregister_script( 'jquery' );
			
			
			//wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/assets/libs/jquery/jquery.min.js');
			wp_enqueue_script( 'jquery' );
			
			wp_enqueue_script( 'payter_swiper_script', get_stylesheet_directory_uri() .  '/assets/js/libs/swiper-bundle.min.js', null, true );
			wp_enqueue_script( 'payter_plyr_script', get_stylesheet_directory_uri() .  '/assets/js/libs/plyr.js', null, true );
			wp_enqueue_script( 'payter_wowjs', get_stylesheet_directory_uri() . '/assets/libs/wow.min.js', null, true );
			wp_enqueue_script( 'payter_lottie', get_stylesheet_directory_uri() . '/assets/libs/lottie.min.js', null, true, true );
			

			wp_enqueue_script( 'mainScript', get_stylesheet_directory_uri() . '/assets/js/main.js', array('jquery','payter_lottie'), '5.0', true);
				
			// wp_deregister_script( 'payter_lottiescript');
			// wp_deregister_script( 'payter_lottie');
		}    
		
		if( wp_is_mobile() ) {
			wp_deregister_script( 'hubspot-messages-loader' );
		}

add_filter( 'upload_mimes', 'svg_upload_allow' );


# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $data;
}
function cc_mime_types($mimes) {
    $mimes['json'] = 'application/json';
    return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');
//ACF options page
add_action('acf/init', 'my_acf_op_init');
function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) {

        // Add parent.
        $parent = acf_add_options_page(array(
            'page_title'  => __('Theme Options'),
            'menu_title'  => __('Theme Options'),
            'redirect'    => false,
        ));

        // Add parent.
        $headerSetPage = acf_add_options_page(array(
            'page_title'  => __('Header Options'),
            'menu_title'  => __('Header Options'),
            'parent_slug' => $parent['menu_slug'],
        ));
        // Add parent.
        $footeSetPage = acf_add_options_page(array(
            'page_title'  => __('Footer Options'),
            'menu_title'  => __('Footer Options'),
            'parent_slug' => $parent['menu_slug'],
        ));
		$footerLanding = acf_add_options_page(array(
            'page_title'  => __('Footer Landing Options'),
            'menu_title'  => __('Footer Landing Options'),
            'parent_slug' => $parent['menu_slug'],
        ));
        $headerLanding = acf_add_options_page(array(
            'page_title'  => __('Header Landing Options'),
            'menu_title'  => __('Header Landing Options'),
            'parent_slug' => $parent['menu_slug'],
        ));
        
        $links = acf_add_options_page(array(
            'page_title'  => __('Social links'),
            'menu_title'  => __('Social links'),
            'parent_slug' => $parent['menu_slug'],
        ));
        
    }
}
// Contact Form 7 remove auto added p tags
add_filter('wpcf7_autop_or_not', '__return_false');

add_theme_support( 'menus' );
add_action( 'after_setup_theme', function(){
	register_nav_menus( [
		'header_menu' => 'Menu Header',
		'footer_menu' => 'Menu Footer',
		'footer_landing_menu' => 'Menu Footer Landing'
	] );
} );

add_theme_support( 'post-thumbnails' );

function trim_title_chars($count, $after) {
	$title = get_the_title();
	if (mb_strlen($title) > $count) $title = mb_substr($title,0,$count);
	else $after = '';
	echo $title . $after;
}

function ba_ajax_search(){
	$args = array(
		's' => $_POST['term'],
		'posts_per_page' => 5
	);
	$the_query = new WP_Query($args);
	if ($the_query->have_posts()) {
		while ($the_query->have_posts()) {
			$the_query->the_post();
?>
			<?php include get_template_part( 'template-parts/postIndexTmp', get_post_type() ); ?>
<?php
		}
	} else {
?>
	<div class="result_item">
		<span class="not_found">Nothing was found, please try another request</span>
	</div>
<?php
	}
	exit;
}
add_action('wp_ajax_nopriv_ba_ajax_search','ba_ajax_search');
add_action('wp_ajax_ba_ajax_search','ba_ajax_search');


//исключение страниц из результатов поиска start
function wph_exclude_pages($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','wph_exclude_pages');
//исключение страниц из результатов поиска end



function filter_projects() {
  $catSlug = $_POST['category'];

  $ajaxposts = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => -1,
    'category_name' => $catName,
    'orderby' => 'menu_order', 
    'order' => 'desc',
  ]);
  $response = '';

  if($ajaxposts->have_posts()) {
    while($ajaxposts->have_posts()) : $ajaxposts->the_post();
       ?>
        <?php include ( get_template_directory() . '/template-parts/postIndexTmp.php'); ?>
        <?php
    endwhile;
  } else {
    $response = 'empty';
  }

  echo $response;
  exit;
}
add_action('wp_ajax_filter_projects', 'filter_projects');
add_action('wp_ajax_nopriv_filter_projects', 'filter_projects');


add_shortcode( 'playter_button', 'custom_playter_button' );

function custom_playter_button($atts, $content = null) {
 extract(shortcode_atts(array(
   "href" => 'http://',
   "label" => '',
   "target" => '_self',
 ), $atts));
 return '<a class="button" href="'.$href.'" target="'.$target.'">'.$label.'</a>';
  }

// Remove dashicons

add_action( 'wp_print_styles', 'playter_deregister_styles', 100 );
function playter_deregister_styles()    { 
	if (!is_user_logged_in()) {
		wp_deregister_style( 'dashicons' ); 
		wp_deregister_style( 'wp-block-library' ); 
		
	}
}
function cptui_register_my_cpts_faq() {

	/**
	 * Post Type: FAQs.
	 */

	$labels = [
		"name" => __( "FAQs", "haiilo" ),
		"singular_name" => __( "FAQ", "haiilo" ),
	];

	$args = [
		"label" => __( "FAQs", "haiilo" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "faq", "with_front" => false ],
		"query_var" => true,
		"menu_icon" => "dashicons-welcome-learn-more",
		"supports" => [ "title" ],
		"show_in_graphql" => false,
	];

	register_post_type( "faq", $args );
}

add_action( 'init', 'cptui_register_my_cpts_faq' );

