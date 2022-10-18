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
	<div class="col-10">
	<table class="table" >
		<thead class="cabezat">
			<tr>
				<td>ID</td>
				<td>PRODUCTO</td>
				<td>CANTIDAD</td>
                <td>DEPARTAMENTO</td>
                <td>ENCARGADO</td>
                <td>FECHA</td>
			</tr>
		</thead >
		<tbody>
			@foreach($historiales as $historial)
			<tr>
				<td>{{ $historial->ID_HISTORIAL }}</td>
				<td>{{ $historial->NOMBRE_PRODUCTO }}</td>
				<td>{{ $historial->STOCK_HISTORIAL }}</td>
                <td>{{ $historial->NOMBRE_DEPARTAMENTO }}</td>
                <td>{{ $historial->ENCARGADO_HISTORIAL }}</td>
                <td>{{ $historial->FECHA_HISTORIAL }}</td>
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
