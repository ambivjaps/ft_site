@extends('layouts.app')

@section('title')
<title> Event: {{ $event_battle->title }} | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph/videos/battle/{{ $event_battle->slug }}" />
<meta property="og:title"              content="Event: {{ $event_battle->title }} | FlipTop Battle League" />
<meta property="og:description"        content="{{ $event_battle->desc }}" />
<meta property="og:image"              content="{{ Voyager::image( $event_battle->logo ) }}" />
<meta name="twitter:card" 			   content="summary_large_image">
@endsection

@section('content')

	<div class="container">

		<div class="row my-5">
			<div class="col-md-3 mb-3">
				<img src="{{ Voyager::image( $event_battle->logo ) }}" style="width:100%">
			</div>

			<div class="col-md-6">
				<h2> {{ $event_battle->title }} </h2><hr>
				<p> {{ $event_battle->desc }} </p>
				<div class="ft-year"><span class="badge bg-warning"> {{ $event_battle->year }} </div></span>	
			</div>
		</div>

		<div class="row my-5">
			@foreach($videos as $video)
				@if($video->event == $event_battle->title)
  				<div class="col-md-4 my-3">
					<div class="youtube-player" data-id="{{ $video->url }}"></div>
  					<h4> {{ $video->title }} </h4><hr>
  					<p> {{ $video->desc }} </p>
  				</div>

  				@endif

			@endforeach

   		</div>
	</div>

@endsection