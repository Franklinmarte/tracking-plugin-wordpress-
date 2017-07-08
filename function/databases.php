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
		last_name VARCHAR(50) NOT NULL , 
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
//create databases estatus process
function create_databases_process_estatus()
{
	global $wpdb;

	$table_name = $wpdb->prefix .  'tk_process_estatus';

	$charset_collate = $wpdb->get_charset_collate();

	$sql = "CREATE TABLE $table_name (
	id_status INT(11) NOT NULL AUTO_INCREMENT,
	process_id INT(11) NOT NULL,
	estatus VARCHAR(50) NOT NULL,
	estatus_internal VARCHAR(2),
	create_date DATE NOT NULL,
	PRIMARY KEY (id_status) 
	) $charset_collate;";
	require_once( ABSPATH .  'wp-admin/includes/upgrade.php' );
	dbDelta($sql);
}
//create databases process
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
//add new customer
function insert_customer($name,$last_name,$email)
{
	global $wpdb;
	//We validate that name, surname and mail are not empty
	if (!$name=='' and !$last_name=='' and !$email=='') {
		$date = array
		(
			'id_customer' => NULL,
			'name' => $name,
			'last_name' => $last_name,
			'email' => $email,
			'create_date' => current_time('mysql', 1)
		);
		if ($wpdb->insert('wp_tk_customer', $date)==True) { return True; }
	
	}else { return False; }
}
//insert new status
function insert_status($status)
{
	global $wpdb;
	if (!$status == '') {
		$date = array
		(
			'id_status' => NULL,
			'name' => $status,
			'create_date' => current_time('mysql',1)
		);
		if ($wpdb->insert('wp_tk_status', $date)==True) { return True; }
		else{ return False;}
	}
}
//view all customer
function view_customer()
{
	global $wpdb;
    $myrows = array();
    
    $myrows = $wpdb->get_results( "SELECT * FROM wp_tk_customer" );
    foreach ($myrows as $myrow) {
         echo '<option value="'.$myrow->id_customer.'">'.$myrow->name.' '.$myrow->last_name.'</option>';
     }
}
//view all status
function view_status()
{
	global $wpdb;
    $myrows = array();
    
    $myrows = $wpdb->get_results( "SELECT * FROM wp_tk_status" );
    foreach ($myrows as $myrow) {
          echo '<option value="'.$myrow->id_status.'" '.selected( $value, $myrow->id_status, TRUE ).'>'.$myrow->name.' </option>';
	}
}

function insert_new_process($tracking, $name_process, $id_customer, $status_init, $note_process, $note_private)
{
	global $wpdb;

	$data = array
	(
		'id_process' => NULL,
		'name' => $name_process,
		'number_process' => $tracking,
		'id_customer' => $id_customer,
		'id_status' => $status_init,
		'note_process' => $note_process,
		'note_customer' => '',
		'note_private' => $note_private,
		'create_date' => current_time('mysql', 1),
		'process_update' => current_time('mysql', 1)
	);

	if ($wpdb->insert('wp_tk_process', $data)==True) {return True;	}
	else{return False;}

}
function view_customer_table()
{
	global $wpdb;
	$customers = array();

	$customers =$wpdb->get_results( "SELECT * FROM wp_tk_customer" );
	foreach ($customers as $customer) {
		echo "<tr>";
		echo "<td class='row-title'>";
		echo "<label for='tablecell'>";
		esc_attr_e($customer->name);
		echo "<br>";
		
		echo "<span class='row-actions'  style='color:#0073aa'>".esc_html__("Editar")." <span>";
		echo "<a href='admin.php?page=status-process&delete_customer=".$customer->id_customer."&delete=true#tabs-1'";
		echo "<span class='row-actions'  style='color:#f00'   > Eliminar<span>";
		echo "</a>";
		echo "</label>";
		echo "<td class=''>";
		
		esc_attr_e($customer->email);	
		echo "<td>";
		echo "<tr>";
	}
}
function view_status_table()
{
	global $wpdb;
	$status = array();

	$status =$wpdb->get_results( "SELECT * FROM wp_tk_status" );
	foreach ($status as $statu) {
		echo "<tr>";
		echo "<td class='row-title'>";
		echo "<label for=''>";
		esc_attr_e($statu->name);
		echo "<br>";
		echo "<a href='admin.php?page=status-process&delete_status=".$statu->id_status."&delete=true#tabs-2'";
		echo "<span class='row-actions'  style='color:#f00'   > Eliminar<span>";
		echo "</label>";
		echo "<tr>";
	}
}
function view_process_table()
{
	global $wpdb;
	$process = array();
	$status = array();

	$process =$wpdb->get_results( "SELECT * FROM wp_tk_process" );
	foreach ($process as $proces) {
		echo "<tr>";
		echo "<td class='row-title'>";
		echo "<label for=''>";
		esc_attr_e($proces->number_process);
		echo "</label>";
		echo "<br>";
		echo "<a href='admin.php?page=status-process&editprocess=".$proces->id_process."'><span class='row-actions'  style='color:#0073aa'>".esc_html__("Editar")." <span></a>";
		echo "<a href='admin.php?page=status-process&delete_process=".$proces->id_process."&delete=true#tabs-3'";
		echo "<span class='row-actions'  style='color:#f00'   > ".esc_html__("Eliminar")."<span>";
		echo "</td>";
		echo "<td>";
		echo esc_attr_e($proces->name);
		echo "</td>";
		echo "<td>";
		$status = $wpdb->get_results("SELECT * FROM wp_tk_status WHERE id_status = ".$proces->id_status."");
		foreach ($status as $statu ) {
			echo $statu->name;
		}
		echo "</td>";
		echo "<tr>";
	}
}
function delete_customer($id, $validate)
{
	global $wpdb;
	if ($validate==true) {
		$wpdb->delete('wp_tk_customer', array('id_customer' => $id ));
			
		
	}
}
function delete_status($id, $validate)
{
	global $wpdb;
	if ($validate==true) {
		$wpdb->delete('wp_tk_status', array('id_status' => $id ));
	}
}
function delete_process($id, $validate)
{
	global $wpdb;
	if ($validate==true) {
		$wpdb->delete('wp_tk_process', array('id_process' => $id ));
	}
}

function process_by_id($id)
{
	global $wpdb;

		$process = $wpdb->get_results("SELECT * FROM wp_tk_process WHERE id_process = $id LIMIT 1");

		return $process;
}

function edit_process_status($process_id, $status, $internal_process)
{
	global $wpdb;

	$status = array(
		'id_status' => NULL,
		'process_id' => $process_id,
		'estatus' => $status,
		'create_date' => current_time('mysql', 1)
		);
	if ($wpdb->insert('wp_tk_process_estatus', $status)==true) {
		return true;
	}
	else
	{
		return false;
	}

}
?>

