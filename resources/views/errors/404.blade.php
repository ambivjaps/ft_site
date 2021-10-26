<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<title> Error 404 | FlipTop Battle League </title>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta property="og:title"              content="Error 404 | FlipTop Battle League" />
		<meta property="og:description"        content="The First Filipino Rap Battle League" />
		<meta property="og:image"              content="{{ URL::asset('/img/bg_og.jpg') }}" />
		<meta name="twitter:card"              content="summary_large_image">

		<link rel="icon" href="{{ URL::asset('/favicon.png') }}" type="image/x-icon"/>
		<link rel="icon" href="{{ URL::asset('/favicon-128.png') }}" type="image/x-icon" sizes="128x128">
		<link rel="apple-touch-icon" href="{{ URL::asset('/favicon-152.png') }}" type="image/x-icon" sizes="152×152">
		<link rel="apple-touch-icon-precomposed" href="{{ URL::asset('/favicon-192.png') }}" type="image/x-icon" sizes="192x192">

		<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/style.css') }}?<?php echo time(); ?>">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
	</head>

	<body>
		<div class="container">
			<center>
				<img src="{{ URL::asset('/img/ft_icon.png') }}">
				<h1 class="mt-5"> Error 404 </h1>
				<hr>
				<h4> Page not found. </h4>
				<i> The page you are looking for does not exist, <br> is changed, or currently not available. </i>
				<br><br>
				<a class="btn btn-warning" href="{{ URL::asset('/') }}" role="button">Go back to website</a>
			</center>
		</div>
	</body>

</html>