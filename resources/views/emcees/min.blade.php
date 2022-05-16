@extends('layouts.app')

@section('title')
<title> Emcees: Mindanao | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://fliptop.com.ph/emcees/mindanao" />
<meta property="og:title"              content="Emcees: Mindanao | FlipTop Battle League" />
<meta property="og:description"        content="The First Filipino Rap Battle League" />
<meta property="og:image"              content="{{ URL::asset('/img/bg_og.jpg') }}" />
<meta name="twitter:card" 			   content="summary_large_image">
<meta name="keywords"                  content="FlipTop, FlipTop Battle League, Filipino Rap Battle, Rap, Rap Battle, Hip-Hop, Filipino" />
@endsection

@section('content')

	<div class="container">

		<div class="row mt-5">

		<nav class="category-nav">
      		<ul class="nav nav-pills nav-fill">
        		<li class="nav-item"> <a class="nav-link" href="/emcees"> All </a> </li>
        		<li class="nav-item"> <a class="nav-link" href="/emcees/metro-manila"> Metro Manila </a> </li>
        		<li class="nav-item"> <a class="nav-link" href="/emcees/central-luzon"> Central Luzon </a> </li>
        		<li class="nav-item"> <a class="nav-link" href="/emcees/calabarzon"> Calabarzon </a> </li>
        		<li class="nav-item"> <a class="nav-link" href="/emcees/visayas"> Visayas </a> </li>
        		<li class="nav-item"> <a class="nav-link active" aria-current="page" href="/emcees/mindanao"> Mindanao </a> </li>
      		</ul><hr>
    	</nav>

    	</div>

		<div class="row mt-3 mb-5">
      		@foreach($emcees as $emcee)
        	<div class="col-md-3 my-4">
				<a href="/emcees/{{ $emcee->slug }}">
          			<div class="emcee-card">
              			<div class="emcee-card-thumbnail">
                			<img src="{{ Voyager::image( $emcee->image ) }}" class="card-img-top" title="{{ $emcee->name }}">
             		 	</div>
						<div class="emcee-card-body">
							<h4 class="text-uppercase">{{ $emcee->name }}</h5>
						</div>
          			</div>  
				</a> 
        	</div>
      		@endforeach

		</div>

		<ul class="pagination pagination-sm justify-content-end flex-wrap">
		{!! $emcees->onEachSide(0)->links() !!}
		</ul>
  	</div> 

@endsection