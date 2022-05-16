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
		<div class="container my-5">
			<center>
				<img src="{{ URL::asset('/img/ft_icon.png') }}">
				<div class="ft-emcee mt-3 mb-4"><h1> ERROR 404 </h1></div>
				<h4> Page not found. </h4>
				<i> The page you are looking for does not exist, <br> is changed, or currently not available. </i>
				<br><br>
				<a class="btn btn-warning mb-5" href="{{ URL::asset('/') }}" role="button">Go back to website</a>
			</center>
		</div>

		<div style="flex-grow:1"></div>
	
			<footer>
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-3">
				<a href="{{ URL::asset('/') }}"><img class="mb-2" src="{{ URL::asset('img/logo.png') }}" alt="FlipTop Battle League" title="FlipTop Battle League"></a>
				<small class="d-block mb-3">First Filipino Rap Battle League</small>
			<p class="d-block mb-3 text-muted">&copy; {{ now()->year }} FlipTop Kru Corp.</p>
			</div>
			<div class="col-6 col-md">
			<h5>Explore</h5>
			<ul class="list-unstyled text-small">
				<li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/articles') }}">Articles</a></li>
				<li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/emcees') }}">Emcees</a></li>
				<li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/videos') }}">Videos</a></li>
				<li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/lyrics') }}">Lyrics</a></li>
			</ul>
			</div>
			<div class="col-6 col-md">
			<h5>Videos</h5>
			<ul class="list-unstyled text-small">
				<li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/videos/battle') }}">Battles</a></li>
				<li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/videos/perf') }}">Performances</a></li>
				<li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/videos/segment') }}">Segments</a></li>
			</ul>
			</div>
			<div class="col-6 col-md">
			<h5>About</h5>
			<ul class="list-unstyled text-small">
				<li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/about') }}">The League</a></li>
				<li class="mb-1"><a class="link-warning text-decoration-none" href="https://tryouts.fliptop.com.ph">Tryouts</a></li>
				<li class="mb-1"><a class="link-warning text-decoration-none" href="{{ URL::asset('/promos') }}">Promos</a></li>
			</ul>
			</div>
			<div class="col-12 col-md mt-2">
			<div class="ft-soc">
					<a href="https://www.facebook.com/fliptop.battleleague" target="_blank"> <i class="fab fa-facebook fa-lg me-2"></i></a>
					<a href="https://www.twitter.com/FlipTop_Battles" target="_blank"> <i class="fab fa-twitter fa-lg me-2"></i></a>
					<a href="https://www.youtube.com/fliptopbattles" target="_blank"> <i class="fab fa-youtube fa-lg me-2"></i></a>
					<a href="https://www.instagram.com/fliptopbattles" target="_blank"> <i class="fab fa-instagram fa-lg me-2"></i></a>
					<a href="https://www.patreon.com/fliptop" target="_blank"> <i class="fab fa-patreon fa-lg me-2"></i></a>
			</div>
					<hr>
					<small class="d-block">Become a partner:</small>
					<h5 class="ft-part">partner@fliptop.com.ph</h5>
			</div>
		</div>
	</div>
	</footer>

	</body>
</html>