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
				<h5>By {{ $article->author_name }} </h5>
				<h6 style="font-size: 14px">Posted on: {{ $article->created_at->format('F d, Y') }}</h6>
				<h6 style="font-size: 14px">Updated on: {{ $article->updated_at->format('F d, Y') }}</h6>
				<div class="ft-soc">
					<a href="https://www.facebook.com/sharer/sharer.php?u=https://www.fliptop.com.ph/articles/{{ $article->slug }}" target="_blank"> <i class="fab fa-facebook" title="Share to Facebook"></i></a>
					<a href="https://twitter.com/intent/tweet?url=https://www.fliptop.com.ph/articles/{{ $article->slug }}" target="_blank"> <i class="fab fa-twitter" title="Share to Twitter"></i></a>
				</div>
				<hr>
				<img src="{{ Voyager::image( $article->image ) }}" style="width:100%">
				
				<div class="ft-body my-4">
					{!! $article->body !!}
				</div>
			</div>

			<div class="col-md-3 my-5">
				@foreach($ads as $ad)
				<a href="{{ $ad->link }}" target="_blank"><img class="mb-4" src="{{ Voyager::image( $ad->img ) }}" title="{{ $ad->desc }}" alt="{{ $ad->desc }}" style="width:100%"> </a>
				@endforeach
			</div>
				
		</div><hr>

		<div class="col-md-4">
			<div class="ft-feature"> <h3> READ ALSO </h3> </div>
		</div>

		<div class="row mt-3 mb-5">
		@foreach($read_also as $read)
			@if($read->id != $article->id)
        	<div class="col-md-3 col-6 my-2">
          		<a href="/articles/{{ $read->slug }}">
            		<img src="{{ Voyager::image( $read->image ) }}" style="width:100%">
          		</a>
          		<a href="/articles/{{ $read->slug }}">
            		<div class="ft-article"><h5 class="mt-3">{{ $read->title }}</h5></div>
          		</a>
        	</div>
        	@endif

      @endforeach
		</div>
  </div> 

@endsection