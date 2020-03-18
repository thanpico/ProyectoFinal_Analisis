<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<!--generar secciones que despues se sobre escribe-->
	<title>@yield('title', 'My Laravel Store')</title>
</head>
<body>

	@include('store.partials.nav')

	@yield('content')

	@include('store.partials.footer')
</body>
</html>