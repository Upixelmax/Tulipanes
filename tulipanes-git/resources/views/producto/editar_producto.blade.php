<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="author" content="B8">
	<meta name="description" content="Pagina Los Tulipanes">
	<meta name="keywords" content="Practica, html, desarrollo web">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Tulipanes</title>
	<link rel="stylesheet" href="{{url('assets/css/estilo.css')}}">
	<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:ital,wght@1,300&display=swap" rel="stylesheet"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script> 
</head>
<body>
	<!--===================================
	LOGO y CERRAR SESIÓN
	====================================-->
<header id="nav" class="row">
	<div class="col-3">
		<a href="/home">Los Tulipanes</a>
	</div>
	<div class="col-3"></div>
	<div class="col-3"></div>
	<div class="col-3" >
		<button id="drop"class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
    	{{auth()->user()->username}}
  		</button>
  		 <ul class="dropdown-menu">
	    <li><a class="dropdown-item" href="/logout">Cerrar Sesión</a></li>
	  	</ul>
	</div>
</header>

<div class="row">.</div>

<div class="row">
	<div class="col-1"></div>
	<div class="col-10">
		<body>
			<form action="/producto/editar" method="POST">
				@csrf
				@foreach($producto as $pro)
				<div class="mb-3">
				<label for="formGroupExampleInput" class="form-label">Id Producto</label>
				<input type="number" name="ID_PRODUCTO" value='{{$pro->ID_PRODUCTO}}' readonly class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
				</div>
				<div class="mb-3">
				<label for="formGroupExampleInput" class="form-label">Nombre Producto</label>
				<input type="text" name="NOMBRE_PRODUCTO" value='{{$pro->NOMBRE_PRODUCTO}}'class="form-control" id="formGroupExampleInput" placeholder="Example input placeholder">
				</div>
				<div class="mb-3">
				<label for="formGroupExampleInput" class="form-label">Marca Producto</label>
				<input type="text" name="MARCA_PRODUCTO" value='{{$pro->MARCA_PRODUCTO}}'class="form-control" id="formGroupExampleInput" >
				</div>
				<div class="mb-3">
				<label for="formGroupExampleInput" class="form-label">Categoria Producto</label>
				<input type="number" name="CATEGORIA_PRODUCTO" value='{{$pro->CATEGORIA_PRODUCTO}}' class="form-control" id="formGroupExampleInput" >
				</div>
				<div class="mb-3">
				<label for="formGroupExampleInput" class="form-label">Stock Producto</label>
				<input type="number" name="STOCK_PRODUCTO" value='{{$pro->STOCK_PRODUCTO}}' class="form-control" id="formGroupExampleInput" >
				</div>
				<div class="mb-3">
				<label for="formGroupExampleInput" class="form-label">Precio Producto</label>
				<input type="number" name="PRECIO_PRODUCTO" value='{{$pro->PRECIO_PRODUCTO}}' class="form-control" id="formGroupExampleInput" >
				</div>
					
				@endforeach
				<input id="editar2"type="submit" value="Editar">

			</form>

		</body>
	</div>
	<div class="col-1"></div>

<div class="row">.</div>
<div class="row">.</div>
<div class="row">.</div>
</div>
<footer>Los Tulipanes &#174;</footer>
</html>