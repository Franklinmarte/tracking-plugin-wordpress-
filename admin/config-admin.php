<?php 
	
	/* menu del administrador de wordpress*/
	function tracking_menu_admin()
	{

		  add_menu_page(
		    'trancking Form',
		    'tracking',
		    'manage_options',
		    'tracking-form',
		    'tracking_opotion_page'
		  );
}
add_action( 'admin_menu', 'tracking_menu_admin' );

	
function tracking_opotion_page()
{
	require("view-admin.php");

}



	


 ?>