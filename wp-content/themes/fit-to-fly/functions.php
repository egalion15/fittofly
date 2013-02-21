<?php
if ( !is_admin() ) {
    function registerJquery() {
        wp_deregister_script( 'jquery' );
        wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.6/jquery.min.js');
    }

    add_action('wp_enqueue_scripts', 'registerJquery');
};


if (function_exists('add_theme_support')) {

    add_theme_support('post-thumbnails' );

    add_theme_support('menus');

}


function custom_excerpt_more( $more ) {
	return '';
}
add_filter( 'excerpt_more', 'custom_excerpt_more' );

?>
