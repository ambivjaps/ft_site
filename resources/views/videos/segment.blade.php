@extends('layouts.app')

@section('title')
<title> Videos: Segments | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="{{ URL::current() }}" />
<meta property="og:title"              content="Videos: Segments | FlipTop Battle League" />
<meta property="og:description"        content="The First Filipino Rap Battle League" />
<meta property="og:image"              content="{{ URL::asset('/img/bg_og.jpg') }}" />
<meta name="twitter:card" 			   content="summary_large_image">
@endsection

@section('content')

	<div class="container">

		<div class="row mt-5">

		<nav class="category-nav">
      		<ul class="nav nav-pills nav-fill">
        		<li class="nav-item"> <a class="nav-link" href="/videos"> All </a> </li>
        		<li class="nav-item"> <a class="nav-link" href="/videos/battle"> Battle Events </a> </li>
        		<li class="nav-item"> <a class="nav-link" href="/videos/perf"> Live Performances </a> </li>
        		<li class="nav-item"> <a class="nav-link active" aria-current="page" href="/videos/segment"> Segments </a> </li>
      		</ul><hr>
    	</nav>

    	</div>

		<div class="row my-4">
		@foreach($segments as $segment)
			<div class="col-md-3 col-6 my-3">
				<a href="/videos/segment/{{ $segment->slug }}">
					<img class="ft-event-logo rounded" src="{{ Voyager::image( $segment->logo ) }}" title="{{ $segment->title }}" style="width:100%">
					<div class="ft-article"><h4 class="mt-3">{{ $segment->title }}</h4></div>
				</a>
				<hr>
				<p>{{ $segment->desc }}</p>
			</div>
		@endforeach
		</div>

  	</div> 

@endsection