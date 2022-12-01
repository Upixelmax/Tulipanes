<!DOCTYPE html>
<html>
<head>

	<title>Tulipanes</title>
	<link rel="stylesheet" href="{{url('assets/css/estilo.css')}}">
	<link rel="stylesheet" href="/css/home.css">

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
	   <h1 class="text-center">Producto</h1>
		<div class="container">
			<div class="row">
			<div class="col-md-2" ></div>
				
				<div class="col-md-12">
					<div class="mb-4">
						<td><button id="Agregar" class="btn btn-light" onclick="window.location.href='/producto/insertar'">Agregar Producto</i></button></td>
					</div>
					<table id="datatable" class="table" >
						<thead class="cabezat">
							<th>Codigo</th>
							<th>Nombre</th>
							<th>Marca</th>
							<th>Categoria</th>
							<th>stock</th>
							<th>Precio</th>
							<td>ACCIONES</td>
							<tbody>
							@foreach($productos as $producto)
								<tr>
									<td>{{ $producto->ID_PRODUCTO }}</td>
									<td>{{ $producto->NOMBRE_PRODUCTO }}</td>
									<td>{{ $producto->MARCA_PRODUCTO }}</td>
									<td>{{ $producto->CATEGORIA_PRODUCTO }}</td>
									<td>{{ $producto->STOCK_PRODUCTO }}</td>
									<td>{{ $producto->PRECIO_PRODUCTO }}</td>
									<td><button id="borrar" class="btn btn-round" onclick="window.location.href='/producto/borrar/{{$producto->ID_PRODUCTO}}'">Borrar</i></button>
								<button id="editar" class="btn btn-round" onclick="window.location.href='/producto/seleccionar/{{$producto->ID_PRODUCTO}}'">Editar</i></button>
								<button id="mover" class="btn btn-round" onclick="window.location.href='/producto/seleccionar_mover/{{$producto->ID_PRODUCTO}}'">Mover</i></button></td>
								</tr>
							@endforeach
							</tbody>
						</thead>
					</table>
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
	<div class="col-1"></div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
  </html>
























<div class="row">.</div>
<div class="row">.</div>
<div class="row">.</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>
