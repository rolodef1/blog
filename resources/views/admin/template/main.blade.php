<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>@yield('title','Default') | Panel de administracion</title>
	<link rel="stylesheet" href="{{asset('plugins/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
	@include('admin.template.partials.nav')
	<section>
		@include('flash::message')
		@include('admin.template.partials.errors')
		@yield('content')
	</section>

	<footer>
		@include('admin.template.partials.footer')
	</footer>
	<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
	<script src="{{asset('plugins/bootstrap/js/bootstrap.min.js')}}"></script>	
</body>
</html>