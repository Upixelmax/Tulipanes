








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
        <img class="logo" src="/categoria.png" alt="Login">
        <h1> EDITAR CATEGORIA</h1>

        <form action="/categoria/editar" method="POST">
        @csrf
            @foreach($categoria as $cat)
            
            <div class="form-floating mb-3">
            <input type="number" name="ID_CATEGORIA"value='{{$cat->ID_CATEGORIA}}' readonly class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">ID CATEGORIA</label>
            </div>    


            <div class="form-floating mb-3">
                <input type="text" name="NOMBRE_CATEGORIA" value='{{$cat->NOMBRE_CATEGORIA}}' class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">NOMBRE CATEGORIA</label>
            </div>
                @endforeach
            <div class="d-grid gap-2">
                <button type="submit"class="btn btn-primary btn-lg" type="button">CONFIRMAR</button>
            </div>

        </form>
        <div class="d-grid gap-2">
                <button id ="volver"class="btn btn-primary btn-lg" type="button" onclick="window.location.href='/categoria'">ATRAS</button>
        </div>
		
        
    </div>
</div>























