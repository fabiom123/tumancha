<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <title>Tu Mancha</title>
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta content="Tu mancha fabio merino team" name="description">
    <meta content="Fabio Merino" name="author">
	@include('front.includes.style_login_mancha')
    @yield('styles')
</head>
<body>
	<div class="main-wrapper">
		<div class="page-wrapper full-page">
			<div class="page-content d-flex align-items-center justify-content-center" style="background: #0154a0;">

				@yield('content')

			</div>
		</div>
	</div>
	@include('front.includes.script_login_mancha')
</body>

</html>