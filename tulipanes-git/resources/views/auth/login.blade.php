
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

</head>

<body>

	<!--===================================
	LOGO
	====================================-->
<header id="nav" class="row">
	<div class="col-12">
		<h1>Los Tulipanes</h1>
	</div>
</header>

<div class="row">.</div>
<div class="row">.</div>
<div class="row">.</div>
<div class="row">.</div>
<div class="row">.</div>

	<!--===================================
	LOGIN
	====================================-->
<section  class="row">
	<div class="col-4"></div>
	<div id="login" class="col-4">
		<h1>Ingreso</h1>
			<form action="/login" method="POST">
			@csrf
				<input type="text" name="username" placeholder="Usuario">
				<input type="password" name="password"placeholder="Contraseña">
				<input type="submit" value="Enviar">
			</form>
	</div>
	<div class="col-4"></div>
</section>

</body>
</html>