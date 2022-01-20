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
				</div>
				<hr>
				<img src="{{ Voyager::image( $article->image ) }}" style="width:100%">
				
				<div class="ft-body my-4">
					{!! $article->body !!}
				</div>
			</div>

			<div class="col-md-3 my-5">
				<div class="position-sticky" style="top: 7rem;">
				@foreach($ads as $ad)
				<a href="{{ $ad->link }}" target="_blank"><img class="mb-4" src="{{ Voyager::image( $ad->img ) }}" title="{{ $ad->desc }}" alt="{{ $ad->desc }}" style="width:100%"> </a>
				@endforeach
				</div>
			</div>
				
		</div><hr>

		<div class="col-md-4">
			<div class="ft-feature"> <h3> READ ALSO </h3> </div>
		</div>

		<div class="row mt-3 mb-5">
		@foreach($read_also as $read)
			@if($read->id != $article->id)
	        <div class="col-md-3 my-3">
	           <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.5) 100%), url('{{ Voyager::image( $read->image ) }}'); background-size: cover;">
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
        	@endif

      @endforeach
		</div>
  </div> 

@endsection