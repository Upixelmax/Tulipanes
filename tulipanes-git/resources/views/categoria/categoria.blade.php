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
	<div id="insertar" class="col-4">
		<h3>Insertar categoria</h3>
		<form action="/categoria" method="POST">
			@csrf
			<input type="text" name="NOMBRE_CATEGORIA" id="" placeholder="Nombre">

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
				<td>ACCIONES</td>
			</tr>
		</thead >
		<tbody>
			@foreach($categorias as $categoria)
			<tr>
				<td>{{ $categoria->ID_CATEGORIA }}</td>
				<td>{{ $categoria->NOMBRE_CATEGORIA }}</td>
				<td>
                    <button id="borrar" class="btn btn-round" onclick="window.location.href='/categoria/borrar/{{$categoria->ID_CATEGORIA}}'">Borrar</i></button>
                    <button id="editar" class="btn btn-round" onclick="window.location.href='/categoria/seleccionar/{{$categoria->ID_CATEGORIA}}'">Editar</i></button>
					
				</td>	
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
	<div class="col-1"></div>
	</center>
</div>

<footer>Los Tulipanes &#174;</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>


   
