@extends('layouts.app')

@section('title')
<title> {{ $article->title }} | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph/articles/{{ $article->slug }}" />
<meta property="og:title"              content="{{ $article->seo_title }} | FlipTop Battle League" />
<meta property="og:description"        content="{{ $article->meta_description }}" />
<meta property="og:image"              content="{{ Voyager::image( $article->image ) }}" />
<meta name="author"					   content="{{ $article->author_name }}" />
<meta name="description"  			   content="{{ $article->meta_description }}" />
<meta name="keywords" 				   content="{{ $article->meta_keywords }}" />
<meta name="twitter:card" 			   content="summary_large_image">
@endsection

@section('content')

	<div class="container">

		<div class="row my-5">
			<div class="col-md-9 col-md-offset-2">
				<h2>{{ $article->title }}</h2>
				<h5><span class="badge bg-light text-dark"> By {{ $article->author_name }} </span></h5>
				<h6 style="font-size: 14px">Posted on: {{ $article->created_at->format('F d, Y') }}</h6>
				<h6 style="font-size: 14px">Updated on: {{ $article->updated_at->format('F d, Y') }}</h6>
				<div class="ft-soc">
					<a href="https://www.facebook.com/sharer/sharer.php?u=https://www.fliptop.com.ph/articles/{{ $article->slug }}" target="_blank"> <i class="fab fa-facebook fa-lg" title="Share to Facebook"></i></a>
					<a href="https://twitter.com/intent/tweet?url=https://www.fliptop.com.ph/articles/{{ $article->slug }}" target="_blank"> <i class="fab fa-twitter fa-lg" title="Share to Twitter"></i></a>
					<a href="https://www.linkedin.com/sharing/share-offsite/?url=https://www.fliptop.com.ph/articles/{{ $article->slug }}" target="_blank"> <i class="fab fa-linkedin fa-lg" title="Share to LinkedIn"></i></a>
					<a href="viber://forward?text=https://www.fliptop.com.ph/articles/{{ $article->slug }}" target="_blank"> <i class="fab fa-viber fa-lg" title="Share to Viber"></i></a>
					<a onclick="copyToClipboard()"> <i class="fas fa-link fa-lg" title="Copy link to clipboard"></i></a>
				</div>
				<hr>
				<img src="{{ Voyager::image( $article->image ) }}" style="width:100%">
				
				<div class="ft-body my-4">
					{!! $article->body !!}
				</div>
			</div>

			<div class="col-md-3 my-5">
				<div class="position-sticky" style="top: 7rem;">
					<div class="ft-feature mb-3"> <h3> SEE ALSO </h3> </div>
					
					@foreach($ad_battle as $battle)		
					<div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%,rgba(0,0,0,0.3) 100%), url('{{ Voyager::image( $battle->logo ) }}'); background-size: cover; background-repeat: no-repeat;">
	          			<div class="d-flex flex-column h-100 p-3 pb-1 text-white text-shadow-1">
							<a href="/videos/battle/{{ $battle->slug }}" target="_blank">
								<div class="ft-article"><h4 class="pt-5 mt-3 mb-3 display-7 lh-1" style="text-shadow: #000 1px 0 6px;">{{ $battle->title }}</h4></div>
							</a>
					
							<ul class="d-flex list-unstyled mt-auto">
								<li class="d-flex align-items-center">
									<h6><span class="badge bg-light text-dark">Latest Battle Event</span></h6>
								</li>
							</ul>
	          			</div>
	       	 		</div>
					@endforeach

					@foreach($ad_segment as $segment)
					<div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.3) 0%,rgba(0,0,0,0.3) 100%), url('{{ Voyager::image( $segment->logo ) }}'); background-size: cover; background-repeat: no-repeat;">
	          			<div class="d-flex flex-column h-100 p-3 pb-1 text-white text-shadow-1">
							<a href="/videos/segment/{{ $segment->slug }}" target="_blank">
								<div class="ft-article"><h4 class="pt-5 mt-3 mb-3 display-7 lh-1" style="text-shadow: #000 1px 0 6px;">{{ $segment->title }}</h4></div>
							</a>
					
							<ul class="d-flex list-unstyled mt-auto">
								<li class="d-flex align-items-center">
									<h6><span class="badge bg-light text-dark">FlipTop Original Content</span></h6>
								</li>
							</ul>
	          			</div>
	       	 		</div>
					@endforeach

					<div class="list-group mb-3">
					@foreach($ad_lyric as $lyric)
					<a href="/lyrics/{{ $lyric->slug }}" class="list-group-item list-group-item-action" style="background-color: #131313;" target="_blank">
						<div class="row mb-3">
							<div class="col-md-4 col-3">
								<img class="ft-event-logo rounded" src="{{ Voyager::image( $lyric->art ) }}" title="{{ $lyric->title }}" style="width:100%">
							</div>

							<div class="col-md-7 col-8">
								<h6><span class="badge bg-light text-dark">Lyrics</span></h6>
								<h5> {{ $lyric->title }} </h5>
								<h6> {{ $lyric->artist }} </h6>
								<h6><span class="badge bg-warning text-dark">{{ $lyric->year }}</span></h6>
							</div>
						</div>
					</a>
					@endforeach
					</div>

					@foreach($ad_promo as $promo)
					<div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.5) 100%), url('{{ Voyager::image( $promo->poster ) }}'); background-size: cover; background-repeat: no-repeat;">
	          			<div class="d-flex flex-column h-100 p-3 pb-1 text-white text-shadow-1">
						  	<h6><span class="badge bg-light text-dark">Promo</span></h6>
							<a href="{{ $promo->link }}" target="_blank">
								<div class="ft-article"><h4 class="pt-5 mt-3 mb-3 display-7 lh-1" style="text-shadow: #000 1px 0 6px;">{{ $promo->title }}</h4></div>
							</a>
					
							<ul class="d-flex list-unstyled mt-auto">
								<li class="d-flex align-items-center">
									<p> {{ $promo->desc }} </p>
								</li>
							</ul>
	          			</div>
	       	 		</div>
					@endforeach

				</div>
			</div>
				
		</div><hr>

		<div class="col-md-4">
			<div class="ft-feature"> <h3> OTHER ARTICLES </h3> </div>
		</div>

		<div class="row mt-3 mb-5">
		@foreach($read_also as $read)
	        <div class="col-md-3 my-3">
	           <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.5) 100%), url('{{ Voyager::image( $read->image ) }}'); background-size: cover; background-repeat: no-repeat;">
	          <div class="d-flex flex-column h-100 p-3 pb-1 text-white text-shadow-1">
	              <a href="/articles/{{ $read->slug }}">
	                <div class="ft-article"><h4 class="pt-5 mt-3 mb-3 display-7 lh-1" style="text-shadow: #000 1px 0 6px;">{{ $read->title }}</h4></div>
	              </a>
	              
	            <ul class="d-flex list-unstyled mt-auto">
	              <li class="d-flex align-items-center">
	                <h6><span class="badge bg-light text-dark"> By {{ $read->author_name }} </span></h6>
	              </li>
	            </ul>
	          </div>
	        </div>
	      	</div>

      @endforeach
		</div>
  </div> 

<script>
	function copyToClipboard(text) {
		var inputc = document.body.appendChild(document.createElement("input"));
		inputc.value = window.location.href;
		inputc.focus();
		inputc.select();
		document.execCommand('copy');
		inputc.parentNode.removeChild(inputc);
		alert("Link copied.");
	}
</script>

@endsection