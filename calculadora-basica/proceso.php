<?php
echo "El resultado es:";
$operacion = $_POST['lista'];
	
switch($operacion)
{
	
	
	case 0:
	echo $_POST['c1'] + $_POST['c2'];
	break;
	case 1:
	echo $_POST['c1'] - $_POST['c2'];
	break;
	case 2:
	echo $_POST['c1'] * $_POST['c2'];
	break;
	case 3:
	echo $_POST['c1'] / $_POST['c2'];
	break;
	
	default: "no se ha podido realizar la operacion";
}

?>