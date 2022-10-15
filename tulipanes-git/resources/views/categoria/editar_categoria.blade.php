<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editar Categoria</title>
</head>
<body>
	<form action="/categoria/editar" method="POST">
		@csrf
		@foreach($categoria as $cat)
		<input type="number" name="ID_CATEGORIA" value='{{$cat->ID_CATEGORIA}}' readonly>
		<input type="text" name="NOMBRE_CATEGORIA"value='{{$cat->NOMBRE_CATEGORIA}}' >
		
		@endforeach
		<input type="submit" value="Editar">

	</form>

</body>