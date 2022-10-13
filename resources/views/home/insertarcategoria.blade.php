<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Categoria</title>
</head>
<body>
	<form action="/categoria" method="POST">
		@csrf
		Id
		<input type="number" name="ID_CATEGORIA" id="">

		Nombre
		<input type="text" name="NOMBRE_CATEGORIA" id="">

		<input type="submit" value="Insertar">
	</form>
</body>
</html>