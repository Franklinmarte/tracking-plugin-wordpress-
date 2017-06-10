<?php 
/*
*Plugin name: Mi Primer plugin con shortcodes
*Verzion: 1.0
*Plugin URI: www.cloudnine.com.do
*description: mi primer plugin implementando los shortcodes
*Author: Franklin Marte
*Author URI: www.cloudnine.com.do


*/

$plugin_url = WP_PLUGIN_URL . '/tracking';

include "shortcodes/form.php";



function style_tracking()
{ 
	wp_enqueue_style( 'style_tracking', plugins_url( 'tracking/css/style_tracking.css' ) );
}
add_action('wp_head', 'style_tracking' );
?>