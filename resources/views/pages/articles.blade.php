@extends('layouts.app')

@section('title')
<title> Articles | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph/articles" />
<meta property="og:title"              content="Articles | FlipTop Battle League" />
<meta property="og:description"        content="The First Filipino Rap Battle League" />
<meta property="og:image"              content="{{ URL::asset('/img/bg_og.jpg') }}" />
<meta name="twitter:card"              content="summary_large_image">
@endsection

@section('content')

	<div class="container">

		<div class="row my-5">

    <nav class="category-nav">
      <ul class="nav nav-pills nav-fill">
        <li class="nav-item"> <a class="nav-link" aria-current="page" href="/articles"> All </a> </li>
        @foreach($categories as $category)
        <li class="nav-item"> <a class="nav-link" href="/articles/category/{{ $category->slug }}"> {{ $category->name }} </a> </li>
        @endforeach
      </ul><hr>
    </nav>

    	@foreach($articles as $article)
        <div class="col-md-4 mt-4">
           <div class="card-box">
                <a href="/articles/{{ $article->slug }}">
                  <div class="card-thumbnail">
                    <img src="{{ Voyager::image( $article->image ) }}" class="img-fluid" alt="">
                  </div>
                </a>
                <a href="/articles/{{ $article->slug }}">
                  <div class="ft-article mt-3"><h4>{{ $article->title }}</h4></div>
                </a>
                <h6><span class="badge bg-light text-dark"> By {{ $article->author_name }} </span></h6>
                <small class="text-muted">{{ $article->created_at->format('F d, Y') }}</small>
                <hr>
                <h6>{{ $article->excerpt }}</h6>
                <a class="btn btn-sm btn-warning mt-2" href="/articles/{{ $article->slug }}" role="button">Read more ></a>
            </div>
        </div>
      @endforeach

    	</div>

      <ul class="pagination pagination-sm justify-content-end flex-wrap">
      {!! $articles->onEachSide(5)->links() !!}
      </ul>

  </div> 

@endsection