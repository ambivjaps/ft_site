@extends('layouts.app')

@section('title')
<title> Promos | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph/promos" />
<meta property="og:title"              content="Promos | FlipTop Battle League" />
<meta property="og:description"        content="The First Filipino Rap Battle League" />
<meta property="og:image"              content="{{ URL::asset('/img/bg_og.jpg') }}" />
<meta name="twitter:card" 			   content="summary_large_image">
@endsection

@section('content')

	<div class="container">

		<div class="row my-5">
			 
		@foreach($promos as $promo)
			<div class="col-md-5 my-3">
				<img src="{{ Voyager::image( $promo->poster ) }}" title="{{ $promo->title }}" style="width:100%">
			</div>

			<div class="col-md-7 my-3">
				<h2>{{ $promo->title }}</h2><hr>
				<p>{{ $promo->desc }}</p>
				<a class="btn btn-warning" href="{{ $promo->link }}" target="_blank" role="button">Learn more ></a>
			</div>
		@endforeach

		</div>
  	</div> 

@endsection