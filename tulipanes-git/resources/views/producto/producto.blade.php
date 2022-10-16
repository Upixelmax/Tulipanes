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
<div class="row">.</div>
<div class="row">.</div>
<div class="row">
	<div class="col-1"></div>
	<div id="idepartamento" class="col-4">
		<h3>Insertar producto</h3>
		<form action="/producto" method="POST">
			@csrf
			<input type="number" name="ID_PRODUCTO" id="" placeholder="ID">
            <input type="text" name="NOMBRE_PRODUCTO" id="" placeholder="NOMBRE">
			<input type="text" name="MARCA_PRODUCTO" id="" placeholder="MARCA">
            <input type="number" name="CATEGORIA_PRODUCTO" id="" placeholder="CATEGORIA">
            <input type="number" name="STOCK_PRODUCTO" id="" placeholder="STOCK">
            <input type="number" name="PRECIO_PRODUCTO" id="" placeholder="PRECIO">

			<input type="submit" value="Insertar">
		</form>
	</div>
	<div class="col-1"></div>
</div>
<div class="row">.</div>
<div class="row">.</div>
<div class="row">.</div>
<div class="row">
	<div class="col-1"></div>
	<div class="col-10">
	<table class="table" >
		<thead class="cabezat">
			<tr>
				<td>ID</td>
				<td>NOMBRE</td>
				<td>MARCA</td>
                <td>CATEGORIA</td>
                <td>STOCK</td>
                <td>PRECIO</td>
				<td>ACCIONES</td>
			</tr>
		</thead >
		<tbody>
			@foreach($productos as $producto)
			<tr>
				<td>{{ $producto->ID_PRODUCTO }}</td>
				<td>{{ $producto->NOMBRE_PRODUCTO }}</td>
				<td>{{ $producto->MARCA_PRODUCTO }}</td>
                <td>{{ $producto->CATEGORIA_PRODUCTO }}</td>
                <td>{{ $producto->STOCK_PRODUCTO }}</td>
                <td>{{ $producto->PRECIO_PRODUCTO }}</td>
				<td>
                    <button id="borrar" class="btn btn-round" onclick="window.location.href='/producto/borrar/{{$producto->ID_PRODUCTO}}'">Borrar</i></button>
                    <button id="editar" class="btn btn-round" onclick="window.location.href='/producto/seleccionar/{{$producto->ID_PRODUCTO}}'">Editar</i></button>
					<button id="mover" class="btn btn-round" onclick="window.location.href='/producto/seleccionar_mover/{{$producto->ID_PRODUCTO}}'">Mover</i></button>
				</td>	
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	<div class="col-1"></div>
	</center>
</div>


	<!--===================================
	DEPARTAMENTOSDGS
	====================================-->




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
