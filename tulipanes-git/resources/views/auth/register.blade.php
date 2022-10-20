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
			<form action="/register" method="POST">
				@csrf
				<div class="mb-3">
				<label for="formGroupExampleInput" class="form-label">Nombre Usuario</label>
				<input type="text" name="username"class="form-control" id="formGroupExampleInput">
				</div>
				<div class="mb-3">
				<label for="formGroupExampleInput" class="form-label">Email</label>
				<input type="text" name="email" class="form-control" id="formGroupExampleInput">
				</div>
				<div class="mb-3">
				<label for="formGroupExampleInput" class="form-label">Contraseña</label>
				<input type="password" name="password"  class="form-control" id="formGroupExampleInput" >
				</div>
				<div class="mb-3">
				<label for="formGroupExampleInput" class="form-label">Confirmar Contraseña</label>
				<input type="password" name="password_confirmation"class="form-control" id="formGroupExampleInput" >
				</div>
				<input id="editar2"type="submit" value="Registrar">
			</form>

		</body>
	</div>
	<div class="col-1"></div>
	
</div>
<footer>Los Tulipanes &#174;</footer>
</html>