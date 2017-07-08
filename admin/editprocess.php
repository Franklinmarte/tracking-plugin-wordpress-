<?php 
	if (isset($_POST["id"])) {
		if (edit_process_status($_POST["id"], $_POST["id_status"], "si") == true) {
			echo "Registrado";
			
		}
		else
		{
			echo "no registrado";echo $_POST["id_status"]; echo $_POST["id_process"];
		}
	}
 ?>


<h2><?php esc_attr_e( 'Editar proceso' ); ?></h2>

<div class="wrap">

	<!--<h1><?php esc_attr_e( 'Edit Proceso', 'wp_admin_style' ); ?></h1>-->
	<div id="col-container">

		<div id="col-right">

			<div class="col-wrap">
				<?php esc_attr_e( 'Content Header', 'wp_admin_style' ); ?>
				<div class="inside">
					<p><?php esc_attr_e( 'WordPress started in 2003 with a single bit of code to enhance the typography of everyday writing and with fewer users than you can count on your fingers and toes. Since then it has grown to be the largest self-hosted blogging tool in the world, used on millions of sites and seen by tens of millions of people every day.', 'wp_admin_style' ); ?></p>
				</div>

			</div>
			<!-- /col-wrap -->

		</div>
		<!-- /col-right -->

		<div id="col-left">

			<div class="col-wrap">
			
				<div class="inside">
				<?php $process=  process_by_id($_GET["editprocess"]);
				foreach ($process as $proces ) {?>
					
					<form action="admin.php?page=status-process&editprocess=<?php echo $_GET['editprocess']; ?>" method="post" name="add-process">
						<input type="hidden" name="id" value="<?php echo $proces->id_process; ?>">
						<label> <b><?php esc_html_e("Id del proceso") ?></b></label>
						<input type="text" name="id_process" value="<?php echo $proces->number_process ?>" class="regular-text" disabled /><br><br>

						<input type="hidden" name="process_new">
						<label> <b><?php esc_html_e("Nombre del proceso") ?></b></label>
						<input type="text" name="name_process" value="<?php echo $proces->name ?>"   class="regular-text" /><br><br>
						<label> <b><?php esc_html_e("Cliente del proceso") ?></b></label>
						
						<select name="id_customer">
							<?php view_customer(); ?>	

						</select><br><br>
						<label> <b><?php esc_html_e("Estado de inicio del proceso") ?></b></label><br>
						<select name="id_status">
							<?php view_status(); ?>	

						</select><br><br>
						<label> <b><?php esc_html_e("Nota publica") ?></b></label>
						<input type="text" name="note_public" value="<?php echo $proces->note_process ?>"  class="regular-text" /><br><br>
						<label> <b><?php esc_html_e("Nota Privada ") ?></b></label>
						<input type="text" name="note_private" value="<?php echo $proces->note_private ?>"  class="regular-text" /><br><br>
						<input class="button-primary" type="submit" name="add_customer" value="<?php esc_attr_e( 'Editar' ); ?>" />
					</form>
					<?php
				}
				
				?>
				</div>
			</div>
			<!-- /col-wrap -->

		</div>
		<!-- /col-left -->

	</div>
	<!-- /col-container -->

</div> <!-- .wrap -->