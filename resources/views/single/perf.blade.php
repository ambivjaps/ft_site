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

	<div class="container">

		<div class="row my-5">
			<div class="col-md-3 mb-3">
				<img src="{{ Voyager::image( $event_perf->logo ) }}" style="width:100%">
			</div>

			<div class="col-md-6">
				<h2> {{ $event_perf->title }} </h2><hr>
				<p> {{ $event_perf->desc }} </p>
				<div class="ft-year"><span class="badge bg-warning"> {{ $event_perf->year }} </div></span>
			</div>
		</div>

		<div class="row my-5">
			@foreach($videos as $video)
  				<div class="col-md-4 my-2">
					<div class="youtube-player" data-id="{{ $video->url }}"></div><hr>
  					<h4 class="mb-4"> {{ $video->title }} </h4>
  				</div>
			@endforeach

   		</div>
	</div>

@endsection