



<head>
  <meta charset="utf-8">
  <title>Tulipanes</title>
  <base href="/tulipanes.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/x-icon" href="#">
</head>
<div class="wrapper">
<link rel="stylesheet" href="/css/login.css">
<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <div class="body">
        <img class="logo" src="/tulipanes.png" alt="Login">
        <h1> BIENVENIDO</h1>

        <form action="/login" method="POST" >
		@csrf
            <div class="form-floating mb-3">
                <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Usuario</label>
              </div>
              <div class="form-floating mb-3">
                <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Contraseña</label>
              </div>

              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-lg" type="button">INGRESAR</button>

              </div>

        </form>
    </div>
</div>
