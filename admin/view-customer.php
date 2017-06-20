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
	<tr>
		<td class="row-title"><label for="tablecell"><?php esc_attr_e(
					'Table Cell #1, with label', 'wp_admin_style'
				); ?></label></td>
		<td><?php esc_attr_e( 'Table Cell #2', 'wp_admin_style' ); ?></td>
	</tr>
	<tr class="alternate">
		<td class="row-title"><label for="tablecell"><?php esc_attr_e(
					'Table Cell #3, with label and class', 'wp_admin_style'
				); ?> <code>alternate</code></label></td>
		<td><?php esc_attr_e( 'Table Cell #4', 'wp_admin_style' ); ?></td>
	</tr>
	<tr>
		<td class="row-title"><?php esc_attr_e( 'Table Cell #5, without label', 'wp_admin_style' ); ?></td>
		<td><?php esc_attr_e( 'Table Cell #6', 'wp_admin_style' ); ?></td>
	</tr>
	<tr class="alt">
		<td class="row-title"><?php esc_attr_e(
				'Table Cell #7, without label and with class', 'wp_admin_style'
			); ?> <code>alt</code></td>
		<td><?php esc_attr_e( 'Table Cell #8', 'wp_admin_style' ); ?></td>
	</tr>
	<tr class="form-invalid">
		<td class="row-title"><?php esc_attr_e(
				'Table Cell #9, without label and with class', 'wp_admin_style'
			); ?> <code>form-invalid</code></td>
		<td><?php esc_attr_e( 'Table Cell #10', 'wp_admin_style' ); ?></td>
	</tr>
	</tbody>
	<tfoot>
	<tr>
		<th class="row-title"><?php esc_attr_e( 'Table header cell #1', 'wp_admin_style' ); ?></th>
		<th><?php esc_attr_e( 'Table header cell #2', 'wp_admin_style' ); ?></th>
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
<form action="" method="post" name="add-customer">
	<label> <b><?php esc_html_e("Nombres") ?></b></label>
	<input type="text" name="name" placeholder="<?php esc_html_e("Nombres") ?>"  class="regular-text" /><br><br>
	<input type="hidden" name="new_customer">
	<label> <b><?php esc_html_e("Apellidos") ?></b></label>
	<input type="text" name="last_name" placeholder="<?php esc_html_e("Apellidos") ?>"  class="regular-text" /><br><br>
	<label> <b><?php esc_html_e("Correo") ?></b></label>
	<input type="text" name="email" placeholder="<?php esc_html_e("Correo") ?>"  class="regular-text" /><br><br>
	
	<input class="button-primary" type="submit" name="add_customer" value="<?php esc_attr_e( 'Agregar' ); ?>" />

	<?php if (isset($_POST['new_customer'])): 
			if (insert_customer($_POST['name'], $_POST['last_name'], $_POST['email'])== true) {
				echo "registrado";
			}else
			{
				echo "no registrado";
			}
	 	  endif ?>
</form>
</div>

<br class="clear">
</div>
</div>