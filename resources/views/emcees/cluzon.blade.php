@extends('layouts.app')

@section('title')
<title> Emcees: Central Luzon | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph/emcees/central-luzon" />
<meta property="og:title"              content="Emcees: Central Luzon | FlipTop Battle League" />
<meta property="og:description"        content="The First Filipino Rap Battle League" />
<meta property="og:image"              content="{{ URL::asset('/img/bg_og.jpg') }}" />
<meta name="twitter:card" 			   content="summary_large_image">
@endsection

@section('content')

	<div class="container-xxl">

		<div class="row mt-5">

		<nav class="category-nav">
      		<ul class="nav nav-pills nav-fill">
        		<li class="nav-item"> <a class="nav-link" href="/emcees"> All </a> </li>
        		<li class="nav-item"> <a class="nav-link" href="/emcees/metro-manila"> Metro Manila </a> </li>
        		<li class="nav-item"> <a class="nav-link active" aria-current="page" href="/emcees/central-luzon"> Central Luzon </a> </li>
        		<li class="nav-item"> <a class="nav-link" href="/emcees/calabarzon"> Calabarzon </a> </li>
        		<li class="nav-item"> <a class="nav-link" href="/emcees/visayas"> Visayas </a> </li>
        		<li class="nav-item"> <a class="nav-link" href="/emcees/mindanao"> Mindanao </a> </li>
      		</ul><hr>
    	</nav>

    	</div>

		<div class="row mt-3 mb-5">
      		@foreach($emcees as $emcee)
	      		@if($emcee->division == "Central Luzon")
	        	<div class="col-md-3 my-4">

	          	<a href="/emcees/{{ $emcee->slug }}">
	            <img src="{{ Voyager::image( $emcee->image ) }}" style="width:100%" title="{{ $emcee->name }}">

	            <div class="ft-emcee"><h4 class="text-uppercase">{{ $emcee->name }}</h4></div>
	          	</a>
	          	</div>
    			@endif
      	@endforeach

	</div>
  </div> 

@endsection