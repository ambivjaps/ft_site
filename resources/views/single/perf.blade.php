@extends('layouts.app')

@section('title')
<title> Event: {{ $event_perf->title }} | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph/videos/perf/{{ $event_perf->slug }}" />
<meta property="og:title"              content="Event: {{ $event_perf->title }}" />
<meta property="og:description"        content="{{ $event_perf->desc }}" />
<meta property="og:image"              content="{{ Voyager::image( $event_perf->logo ) }}" />
<meta property="og:image:width" 	   content="750"/>
<meta property="og:image:height" 	   content="450"/>
<meta name="twitter:card" 			   content="summary_large_image">
<meta name="keywords"                  content="FlipTop, FlipTop Battle League, Filipino Rap Battle, Rap, Rap Battle, Hip-Hop, Filipino" />
@endsection

@section('content')

	<div class="ft-event p-5 mb-3">
		<div class="container-fluid py-2">
			<div class="row">
				<div class="col-md-3 mb-2">
					<img class="rounded" src="{{ Voyager::image( $event_perf->logo ) }}" style="width:100%" title="{{ $event_perf->title }}">
				</div>

				<div class="col-md-9">
					<h6><span class="badge bg-light text-dark">Live Performance</span></h6>
					<h2 class="display-7 fw-bold"> {{ $event_perf->title }} </h2>
					<div class="ft-year"><span class="badge bg-warning"> {{ $event_perf->year }} </div></span><hr>
					<small> {{ $event_perf->desc }} </small>
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
  				</div>
			@endforeach

   		</div>

		<hr>

		<div class="col-md-4 mt-3">
			<div class="ft-feature"> <h3> OTHER VIDEOS </h3> </div>
		</div>

		<div class="row my-3 mb-5">
			@foreach($watch_battle as $battle)
			<div class="col-md-4 my-3">
				<div class="youtube-player" data-id="{{ $battle->url }}"></div>
				<h4>{{ $battle->title }}</h4>
				<h6><span class="badge bg-light text-dark">{{ $battle->event }}</span></h6><hr>
				<small>{{ $battle->desc }}</small>
			</div>
			@endforeach
		
			@foreach($watch_seg as $segment)
			<div class="col-md-4 my-3">
				<div class="youtube-player" data-id="{{ $segment->url }}"></div>
				<h4>{{ $segment->title }}</h4>
				<h6><span class="badge bg-light text-dark">{{ $segment->segment }}</span></h6>
			</div>
			@endforeach
		</div>
	</div>

@endsection