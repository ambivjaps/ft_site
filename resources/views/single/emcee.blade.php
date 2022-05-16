@extends('layouts.app')

@section('title')
<title> Emcee: {{ $emcee->name }} | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://fliptop.com.ph/emcees/{{ $emcee->slug }}" />
<meta property="og:title"              content="Emcee: {{ $emcee->name }} | FlipTop Battle League" />
<meta property="og:description"        content="Reppin: {{ $emcee->reppin }} | Division: {{ $emcee->division }}" />
<meta property="og:image"              content="{{ Voyager::image( $emcee->image ) }}" />
<meta name="description"  			   content="Reppin: {{ $emcee->reppin }} | Division: {{ $emcee->division }}" />
<meta name="twitter:card" 			   content="summary_large_image">
<meta name="keywords"                  content="FlipTop, FlipTop Battle League, Filipino Rap Battle, Rap, Rap Battle, Hip-Hop, Filipino" />
@endsection

@section('content')

<div class="container">
	
		<div class="row my-5">
			<div class="col-md-4">
				<img src="{{ Voyager::image( $emcee->image ) }}" style="width:100%" title="{{ $emcee->name }}">
			</div>

			<div class="col-md-8">
				<div class="ft-emcee"> <h1 class="text-uppercase">{{ $emcee->name }}</h1> </div>
				<div class="ft-emcee-details mt-3">
					<h6><i class="fas fa-map-marker-alt"></i> Hometown: {{ $emcee->hometown }}</h6>
					<h6><i class="fas fa-users"></i> Reppin: {{ $emcee->reppin }}</h6>
					<h6><i class="fas fa-map-marked-alt"></i></i> Division: {{ $emcee->division }}</h6>
					<h6><i class="fas fa-sign-in-alt"></i> Year Joined: {{ $emcee->year_joined }}</h6>

					<div class="ft-soc">
		@if($emcee->link_fb != 0) <a href="{{ $emcee->link_fb }}" target="_blank"> <i class="fab fa-facebook fa-lg"></i> </a> @endif
		@if($emcee->link_tw != 0) <a href="{{ $emcee->link_tw }}" target="_blank"> <i class="fab fa-twitter fa-lg"></i> </a> @endif
		@if($emcee->link_ig != 0) <a href="{{ $emcee->link_ig }}" target="_blank"> <i class="fab fa-instagram fa-lg"></i> </a> @endif
		@if($emcee->link_yt != 0) <a href="{{ $emcee->link_yt }}" target="_blank"> <i class="fab fa-youtube fa-lg"></i> </a> @endif
					</div>
				</div><hr>

				<p> {!! $emcee->body !!} </p>

			</div>
		</div>

		<div class="ft-emcee-feature"> <h3> LATEST BATTLES </h3> </div>

		<div class="row my-3 mb-5">
			@foreach($videos as $video)
  				<div class="col-md-4 my-3">
					<div class="youtube-player" data-id="{{ $video->url }}"></div>
  					<h4> {{ $video->title }} </h4>
					<h6><span class="badge bg-light text-dark"> {{ $video->event }} </span></h6><hr>
  					<small> {{ $video->desc }} </small>
  				</div>
			@endforeach
   		</div>

		@if($emcee->others != 0)

		<div class="ft-emcee-feature"> <h3> OTHER MEDIA </h3> </div>

		<div class="row mb-5">
			<div class="ft-body">
				<p> {!! $emcee->others !!} </p>
			</div>
		</div>
		@endif

		<hr>
		<div class="col-md-4 mt-3">
			<div class="ft-feature"> <h3> OTHER EMCEES </h3> </div>
		</div>

		<div class="row mt-3 mb-3">
			@foreach($ad_emcee as $other_emcee)
        	<div class="col-md-3 my-4">
				<a href="/emcees/{{ $other_emcee->slug }}">
          			<div class="emcee-card">
              			<div class="emcee-card-thumbnail">
                			<img src="{{ Voyager::image( $other_emcee->image ) }}" class="card-img-top" title="{{ $other_emcee->name }}">
             		 	</div>
						<div class="emcee-card-body">
							<h4 class="text-uppercase">{{ $other_emcee->name }}</h5>
						</div>
          			</div>  
				</a> 
        	</div>
      		@endforeach
		</div>
	</div>

@endsection