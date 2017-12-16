<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Plantilla</title>
</head>
<body>
	<div class="container">
		@yield('titulo')
	</div>
	<div class="container">
		@yield('content')
	</div>
	<div class="container">
		@yield('footer')
	</div>
</body>
</html>