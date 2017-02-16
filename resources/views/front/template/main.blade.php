<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default')</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">	
	<link rel="stylesheet" href="{{asset('css/custom.css')}}">
</head>
<body>
	@include('front.template.partials.nav')
	<section>
		@include('flash::message')
		@include('front.template.partials.errors')
		@yield('content')
	</section>

	<footer>
		@include('front.template.partials.footer')
	</footer>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>		
	@yield('js')
</body>
</html>