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
<link rel="stylesheet" href="/css/home.css">
<link rel="stylesheet" href="/css/login.css">
<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">

<div class="wrapper">
    <div class="body">
        <img class="logo" src="/producto.png" alt="Login">
        <h1> AGREGAR PRODUCTO</h1>

        <form action="/producto/insertar" method="POST">
        @csrf
            <div class="form-floating mb-3">
                <input type="number" name="ID_PRODUCTO" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">ID PRODUCTO</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="NOMBRE_PRODUCTO" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">NOMBRE PRODUCTO</label>
              </div>
              <div class="form-floating mb-3">
                <input type="text" name="MARCA_PRODUCTO" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">MARCA PRODUCTO</label>
              </div>
              <div class="form-floating mb-3">
                <input type="number" name="CATEGORIA_PRODUCTO" class="form-control" id="floatingInput" placeholder="Password">
                <label for="floatingPassword">CATEGORIA PRODUCTO</label>
              </div>
              <div class="form-floating mb-3">
                <input type="number" name="STOCK_PRODUCTO" class="form-control" id="floatingInput" placeholder="Password">
                <label for="floatingPassword">STOCK PRODUCTO</label>
              </div>
              <div class="form-floating mb-3">
                <input type="number" name="PRECIO_PRODUCTO" class="form-control" id="floatingInput" placeholder="Password">
                <label for="floatingPassword">PRECIO PRODUCTO</label>
              </div>

              <div class="d-grid gap-2">
                <button type="submit"class="btn btn-primary btn-lg" type="button">CONFIRMAR</button>

              </div>

        </form>
        <div class="d-grid gap-2">
                <button id ="volver"class="btn btn-primary btn-lg" type="button" onclick="window.location.href='/producto'">ATRAS</button>
        </div>
        
    </div>
</div>
