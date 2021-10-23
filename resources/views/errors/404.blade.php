<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="icon" href="{{ URL::asset('/favicon.png') }}" type="image/x-icon"/>
		<link rel="icon" href="{{ URL::asset('/favicon-128.png') }}" type="image/x-icon" sizes="128x128">
		<link rel="apple-touch-icon" href="{{ URL::asset('/favicon-152.png') }}" type="image/x-icon" sizes="152×152">
		<link rel="apple-touch-icon-precomposed" href="{{ URL::asset('/favicon-192.png') }}" type="image/x-icon" sizes="192x192">

		<link rel="stylesheet" type="text/css" href="{{ URL::asset('/css/style.css') }}?<?php echo time(); ?>">
		<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

	</head>

<title> Error 404 - FlipTop Battle League </title>

	<div class="container-xxl">
		<div class="row my-5">
			<div class="col-md-8">
				<h1> <img width="10%" src="{{ URL::asset('/img/ft_icon.png') }}"> Page not found. </h1>
				<i> The page you are looking for does not exist, is changed, or currently not available. </i>
				<a class="btn btn-warning mt-4" href="{{ URL::asset('/') }}" role="button">Go back to website</a>
			</div>
		</div>
	</div>

@include('layouts.footer')