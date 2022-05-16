@extends('layouts.app')

@section('title')
<title> Lyrics: {{ $lyric->title }} | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://fliptop.com.ph/lyrics/{{ $lyric->slug }}" />
<meta property="og:title"              content="Lyrics: {{ $lyric->title }}" />
<meta property="og:description"        content="Album: {{ $lyric->album }} | Artist: {{ $lyric->artist }}" />
@if($lyric->art != 0)
<meta property="og:image"              content="{{ Voyager::image( $lyric->art ) }}" />
@else
<meta property="og:image"              content="{{ URL::asset('img/art_def.jpg') }}" />
@endif
<meta property="og:image:width" 	   content="750"/>
<meta property="og:image:height" 	   content="450"/>
<meta name="twitter:card" 			   content="summary_large_image">
<meta name="keywords"                  content="FlipTop, FlipTop Battle League, Filipino Rap Battle, Rap, Rap Battle, Hip-Hop, Filipino" />
@endsection

@section('content')

	<div class="ft-event p-5 mb-3">
		<div class="container-fluid py-2">
			<div class="row">
				<div class="col-md-2 mb-3">
					@if($lyric->art != 0)
					<img class="rounded" src="{{ Voyager::image( $lyric->art ) }}" title="{{ $lyric->title }}" style="width:100%">
					@else
					<img class="rounded" src="{{ URL::asset('img/art_def.jpg') }}" title="{{ $lyric->title }}" style="width:100%">
					@endif
				</div>

				<div class="col-md-9">
					<h2 class="display-7 fw-bold text-break"> {{ $lyric->title }} </h2><hr>
					<h6> {{ $lyric->album }} </h6>
					<h6> {{ $lyric->artist }} </h6>
					@if($lyric->producer != 0) <h6> Producer: {{ $lyric->producer }} </h6> @endif
					<div class="ft-year"><span class="badge bg-warning"> {{ $lyric->year }} </div></span>
				</div>
			</div>
		</div>
	</div>

	<div class="container">

		<div class="row mb-5">
			<div class="col-md-9 col-md-offset-2">			
				<p>{!! $lyric->body !!}</p>
			</div>

			<div class="col-md-3 my-5">
				<div class="position-sticky" style="top: 7rem;">
					<div class="ft-feature mb-3"> <h3> SEE ALSO </h3> </div>
					
					@foreach($ad_article as $article)	
	          	 	<div class="card card-cover h-100 overflow-hidden text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.5) 100%), url('{{ Voyager::image( $article->image ) }}'); background-size: cover; background-repeat: no-repeat;">
	          			<div class="d-flex flex-column h-100 p-3 pb-1 text-white text-shadow-1">
						  	<h6><span class="badge bg-light text-dark"> Latest Article </span></h6>
							<a href="/articles/{{ $article->slug }}" target="_blank">
								<div class="ft-article"><h4 class="pt-5 mt-3 mb-3 display-7 lh-1" style="text-shadow: #000 1px 0 6px;">{{ $article->title }}</h4></div>
							</a>
	              
	            		<ul class="d-flex list-unstyled mt-auto">
	              			<li class="d-flex align-items-center">
	                			<small> By {{ $article->author_name }} </small>
	              			</li>
	            		</ul>
	          			</div>
	        		</div>
					@endforeach

					@foreach($ad_battle as $battle)		
						<div class="card card-cover h-100 overflow-hidden text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%,rgba(0,0,0,0.3) 100%), url('{{ Voyager::image( $battle->logo ) }}'); background-size: cover; background-repeat: no-repeat;">
							<div class="d-flex flex-column h-100 p-3 pb-1 text-white text-shadow-1">
								<h6><span class="badge bg-light text-dark"> Latest Battle Event </span></h6>
								<a href="/videos/battle/{{ $battle->slug }}" target="_blank">
									<div class="ft-article"><h4 class="pt-5 mt-3 mb-3 display-7 lh-1" style="text-shadow: #000 1px 0 6px;">{{ $battle->title }}</h4></div>
								</a>
						
								<ul class="d-flex list-unstyled mt-auto">
									<li class="d-flex align-items-center">
										<h6><span class="badge bg-warning text-dark">{{ $battle->year }}</span></h6>
									</li>
								</ul>
							</div>
						</div>
					@endforeach

					@foreach($ad_segment as $segment)
						<div class="card card-cover h-100 overflow-hidden text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%,rgba(0,0,0,0.3) 100%), url('{{ Voyager::image( $segment->logo ) }}'); background-size: cover; background-repeat: no-repeat;">
							<div class="d-flex flex-column h-100 p-3 pb-1 text-white text-shadow-1">
								<h6><span class="badge bg-light text-dark"> Segment </span></h6>
								<a href="/videos/segment/{{ $segment->slug }}" target="_blank">
									<div class="ft-article"><h4 class="pt-5 mt-3 mb-3 display-7 lh-1" style="text-shadow: #000 1px 0 6px;">{{ $segment->title }}</h4></div>
								</a>
							</div>
						</div>
					@endforeach

					@foreach($ad_promo as $promo)
						<div class="card card-cover h-100 overflow-hidden text-white" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.5) 100%), url('{{ Voyager::image( $promo->poster ) }}'); background-size: cover; background-repeat: no-repeat;">
							<div class="d-flex flex-column h-100 p-3 pb-1 text-white text-shadow-1">
								<h6><span class="badge bg-light text-dark">Promo</span></h6>
								<a href="{{ $promo->link }}" target="_blank">
									<div class="ft-article"><h4 class="pt-5 mt-3 mb-3 display-7 lh-1" style="text-shadow: #000 1px 0 6px;">{{ $promo->title }}</h4></div>
								</a>
							</div>
						</div>
					@endforeach

					</div>
				</div>
			</div>

		<hr>
		<div class="col-md-4 mt-3">
			<div class="ft-feature"> <h3> OTHER LYRICS </h3> </div>
		</div>

		<div class="row mt-3 mb-5">
			<div class="list-group mb-3">
			@foreach($read_also as $read)	
			<a href="/lyrics/{{ $read->slug }}" class="list-group-item list-group-item-action" style="background-color: #131313;">
				<div class="row mb-3">
					<div class="col-md-1 col-3">
						@if($read->art != 0)
						<img class="ft-event-logo rounded" src="{{ Voyager::image( $read->art ) }}" title="{{ $read->title }}" style="width:100%">
						@else
						<img class="ft-event-logo rounded" src="{{ URL::asset('img/art_def.jpg') }}" title="{{ $read->title }}" style="width:100%">
						@endif
					</div>

					<div class="col-md-7 col-8">
						<h5 class="text-break"> {{ $read->title }} </h5>
						<h6> {{ $read->album }} </h6>
						<h6> {{ $read->artist }} </h6>
						<h6><span class="badge bg-warning text-dark">{{ $read->year }}</span></h6>
					</div>
				</div>
			</a>
			@endforeach

			</div>
		</div>

	</div>

@endsection