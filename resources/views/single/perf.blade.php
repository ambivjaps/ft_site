@extends('layouts.app')

@section('title')
<title> Event: {{ $event_perf->title }} | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph/videos/perf/{{ $event_perf->slug }}" />
<meta property="og:title"              content="Event: {{ $event_perf->title }} | FlipTop Battle League" />
<meta property="og:description"        content="{{ $event_perf->desc }}" />
<meta property="og:image"              content="{{ Voyager::image( $event_perf->logo ) }}" />
<meta name="twitter:card" 			   content="summary_large_image">
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
	</div>

@endsection