<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Aplicación de Login</title>
	<link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">

</head>

<body>
	@include('layouts.partials.navbar')

<main class="container">
	@yield('content')
</main>

<script src="{{ url('assets/js/bootstrap.bundle.min.js')}}"></script>
</body>
</html>