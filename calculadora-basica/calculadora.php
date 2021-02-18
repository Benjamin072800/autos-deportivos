<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Calculadora</title>
	</head>
	
	<body>
		<form action="proceso.php" method="post" name="calculadora">
			<label> Coloque los valores: </label><br>
			<input type="text" name="c1"><br><br>
			<input type="text" name="c2"><br><br>
			
			<label>Selecciona la operacion: <br>
				<select name="lista">
					<option value="0">Sumar</option>
					<option value="1">Restar</option>
					<option value="2">Multiplicar</option>
					<option value="3">Dividir</option>
				</select>	
			</label> <br>
			<input type="submit" value="Ver Resultados">
			
		</form>
	</body>
</html>