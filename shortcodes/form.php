<?php

/* esta shortcode imprimira el formulario y todas las busquedas hechas por el cliente */ 
function form( $atts ){
	if (isset($_POST["number"])) {
		return "hola mundo";
	}else{
	return "<form action='' method='post' name='form' >
			<input  type='text' name='number' placheholder='inserte el number'>
			<input class='boton_tracking' type='submit' value='enviar' </from>";

		}
	
}
add_shortcode( 'form', 'form' );

?>