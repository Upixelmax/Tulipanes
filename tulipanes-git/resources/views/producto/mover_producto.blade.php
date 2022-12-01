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
		  <a id="Exit" href="/logout">Cerrar SesiÃ³n</a>
	</div>
</header>
<link rel="stylesheet" href="/css/home.css">
<link rel="stylesheet" href="/css/login.css">
<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">

<div class="wrapper">
    <div class="body">
        <img class="logo" src="/producto.png" alt="Login">
        <h1> MOVER PRODUCTO</h1>

        <form action="/producto/mover" method="POST">
        @csrf
		@foreach($producto as $pro)
            <div class="form-floating mb-3">
                <input type="number" name="PRODUCTO_INVENTARIO" class="form-control" id="floatingInput" value='{{$pro->ID_PRODUCTO}}'placeholder="name@example.com">
                <label for="floatingInput">ID PRODUCTO</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="NOMBRE_PRODUCTO" class="form-control" id="floatingPassword" value='{{$pro->NOMBRE_PRODUCTO}}' placeholder="Password">
                <label for="floatingPassword">NOMBRE PRODUCTO</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="STOCK_INVENTARIO" class="form-control" id="floatingPassword" placeholder="Debe ser menor o igual al stock del producto">
                <label for="floatingPassword">STOCK A TRANSFERIR</label>
              </div>
              <div class="form-floating mb-3">
                <input type="number" name="DEPARTAMENTO_INVENTARIO" class="form-control" id="floatingInput" placeholder="Password">
                <label for="floatingPassword">DEPARTAMENTO DESTINO</label>
              </div>
              
			  
              <div class="d-grid gap-2">
			  @endforeach
                <button type="submit"class="btn btn-primary btn-lg" type="button">CONFIRMAR</button>

              </div>

        </form>
		<div class="d-grid gap-2">
                <button id ="volver"class="btn btn-primary btn-lg" type="button" onclick="window.location.href='/producto'">ATRAS</button>
        </div>
        
    </div>
</div>