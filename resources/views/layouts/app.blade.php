<!doctype html>
<html lang="en">
  <head>
		<meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  @vite('resources/css/app.css')
	
		<title>@yield('title') - Mesa de Partes</title>  

	</head>
  <body class="bg-gray-100 text-gray-800">
	<nav class="flex py-5 bg-black text-white"> 
		@include('navbar')
	</nav>	

		@yield('content')

  </body>
</html>
