@extends('layouts.app')

@section('title')
<title> Lyrics | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph/lyrics" />
<meta property="og:title"              content="Lyrics | FlipTop Battle League" />
<meta property="og:description"        content="The First Filipino Rap Battle League" />
<meta property="og:image"              content="{{ URL::asset('/img/bg_og.jpg') }}" />
<meta name="twitter:card" 			   content="summary_large_image">
@endsection

@section('content')

	<div class="container">

		<div class="form-group mt-5">
			<form type="get" action="{{ url('/lyrics/search') }}">
			
				<div class="row mb-4">
					<div class="col-md-8 col-8">
    					<input type="text" class="form-control" id="query" name="query" placeholder="Search a song, album, artist, producer, or year..." required>
  					</div>
  					<div class="col-md-3 col-1">
						<input class="btn btn-warning" type="submit" name="submit" value="Search">
					</div>
				</div>
			</form>

		</div>

		<div class="list-group mb-3">

		@foreach($lyrics as $lyric)
			<a href="/lyrics/{{ $lyric->slug }}" class="list-group-item list-group-item-action" style="background-color: #131313;">
			<div class="row mb-3">
				<div class="col-md-1 col-3">
					<img class="ft-event-logo rounded" src="{{ Voyager::image( $lyric->art ) }}" title="{{ $lyric->title }}" style="width:100%">
				</div>

				<div class="col-md-7 col-8">
					<h4> {{ $lyric->title }} </h4>
					<h6> {{ $lyric->album }} </h6>
					<h6> {{ $lyric->artist }} </h6>
					<div class="ft-year"><span class="badge bg-warning"> {{ $lyric->year }} </div></span>
				</div>
			</div>
			</a>
		@endforeach
		
		</div>

		<ul class="pagination pagination-sm justify-content-end flex-wrap">
		{!! $lyrics->onEachSide(5)->links() !!}
		</ul>

  	</div> 

@endsection