<?php 
	
//Create databases clientes

global $tracking_verzion;
$tracking_verzion = 1.0;




function create_databases_customer() {
	global $wpdb;
	global $tracking_verzion;

	$table_name = $wpdb->prefix .  'tk_customer';
	
	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
		id_customer INT(11) NOT NULL AUTO_INCREMENT,
		name VARCHAR(50) NOT NULL , 
		laste_name VARCHAR(50) NOT NULL , 
		email VARCHAR(50) NOT NULL , 
	    create_date DATE NOT NULL ,
		PRIMARY KEY  (id_customer)
	) $charset_collate;";

	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );

	add_option( 'tracking_verzion', $tracking_verzion );
}





 ?>