@extends('layouts.app')

@section('title')
<title> Videos: Live Performances | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph/videos/segment" />
<meta property="og:title"              content="Videos: Live Performances | FlipTop Battle League" />
<meta property="og:description"        content="The First Filipino Rap Battle League" />
<meta property="og:image"              content="{{ URL::asset('/img/bg_og.jpg') }}" />
<meta name="twitter:card" 			   content="summary_large_image">
@endsection

@section('content')

	<div class="container-xxl">

		<div class="row mt-5">

		<nav class="category-nav">
      		<ul class="nav nav-pills nav-fill">
        		<li class="nav-item"> <a class="nav-link" href="/videos"> All </a> </li>
        		<li class="nav-item"> <a class="nav-link" href="/videos/battle"> Battle Events </a> </li>
        		<li class="nav-item"> <a class="nav-link active" aria-current="page" href="/videos/perf"> Live Performances </a> </li>
        		<li class="nav-item"> <a class="nav-link" href="/videos/segment"> Segments </a> </li>
      		</ul><hr>
    	</nav>

    	</div>

		<div class="row my-4">
		@foreach($perfs as $perf)
			<div class="col-md-3 col-6 my-3">
				<a href="/videos/perf/{{ $perf->slug }}">
					<img src="{{ Voyager::image( $perf->logo ) }}" title="{{ $perf->title }}" style="width:100%">
					<div class="ft-article"><h4 class="mt-3">{{ $perf->title }}</h4></div>
				</a>
				<hr>
				<div class="ft-year"><span class="badge bg-warning"> {{ $perf->year }} </div></span>
			</div>
		@endforeach
		</div>

  	</div> 

@endsection