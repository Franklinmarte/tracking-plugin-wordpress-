<?php

/* esta shortcode imprimira el formulario y todas las busquedas hechas por el cliente */ 
function search_process( $atts ){
	if (isset($_POST["number_tracking"])) {
		search_number_process($number_tracking);
	}else{
	return "<form action='' method='post' name='form' >
			<input  type='text' name='number_tracking' placheholder='inserte el number'>
			<input class='boton_tracking' type='submit' value='enviar' </from>";
		}
}
add_shortcode( 'search_process', 'search_process' );

?>