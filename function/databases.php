<?php 
	
//Create databases clientes

global $tracking_verzion;
$tracking_verzion = 1.0;



// create databases customer
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
//create databases status
function create_databases_status()
{
	global $wpdb;

	$table_name = $wpdb->prefix .  'tk_status';

	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
	id_status INT(11) NOT NULL AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	create_date DATE NOT NULL,
	PRIMARY KEY (id_status) 
	) $charset_collate;";
	require_once( ABSPATH .  'wp-admin/includes/upgrade.php' );
	dbDelta($sql);
}
function create_databases_process()
{
	global $wpdb;

	$table_name = $wpdb->prefix .  'tk_process';

	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
	id_process INT(11) NOT NULL AUTO_INCREMENT,
	name VARCHAR(50) NOT NULL,
	number_process VARCHAR(100) NOT NULL,
	id_customer INT(11) NOT NULL,
	id_status INT(11) NOT NULL,
	note_process VARCHAR(250),
	note_customer VARCHAR(250),
	note_private VARCHAR(250),
	create_date DATE NOT NULL,
	process_update DATE NOT NULL,
	PRIMARY KEY (id_process) 
	) $charset_collate;";
	require_once( ABSPATH .  'wp-admin/includes/upgrade.php' );
	dbDelta($sql);
}



 ?>