<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package inhabitent
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function inhabitent_dynamic_css(){
	if(!is_page_template('page-templates/about.php')){
		return;
	}
	$image = CFS()->get('about_header_image');

	if (!$image){
		return;
	}

	$hero_css=".page-template-about .entry-header{
		height: 100vh;
		background:
			linear-gradient(to bottom, rgba(0,0,0,0.4) 0%, rgba(0,0,0,0.4) 100%), url({$image}) no-repeat center bottom;
		background-size: cover, cover;
		

	}";

	wp_add_inline_style('inhabitent-style',$hero_css);
}
add_action('wp_enqueue_scripts','inhabitent_dynamic_css');



function inhabitent_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'inhabitent_body_classes' );


//change wp logo on wp-admin login page
function inhabitent_login_logo() {
	echo '<style type="text/css">
		#logo h1 a,.login h1 a {background-image:url('.get_stylesheet_directory_uri().'/assets/images/logos/inhabitent-logo-text-dark.svg) !important; 
		height: 84px;
		width: 320px;
		background-size: 320px 84px;}
</style>';
}
add_action( 'login_head', 'inhabitent_login_logo');

//change login logo url to inhabitent website
function inhabitent_logo_url( $url ) {
	return home_url();
}
add_filter( 'login_headerurl', 'inhabitent_logo_url' );
//change login logo url title
function inhabitent_logo_url_attr(){
	return "inhabitent webpage";
}
add_filter('login_headertitle','inhabitent_logo_url_attr');