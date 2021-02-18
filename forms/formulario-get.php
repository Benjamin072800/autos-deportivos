<?php

	
	echo 'Esta es la información introducida en el formulario: <br>';
	
	echo 'Nombre: '.$_GET['nombre'].'<br>';
	echo 'Apellido paterno: '.$_GET['ap'].'<br>';
	echo 'Apellido materno: '.$_GET['am'].'<br>';
	
	echo 'Elige tu fecha de nacimiento: '.$_GET['fecha'].'<br>';
	echo 'Edad: '.$_GET['edad'].'<br>';
	echo 'Sexo: '.$_GET['select'].'<br>';
	echo 'Nacionalidad: '.$_GET['nacionalidad'].'<br>';
	echo 'Estado: '.$_GET['estados'].'<br>';
	echo 'C.U.R.P.: '.$_GET['curp'].'<br>';
	echo 'Tipo de sangre: '.$_GET['sangre'].'<br>';
	echo 'Matricula: '.$_GET['matricula'].'<br>';
	echo 'Programa academico: '.$_GET['programa'].'<br>';
	echo 'N.S.S.I.: '.$_GET['nssi'].'<br>';
	echo 'Nombre del padre: '.$_GET['nom'].'<br>';
	echo 'Nombre de la madre: '.$_GET['nombr'].'<br>';
	
	echo 'Indica tu correo: '.$_GET['correo'].'<br>';
	echo 'Contraseña: '.$_GET['pass'].'<br>';
	
	echo 'Cosas extras'.'<br>';
	
	echo 'Elige un color: '.$_GET['color'].'<br>';
	echo 'Selecciona un archivo: '.$_GET['archivo'].'<br>';
	echo 'Indica el mes: '.$_GET['mes'].'<br>';
	echo 'Selecciona un número: '.$_GET['numero'].'<br>';
	echo 'Esto es un radio button: '.$_GET['radio'].'<br>';
	echo 'Selecciona un número de rango: '.$_GET['rango'].'<br>';
	echo 'Campo de búsqueda: '.$_GET['buscar'].'<br>';
	echo 'Indica tu teléfono: '.$_GET['telefono'].'<br>';
	echo 'Indica la hora: '.$_GET['hora'].'<br>';
	echo 'Indica una URL: '.$_GET['url'].'<br>';
	echo 'Indica la semana: '.$_GET['semana'].'<br>';
	echo 'Acepto condiciones '.$_GET['check'].'<br>';
	
?>