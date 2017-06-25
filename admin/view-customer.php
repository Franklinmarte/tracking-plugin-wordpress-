<?php delete_customer($_GET['delete_customer'], $_GET['delete'])  ?>

<?php if (isset($_POST['new_customer'])): 
			if (insert_customer($_POST['name'], $_POST['last_name'], $_POST['email'])== true) {
				echo "registrado";
			}else
			{
				echo "no registrado";
			}
	 	  endif ?>

<div id="col-right">
<div class="col-wrap">
<p><strong>Todos los clientes</strong></p>
<table class="widefat">
	<thead>
	<tr>
		<th class="row-title"><?php esc_attr_e( 'Nombre de cliente', 'wp_admin_style' ); ?></th>
		<th><?php esc_attr_e( 'Correo', 'wp_admin_style' ); ?></th>
	</tr>
	</thead>
	<tbody>
	
	<?php 
		view_customer_table()
	 ?>
	
	<tfoot>
	<tr>
		<th class="row-title"><?php esc_attr_e( 'Nombre de cliente'); ?></th>
		<th><?php esc_attr_e( 'Correo' ); ?></th>
	</tr>
	</tfoot>
</table>
<br class="clear">
</div>
</div>

<div id="col-left">
<div class="col-wrap">

<div class="form-wrap">
	<h2><?php esc_html_e("Agregar nuevo cliente") ?></h2>
<form action="#tabs-1" method="POST" name="add-customer">
	<label> <b><?php esc_html_e("Nombres*") ?></b></label>
	<input type="text" name="name" placeholder="<?php esc_html_e("Nombres") ?>"  class="regular-text" /><br><br>
	<input type="hidden" name="new_customer">
	<label> <b><?php esc_html_e("Apellidos*") ?></b></label>
	<input type="text" name="last_name" placeholder="<?php esc_html_e("Apellidos") ?>"  class="regular-text" /><br><br>
	<label> <b><?php esc_html_e("Correo*") ?></b></label>
	<input type="text" name="email" placeholder="<?php esc_html_e("Correo") ?>"  class="regular-text" /><br><br>
	
	<input class="button-primary" type="submit" name="add_customer" value="<?php esc_attr_e( 'Agregar' ); ?>" />

	
</form>
</div>

<br class="clear">
</div>
</div>