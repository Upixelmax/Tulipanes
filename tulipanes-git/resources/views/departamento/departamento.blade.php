<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Tulipanes</title>
  <base href="/tulipanes.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="#">
</head>
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
<header class="navbar navbar-dark bg-dark">
    <div class="col-1">
        <a class="navbar-brand" href="/home">
            <img src="/tulipanes.png" width="30" height="30" class="d-inline-block align-top" alt="">TULIPANES
        </a>
	</div>
    <div class="col-1"></div>
    <div class="col-1"></div>
    <div class="col-1"></div>
    <div class="col-1"></div>
    <div class="col-1"></div>
	<div class="col-1"></div>
    <div class="col-1"></div>
    <div class="col-1"></div>
    <div class="col-1"></div>
	<div class="col-1"></div>
	<div class="col-1" >
		<a class="navbar-brand" id="Exit" href="/logout">Cerrar Sesión</a>
	</div>
</header>





<div class="row">.</div>
<div class="row">.</div>
<div class="row">.</div>



<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.css"/>

    <title>Tabla Crud</title>
  </head>
  <body>
    <h1 class="text-center">Departamento</h1>
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-2 mb-3"><button id="Agregar" class="btn btn-round" onclick="window.location.href='/departamento/insertar'">Agregar Departamento</i></button></div>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                        <table id="datatable" class="table">
                            <thead class="cabezat">
                                <th>Codigo</th>
                                <th>Nombre</th>
								<td>ACCIONES</td>
                                <tbody>
								@foreach($departamentos as $departamento)
                                    <tr>
									<td>{{ $departamento->ID_DEPARTAMENTO }}</td>
									<td>{{ $departamento->NOMBRE_DEPARTAMENTO }}</td>
                                    <td>
                                    <button id="borrar" class="btn btn-round" onclick="window.location.href='/departamento/borrar/{{$departamento->ID_DEPARTAMENTO }}'">Borrar</i></button>
					                <button id="editar" class="btn btn-round" onclick="window.location.href='/departamento/seleccionar/{{$departamento->ID_DEPARTAMENTO}}'">Editar</i></button>
                                    </td>
                    
                                    </tr>
									@endforeach
                                </tbody>
                            </thead>
                        </table>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs5/jq-3.6.0/dt-1.13.1/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $('#datatable').DataTable({})
    </script>

  </body>
</html>

<div class="row">.</div>
<div class="row">.</div>






