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
        <img class="logo" src="/departamento.png" alt="Login">
        <h1> AGREGAR DEPARTAMENTO</h1>

        <form action="/departamento/insertar" method="POST">
        @csrf
            <div class="form-floating mb-3">
                <input type="text" name="NOMBRE_DEPARTAMENTO" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">NOMBRE DEPARTAMENTO</label>
            </div>

            <div class="d-grid gap-2">
                <button type="submit"class="btn btn-primary btn-lg" type="button">AGREGAR</button>
            </div>

        </form>
        
    </div>
</div>