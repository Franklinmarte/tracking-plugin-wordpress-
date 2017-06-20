<?php 
/*
*Plugin name: Tracking Process
*Verzion: 1.0
*Plugin URI: www.cloudnine.com.do
*description: mi primer plugin implementando los shortcodes
*Author: Franklin Marte
*Author URI: www.cloudnine.com.do


*/
  

$plugin_url = WP_PLUGIN_URL . '/tracking';

include 'shortcodes/form.php';
include 'admin/config-admin.php';
include 'function/databases.php';


function style_tracking()
{ 
	wp_enqueue_style( 'style_tracking', plugins_url( 'tracking/css/style_tracking.css' ) );
}
function script_jquery_ui()
{
	wp_enqueue_script( 'script_jquery_ui', plugins_url('tracking/js/jquery-ui.min.js') ); 
}
add_action( 'wp_head', 'style_tracking' );
add_action( 'admin_head', 'script_jquery_ui' );


register_activation_hook( __FILE__, 'create_databases_customer' );
register_activation_hook( __FILE__, 'create_databases_status' );
register_activation_hook( __FILE__, 'create_databases_process' );


?>