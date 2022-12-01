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
	<header class="navbar navbar-dark bg-dark">
		<div class="col-1">
		<a class="navbar-brand" href="/home">
		<img src="/tulipanes.png" width="30" height="30" class="d-inline-block align-top" alt="">
		TULIPANES
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
		<a id="Exit" href="/logout">Cerrar Sesión</a>
		</div>
	</header>


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
		<div class="row">.</div>
		<div class="row">.</div>
		<div class="row">.</div>
		<h1 class="text-center">Historial</h1>
		<div class="row">.</div>
		<div class="row">
		<div class="col-md-2"></div>
		<div class="container-fluid">
			<div class="row">
				<div class="container">
					<div class="row">
						<div class="col-md-2"></div>
						<div class="col-md-8">
							<table id="datatable" class="table">
								<thead class="cabezat">
									<td>ID</td>
									<td>PRODUCTO</td>
									<td>CANTIDAD</td>
									<td>DEPARTAMENTO</td>
									<td>ENCARGADO</td>
									<td>FECHA</td>
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
















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
