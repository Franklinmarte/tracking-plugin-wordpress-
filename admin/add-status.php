<?php delete_status($_GET['delete_status'], $_GET['delete'])  ?>
<?php 
		if (isset($_POST['new_status'])) {
			if (insert_status($_POST['status'])==True) { echo "registrado";	} else {echo "no registrado";	}
		}
	 ?>
<div id="col-right">
<div class="col-wrap">
<p><strong><?php esc_html_e("Todos los estados") ?></strong></p>
<table class="widefat">
	<thead >
	<tr>
		<th style="text-align: center;" class="row-title"><?php esc_attr_e( 'Titulo de estado' ); ?></th>
	
	</tr>
	</thead>
	<tbody style="text-align: center;">
	<?php view_status_table() ?>
	</tbody>
	<tfoot >
	<tr>
		<th style="text-align: center;" class="row-title"><?php esc_attr_e( 'Titulo de estado' ); ?></th>
		
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
	
<br class="clear">
</div>
</div>