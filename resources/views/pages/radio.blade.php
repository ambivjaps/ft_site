@extends('layouts.app')

@section('title')
<title> Radio | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph/radio" />
<meta property="og:title"              content="Radio | FlipTop Battle League" />
<meta property="og:description"        content="The First Filipino Rap Battle League" />
<meta property="og:image"              content="{{ URL::asset('/img/bg_og.jpg') }}" />
<meta name="twitter:card" 			   content="summary_large_image">
@endsection

@section('content')

	<div class="container">
		<div class="row mt-5"> <center> <img src="{{ URL::asset('img/ft_radio.png') }}" title="FlipTop Radio"> </center> </div>
		<div class="row my-5">
		@foreach($stations as $station)
			<div class="col-md-4 col-6">
				<a href="/radio/{{ $station->slug }}">
					<img src="{{ Voyager::image( $station->poster ) }}" title="{{ $station->title }}" style="width:100%">
					<div class="ft-feature"> <h3 class="text-uppercase">{{ $station->title }}</h3> </div>
				</a>
					<hr>
					<p>{{ $station-> desc }}</p>
			</div>
		@endforeach
		
		</div>
  	</div> 

@endsection