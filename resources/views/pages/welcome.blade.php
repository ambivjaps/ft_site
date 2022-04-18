<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<title> FlipTop Battle League </title>

		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<meta property="og:url"                content="https://www.fliptop.com.ph" />
		<meta property="og:title"              content="FlipTop Battle League" />
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

	<div class="container">
		<center> 
			<img src="{{ URL::asset('/img/logo.png') }}"> 
			<h3> Process of Illumination 7 Tryouts </h3>
			<p> Submissions have ended. Stay tuned for upcoming announcements! </p>
			<strong> #FlipTop2022 #FlipTopPOI7 </strong>
		</center>

		<br><br>

		<center>
			<iframe class="embedvid" width="100%" height="600" src="https://www.youtube.com/embed/o9hrd2WTeAI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</center>

		<hr>
		<div class="row">
			<h3> Latest Battles: </h3>
			@foreach($battles as $battle)
			<div class="col-md-4">
				<iframe width="100%" height="250" src="https://www.youtube.com/embed/{{ $battle->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<h4> {{ $battle->title }} </h4>
				<p> {{ $battle->desc }} | {{ $battle->event }} </p>
			</div>
			@endforeach
		</div>
		<hr>
		<div class="row">
				<h3> The FlipTop Festival: </h3>
			@foreach($perfs as $perf)
			<div class="col-md-4">
				<iframe width="100%" height="250" src="https://www.youtube.com/embed/{{ $perf->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<h4> {{ $perf->title }} </h4>
				<p> {{ $perf->event }} </p>
			</div>
			@endforeach
		</div>
		<hr>
		<div class="row">
				<h3> Segments: </h3>
			@foreach($segments as $segment)
			<div class="col-md-4">
				<iframe width="100%" height="250" src="https://www.youtube.com/embed/{{ $segment->url }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				<h4> {{ $segment->title }} </h4>
				<p> {{ $segment->segment }} </p>
			</div>
			@endforeach
		</div>

		<hr class="mb-5">

		<center>
			<iframe class="embedvid" width="100%" height="600" src="https://www.youtube.com/embed/GKgqOoOPPj4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			
			<div class="ft-about my-5">
				<a class="btn btn-warning" href="https://www.patreon.com/fliptop" target="_blank" role="button"><i class="fab fa-patreon"></i> Support us on Patreon</a>
			</div>
		</center>

	</div>

@include('layouts.footer')