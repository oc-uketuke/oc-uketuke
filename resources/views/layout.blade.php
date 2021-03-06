<!DOCTYPE html>
<html lang="jp">
	<head>
		<title></title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      	<!--Import materialize.css-->
      	<link type="text/css" rel="stylesheet" href="{{ asset('assets/lib/materialize/css/materialize.min.css') }}"  />
		<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/common.css') }}" />
		@yield('css')
	</head>
	<body class="grey lighten-4" id="app">
		@include('components/header')
		<main class="container  ">
			@yield('content')
		</main>
		@include('components/footer')
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
		<script src="{{ asset('assets/lib/materialize/js/materialize.min.js') }}"></script>
		<script src="{{ asset('assets/js/bundle.js') }}"></script>
		@yield('js')
	</body>
</html>