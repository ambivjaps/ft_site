@extends('layouts.app')

@section('title')
<title> Lyrics: {{ $lyric->title }} | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph/lyrics/{{ $lyric->slug }}" />
<meta property="og:title"              content="Lyrics: {{ $lyric->title }} | FlipTop Battle League" />
<meta property="og:description"        content="{{ $lyric->album }} | {{ $lyric->artist }}" />
<meta property="og:image"              content="{{ Voyager::image( $lyric->art ) }}" />
<meta name="twitter:card" 			   content="summary_large_image">
@endsection

@section('content')

	<div class="ft-event p-5 mb-3">
		<div class="container-fluid py-2">
			<div class="row">
				<div class="col-md-2 mb-3">
					<img class="rounded" src="{{ Voyager::image( $lyric->art ) }}" style="width:100%" title="{{ $lyric->title }}">
				</div>

				<div class="col-md-9">
					<h2 class="display-7 fw-bold"> {{ $lyric->title }} </h2><hr>
					<h6> {{ $lyric->album }} </h6>
					<h6> {{ $lyric->artist }} </h6>
					@if($lyric->producer != 0) <h6> Producer: {{ $lyric->producer }} </h6> @endif
					<div class="ft-year"><span class="badge bg-warning"> {{ $lyric->year }} </div></span>
				</div>
			</div>
		</div>
	</div>

	<div class="container">

		<div class="row my-5">
			<div class="col-md-9 col-md-offset-2">			
				<p>{!! $lyric->body !!}</p>
			</div>

			<div class="col-md-3 my-5">
				<div class="position-sticky" style="top: 7rem;">
				@foreach($ads as $ad)
				<a href="{{ $ad->link }}" target="_blank"><img class="mb-4" src="{{ Voyager::image( $ad->img ) }}" title="{{ $ad->desc }}" alt="{{ $ad->desc }}" style="width:100%"> </a>
				@endforeach
				</div>
			</div>
		</div>
  	</div> 

@endsection