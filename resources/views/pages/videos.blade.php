@extends('layouts.app')

@section('title')
<title> Videos | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph/videos" />
<meta property="og:title"              content="Videos | FlipTop Battle League" />
<meta property="og:description"        content="The First Filipino Rap Battle League" />
<meta property="og:image"              content="{{ URL::asset('/img/bg_og.jpg') }}" />
<meta name="twitter:card" 			   content="summary_large_image">
@endsection

@section('content')

	<div class="container">

		<div class="row mt-5">

		<nav class="category-nav">
      		<ul class="nav nav-pills nav-fill">
        		<li class="nav-item"> <a class="nav-link active" aria-current="page" href="/videos"> All </a> </li>
        		<li class="nav-item"> <a class="nav-link" href="/videos/battle"> Battle Events </a> </li>
        		<li class="nav-item"> <a class="nav-link" href="/videos/perf"> Live Performances </a> </li>
        		<li class="nav-item"> <a class="nav-link" href="/videos/segment"> Segments </a> </li>
      		</ul><hr>
    	</nav>

    	</div>

		<div class="ft-feature mt-4"> <h3> LATEST BATTLES </h3> </div>

		<div class="row my-4">
	  	@foreach($vid_battles as $ft_battle)
		    <div class="col-md-6 my-3">
		      <div class="youtube-player" data-id="{{ $ft_battle->url }}"></div>
		    </div>
			<div class="col-md-6 my-3">
		      <h4>{{ $ft_battle->title }}</h4>
			  <h6><span class="badge bg-light text-dark">{{ $ft_battle->event }}</span></h6><hr>
		      <p>{{ $ft_battle->desc }}</p>
		    </div>
	  	@endforeach
	  	</div>

	  	<div class="row my-4 mb-5">
			<div class="owl-carousel owl-theme">
			@foreach($battles as $battle)
				<div class="ml-2 mr-2">
					<a href="/videos/battle/{{ $battle->slug }}">
						<img class="ft-scroll" src="{{ Voyager::image( $battle->logo ) }}" title="{{ $battle->title }}" style="width:100%">
					</a>
					<a href="/videos/battle/{{ $battle->slug }}">
						<div class="ft-article"><h5 class="mt-3">{{ $battle->title }}</h5></div>
					</a>
					<hr>
					<div class="ft-year"><span class="badge bg-warning"> {{ $battle->year }} </div></span>
				</div>
			@endforeach
			</div>
		</div>

		<div class="ft-feature"> <h3> LIVE PERFORMANCES </h3> </div>

		<div class="row my-4">
		@foreach($vid_perfs as $ft_perf)
		    <div class="col-md-6 my-3">
		      <div class="youtube-player" data-id="{{ $ft_perf->url }}"></div>
		    </div>
		    <div class="col-md-6 my-3">
		      <h4>{{ $ft_perf->title }}</h4>
		      <h6><span class="badge bg-light text-dark">{{ $ft_perf->event }}</span></h6><hr>
			  <p>Live artist performance. *BEST LISTENED TO ON SPEAKER OR HEAD PHONES*</p>
		    </div>
	  	@endforeach
	  	</div>

	  	<div class="row my-4 mb-5">
	  		<div class="owl-carousel owl-theme">
			@foreach($perfs as $perf)
				<div class="ml-2 mr-2">
					<a href="/videos/perf/{{ $perf->slug }}">
						<img class="ft-scroll" src="{{ Voyager::image( $perf->logo ) }}" title="{{ $perf->title }}" style="width:100%">
					</a>
					<a href="/videos/perf/{{ $perf->slug }}">
						<div class="ft-article"><h5 class="mt-3">{{ $perf->title }}</h5></div>
					</a>
					<hr>
					<div class="ft-year"><span class="badge bg-warning"> {{ $perf->year }} </div></span>
				</div>
			@endforeach
			</div>
		</div>

		<div class="ft-feature"> <h3> LATEST SEGMENTS </h3> </div>

		<div class="row my-4">
		@foreach($vid_segments as $ft_segment)
		    <div class="col-md-6 my-3">
		      <div class="youtube-player" data-id="{{ $ft_segment->url }}"></div>
		    </div>
		    <div class="col-md-6 my-3">
		      <h4>{{ $ft_segment->title }}</h4>
			  <h6><span class="badge bg-light text-dark">{{ $ft_segment->segment }}</span></h6><hr>
		      <p>{{ $ft_segment->desc }}</p>
		    </div>
	  	@endforeach
	  	</div>

	  	<div class="row my-4 mb-5">
	  		<div class="owl-carousel owl-theme">
			@foreach($segments as $segment)
				<div class="ml-2 mr-2">
					<a href="/videos/segment/{{ $segment->slug }}">
						<img class="ft-scroll" src="{{ Voyager::image( $segment->logo ) }}" title="{{ $segment->title }}" style="width:100%">
					</a>
					<a href="/videos/segment/{{ $segment->slug }}">
						<div class="ft-article"><h5 class="mt-3">{{ $segment->title }}</h5></div>
					</a>
					<hr>
					<small>{{ $segment->desc }}</small>
				</div>
			@endforeach
			</div>
		</div>

  	</div> 

@endsection

@section('owl')

<script>
    $('.owl-carousel').owlCarousel({
      stagePadding:20,
      loop:false,
      margin:15,
      dots:false,
      nav:false,
      responsive:{
          0:{
              items:2
          },
          600:{
              items:3
          },
          1000:{
              items:5
          }
        }
    })
</script>

@endsection