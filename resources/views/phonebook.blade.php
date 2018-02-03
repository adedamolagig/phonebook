<!DOCTYPE html>
<html>
<head>
	<title>PhoneBook App</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div id="app">
		<Myheader></Myheader>
			<div class="container">
				<router-view></router-view>
				
			</div>
		<Myfooter></Myfooter>
	</div>


	<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>