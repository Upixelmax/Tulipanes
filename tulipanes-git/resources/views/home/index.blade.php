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
		<a>Los Tulipanes</a>
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
	<aside id="opciones" class="col-3">
		<h3>Administrar</h3>
		@auth
		<button class="administracion" onclick="window.location.href='/departamento'">Departamentos</button><br>
		<button class="administracion" onclick="window.location.href='/categoria'">Categorias</button><br>
		<button class="administracion" onclick="window.location.href='/producto'">Producto</button><br>
		<button class="administracion">4</button><br>
		<button class="administracion">5</button><br>
		<button class="administracion">6</button>
		@endauth
	</aside>
	<aside class="col-8" id="bienvenido">
		<h1>Bienvenid@ {{auth()->user()->username}} </h1>
	</aside>
</div>





<footer>Los Tulipanes &#174;</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>


