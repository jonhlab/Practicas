<?php 

$errores = '';
$enviado = '';

if (isset($_POST['submit'])) {
	$nombre = $_POST['nombre'];
	$correo = $_POST['correo'];
	$mensaje = $_POST['mensaje'];

	echo "Tu nombre es : ". $nombre . "<br />";
	echo "Tu correo es: " . $correo . "<br />";
	echo "Tu Mensaje fue: " . $mensaje . "<br />"; 
		if (!empty($nombre)) {
		$nombre = trim($nombre); //quita los espacios! 
		$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
	} else {
		$errores.= 'Por favor ingresa tu nombre <br />';
	}
}

	// require 'index.vista.php';

 ?>