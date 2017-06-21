<div id="col-right">
<div class="col-wrap">
<p><strong><?php esc_html_e("Todos los estados") ?></strong></p>
<table class="widefat">
	<thead >
	<tr>
		<th style="text-align: center;" class="row-title"><?php esc_attr_e( 'Titulo de estado', 'wp_admin_style' ); ?></th>
	
	</tr>
	</thead>
	<tbody style="text-align: center;">
	<tr>
		<td class="row-title"><label for="tablecell"><?php esc_attr_e(
					'Table Cell #1, with label', 'wp_admin_style'
				); ?></label></td>
		
	</tr>
	<tr class="alternate">
		<td class="row-title"><label for="tablecell"><?php esc_attr_e(
					'Table Cell #3, with label and class', 'wp_admin_style'
				); ?> <code>alternate</code></label></td>

	</tr>
	<tr>
		<td class="row-title"><?php esc_attr_e( 'Table Cell #5, without label', 'wp_admin_style' ); ?></td>
	
	</tr>
	<tr class="alt">
		<td class="row-title"><?php esc_attr_e(
				'Table Cell #7, without label and with class', 'wp_admin_style'
			); ?> <code>alt</code></td>
		
	</tr>
	<tr class="form-invalid">
		<td class="row-title"><?php esc_attr_e(
				'Table Cell #9, without label and with class', 'wp_admin_style'
			); ?> <code>form-invalid</code></td>
		
	</tr>
	</tbody>
	<tfoot >
	<tr>
		<th style="text-align: center;" class="row-title"><?php esc_attr_e( 'Table header cell #1', 'wp_admin_style' ); ?></th>
		
	</tr>
	</tfoot>
</table>


<br class="clear">
</div>
</div>

<div id="col-left">
<div class="col-wrap">

<div class="form-wrap">
	<h2><?php esc_html_e("Agregar nuevo estado") ?></h2>
<form action="#tabs-2" method="post" name="add-customer">
	<label> <b><?php esc_html_e("Titulo de estado") ?></b></label>
	<input type="text" name="status" placeholder="<?php esc_html_e("estado") ?>"  class="regular-text" /><br><br>
	<input type="hidden" name="new_status">
	<input class="button-primary" type="submit" name="add_customer" value="<?php esc_attr_e( 'Agregar' ); ?>" />
</form>
</div>
	<?php 
		if (isset($_POST['new_status'])) {
			if (insert_status($_POST['status'])==True) { echo "registrado";	} else {	echo "no registrado";	}
		}
	 ?>
<br class="clear">
</div>
</div>