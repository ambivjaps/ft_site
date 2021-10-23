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

	<div class="container-xxl">

		<div class="row my-5">
			<div class="col-md-2 col-4">
				<img src="{{ Voyager::image( $lyric->art ) }}" style="width:100%">
			</div>

			<div class="col-md-5 col-8">
				<h4>{{ $lyric->title }}</h4>
				<hr>
				<h6> {{ $lyric->album }} </h6>
				<h6> {{ $lyric->artist }} </h6>
				@if($lyric->producer != 0) <h6> Producer: {{ $lyric->producer }} </h6> @endif
				<div class="ft-year"><span class="badge bg-warning"> {{ $lyric->year }} </div></span>
			</div>
		</div>

		<div class="row my-5">
			<div class="col-md-9 col-md-offset-2">			
				<p>{!! $lyric->body !!}</p>
			</div>
		</div>
  	</div> 

@endsection