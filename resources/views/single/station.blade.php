@extends('layouts.app')

@section('title')
<title> Radio: {{ $station->title }} | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph/radio/{{ $station->slug }}" />
<meta property="og:title"              content="Radio: {{ $station->title }} | FlipTop Battle League" />
<meta property="og:description"        content="{{ $station->desc }}" />
<meta property="og:image"              content="{{ Voyager::image( $station->poster ) }}" />
<meta name="twitter:card" 			   content="summary_large_image">
@endsection

@section('content')

	<div class="container">

		<div class="row my-5">
			<div class="col-md-4">
				<img src="{{ Voyager::image( $station->poster ) }}" title="{{ $station->title }}" style="width:100%">
			</div>

			<div class="col-md-6">
				<div class="ft-feature"> <h3 class="text-uppercase"> {{ $station->title }} </h3> </div><hr>
				<p>{!! $station->body !!}</p>
				<p> {{ $station->desc }} </p>
			</div>
		</div>
  	</div> 

@endsection