@extends('layouts.app')

@section('title')
<title> Videos: Battle Events - Search Results: {{ $search_text }} | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph/videos/battle" />
<meta property="og:title"              content="Videos: Battle Events | FlipTop Battle League" />
<meta property="og:description"        content="The First Filipino Rap Battle League" />
<meta property="og:image"              content="{{ URL::asset('/img/bg_og.jpg') }}" />
<meta name="twitter:card" 			   content="summary_large_image">
@endsection

@section('content')

	<div class="container">

		<div class="row mt-5">

		<nav class="category-nav">
      		<ul class="nav nav-pills nav-fill">
        		<li class="nav-item"> <a class="nav-link" aria-current="page" href="/videos"> All </a> </li>
        		<li class="nav-item"> <a class="nav-link active" href="/videos/battle"> Battle Events </a> </li>
        		<li class="nav-item"> <a class="nav-link" href="/videos/perf"> Live Performances </a> </li>
        		<li class="nav-item"> <a class="nav-link" href="/videos/segment"> Segments </a> </li>
      		</ul><hr>
    	</nav>

    	</div>

		<div class="form-group mt-3">
			<form type="get" action="{{ url('/videos/battle/search') }}">
			
				<div class="row mb-4">
					<div class="col-md-8 col-8">
    					<input type="text" class="form-control" id="query" name="query" placeholder="Search an event, venue, or year..." required>
  					</div>
  					<div class="col-md-3 col-1">
						<input class="btn btn-warning" type="submit" name="submit" value="Search">
					</div>
				</div>
			</form>
		</div>

		<h5> Results for: <strong> {{ $search_text }} </strong></h5>

		<div class="row my-4">
		@foreach($query_battle as $battle)
			<div class="col-md-3 col-6 my-3">
				<a href="/videos/battle/{{ $battle->slug }}">
					<img src="{{ Voyager::image( $battle->logo ) }}" title="{{ $battle->title }}" style="width:100%">
					<div class="ft-article"><h4 class="mt-3">{{ $battle->title }}</h4></div>
				</a>
				<hr>
				<div class="ft-year"><span class="badge bg-warning"> {{ $battle->year }} </div></span>
			</div>
		@endforeach

		@forelse($query_battle as $battle)

			@empty
			<h4><i> No battle event results found for <strong> "{{ $search_text }}". </strong> Please try again. </i></h4>

		@endforelse

		</div>
  	</div> 

@endsection