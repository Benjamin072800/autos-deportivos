<?php

	$nombre = $_GET["nombre"];
	$ap = $_GET["apellido paterno"];
	$am = $_GET["apellido materno"];
	$correo = $_GET["correo"];
	$contraseña = $_GET["contraseña"];
	
	echo 'Esta es la información introducida en el formulario: <br>';
	
	echo "Nombre: ". $nombre ."<br>";
	echo "Apellido paterno: ". $ap ."<br>";
	echo "Apellido materno: ". $am ."<br>";
	echo "Correo: ". $correo ."<br>";
	echo "Contraseña: ".$contraseña ."<br>";
	
?>