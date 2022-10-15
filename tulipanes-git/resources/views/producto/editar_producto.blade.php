<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Editar Producto</title>
</head>
<body>
	<form action="/producto/editar" method="POST">
		@csrf
		@foreach($producto as $pro)
		<input type="number" name="ID_PRODUCTO" value='{{$pro->ID_PRODUCTO}}' readonly>
		<input type="text" name="NOMBRE_PRODUCTO"value='{{$pro->NOMBRE_PRODUCTO}}' >
        <input type="number" name="CATEGORIA_PRODUCTO"value='{{$pro->CATEGORIA_PRODUCTO}}' >
        <input type="number" name="STOCK_PRODUCTO"value='{{$pro->STOCK_PRODUCTO}}' >
        <input type="number" name="PRECIO_PRODUCTO"value='{{$pro->PRECIO_PRODUCTO}}' >
		
		@endforeach
		<input type="submit" value="Editar">

	</form>

</body>