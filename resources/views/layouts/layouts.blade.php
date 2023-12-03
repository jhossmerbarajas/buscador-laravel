<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

	<title> @yield('title-app') </title>

</head>
<body>

	<main class="container">
		<section class="row">
			
			{{-- HEADER --}}
			@include('layouts.partials.header')

			{{-- CONTENT --}}
			@yield('content')
			
		</section>
	</main>


</body>
</html>