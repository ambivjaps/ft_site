@extends('layouts.app')

@section('title')
<title> Segment: {{ $segment->title }} | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph/videos/segment/{{ $segment->slug }}" />
<meta property="og:title"              content="Segment: {{ $segment->title }} | FlipTop Battle League" />
<meta property="og:description"        content="{{ $segment->desc }}" />
<meta property="og:image"              content="{{ Voyager::image( $segment->logo ) }}" />
<meta name="twitter:card" 			   content="summary_large_image">
@endsection

@section('content')

	<div class="ft-event p-5 mb-3">
		<div class="container-fluid py-2">
			<div class="row">
				<div class="col-md-3 mb-2">
					<img class="rounded" src="{{ Voyager::image( $segment->logo ) }}" style="width:100%" title="{{ $segment->title }}">
				</div>

				<div class="col-md-9">
					<h2 class="display-7 fw-bold"> {{ $segment->title }} </h2><hr>
					<p> {{ $segment->desc }} </p>
				</div>
			</div>
		</div>
	</div>

	<div class="container">

		<div class="row my-4">
			@foreach($videos as $video)
  				<div class="col-md-4 my-3">
					<div class="youtube-player" data-id="{{ $video->url }}"></div>

  					<h4> {{ $video->title }} </h4><hr>
  					<p> {{ $video->desc }} </p>
  				</div>
			@endforeach

   		</div>
	</div>

@endsection