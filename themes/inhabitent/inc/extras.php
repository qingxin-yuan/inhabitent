<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
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
	return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'inhabitent_logo_url' );
//change login logo url title
function inhabitent_logo_url_attr(){
	return "inhabitent webpage";
}
add_filter('login_headertitle','inhabitent_logo_url_attr');