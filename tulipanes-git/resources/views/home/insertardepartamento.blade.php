<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Departamento</title>
</head>
<body>

	<form action="/departamento" method="POST">
		@csrf
		Id
		<input type="number" name="ID_DEPARTAMENTO" id="">

		Nombre
		<input type="text" name="NOMBRE_DEPARTAMENTO" id="">

		<input type="submit" value="Insertar">
	</form>

</body>
</html>



