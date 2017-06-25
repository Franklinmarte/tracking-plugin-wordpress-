<?php 
	
	/* menu del administrador de wordpress*/
	function tracking_menu_admin()
	{

		  add_menu_page(
		    'Status Process',
		    'tracking',
		    'manage_options',
		    'status-process',
		    'tracking_opotion_page'
		  );
}
add_action( 'admin_menu', 'tracking_menu_admin' );

	
function tracking_opotion_page()
{
	require("view-admin.php");

}



	


 ?>