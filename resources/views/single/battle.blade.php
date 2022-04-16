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

	<div class="ft-event p-5 mb-3">
		<div class="container-fluid py-2">
			<div class="row">
				<div class="col-md-3 mb-2">
					<img class="rounded" src="{{ Voyager::image( $event_battle->logo ) }}" style="width:100%" title="{{ $event_battle->title }}">
				</div>

				<div class="col-md-9">
					<h2 class="display-7 fw-bold"> {{ $event_battle->title }} </h2>
					<div class="ft-year"><span class="badge bg-warning"> {{ $event_battle->year }} </div></span><hr>
					<p> {{ $event_battle->desc }} </p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">

		<div class="row my-4">
			@foreach($videos as $video)
  				<div class="col-md-5 my-3">
					<div class="youtube-player" data-id="{{ $video->url }}"></div>
				</div>

				<div class="col-md-7 my-3">
  					<h4> {{ $video->title }} </h4><hr>
  					<p> {{ $video->desc }} </p>
  				</div>
			@endforeach

   		</div>
	</div>

@endsection