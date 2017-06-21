<div id="col-right">
<div class="col-wrap">
<p><strong>Todos los procesos</strong></p>
<table class="widefat">
	<thead>
	<tr>
		<th class="row-title"><?php esc_attr_e( 'Id de proceso'); ?></th>
		<th><?php esc_attr_e( 'Cliente'); ?></th>
		<th><?php esc_attr_e( 'Estado actual'); ?></th>
		<th><?php esc_attr_e( 'ultima actualizacion'); ?></th>
	</tr>
	</thead>
	<tbody>
	<tr>
		<td class="row-title"><label for="tablecell"><?php esc_attr_e(
					'Table Cell #1,', 'wp_admin_style'
				); ?></label></td>
		<td><?php esc_attr_e( 'Table Cell #2', 'wp_admin_style' ); ?></td>
		<td><?php esc_attr_e( 'recibido' ); ?></td>
	</tr>
	<tr class="alternate">
		<td class="row-title"><label for="tablecell"><?php esc_attr_e(
					'Table Cell #3', 'wp_admin_style'
				); ?> <code>alternate</code></label></td>
		<td><?php esc_attr_e( 'Table Cell #4', 'wp_admin_style' ); ?></td>
		<td><?php esc_attr_e( 'recibido' ); ?></td>
	</tr>
	<tr>
		<td class="row-title"><?php esc_attr_e( 'Table Cell #5,  ', 'wp_admin_style' ); ?></td>
		<td><?php esc_attr_e( 'Table Cell #6', 'wp_admin_style' ); ?></td>
		<td><?php esc_attr_e( 'recibido' ); ?></td>
	</tr>
	<tr class="alt">
		<td class="row-title"><?php esc_attr_e(
				'Table Cell #7, ', 'wp_admin_style'
			); ?> <code>alt</code></td>
		<td><?php esc_attr_e( 'Table Cell #8', 'wp_admin_style' ); ?></td>
		<td><?php esc_attr_e( 'recibido' ); ?></td>
	</tr>
	<tr class="form-invalid">
		<td class="row-title"><?php esc_attr_e(
				'Table Cell #9,', 'wp_admin_style'
			); ?> <code>form-invalid</code></td>
		<td><?php esc_attr_e( 'Table Cell #10', 'wp_admin_style' ); ?></td>
		<td><?php esc_attr_e( 'recibido' ); ?></td>
	</tr>
	</tbody>
	<tfoot>
	<tr>
		<th class="row-title"><?php esc_attr_e( 'Id de proceso'); ?></th>
		<th><?php esc_attr_e( 'Cliente'); ?></th>
		<th><?php esc_attr_e( 'Estado actual'); ?></th>
		<th><?php esc_attr_e( 'ultima actualizacion'); ?></th>
	</tr>
	</tfoot>
</table>


<br class="clear">
</div>
</div>

<div id="col-left">
<div class="col-wrap">

<div class="form-wrap">
	<h2><?php esc_html_e("Agregar nuevo Proceso") ?></h2>
<form action="#tabs-3" method="post" name="add-process">
	<label> <b><?php esc_html_e("Id del proceso") ?></b></label>
	<input type="text" name="id_process" placeholder="<?php esc_html_e("Ejemplo: 1920394839") ?>"  class="regular-text" /><br><br>
	<input type="hidden" name="process_new">
	<label> <b><?php esc_html_e("Nombre del proceso") ?></b></label>
	<input type="text" name="name_process" placeholder="<?php esc_html_e("Ejemplo: Proceso de creacion") ?>"  class="regular-text" /><br><br>
	<label> <b><?php esc_html_e("Cliente del proceso") ?></b></label>
	
	<select name="id_customer">
		<?php view_customer(); ?>	

	</select><br><br>
	<label> <b><?php esc_html_e("Estado de inicio del proceso") ?></b></label>
	<select name="id_status">
		<?php view_status(); ?>	

	</select><br><br>
	<label> <b><?php esc_html_e("Nota publica") ?></b></label>
	<input type="text" name="note_public" placeholder="<?php esc_html_e("Ejemplo: Proceso de creacion") ?>"  class="regular-text" /><br><br>
	<label> <b><?php esc_html_e("Nota Privada ") ?></b></label>
	<input type="text" name="note_private" placeholder="<?php esc_html_e("Ejemplo: Proceso de creacion") ?>"  class="regular-text" /><br><br>
	<input class="button-primary" type="submit" name="add_customer" value="<?php esc_attr_e( 'Agregar' ); ?>" />
</form>
<?php if (isset($_POST["process_new"])): 
		if (insert_new_process($_POST["id_process"],$_POST["name_process"],$_POST["id_customer"], $_POST["id_status"], $_POST["note_public"], $_POST["note_private"])==True) {
			echo "Registrado";
		}else
		{
			echo "No registrado";
		}

?>
		
<?php endif ?>
</div>

<br class="clear">
</div>
</div>