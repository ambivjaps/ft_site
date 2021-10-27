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
          <div class="col-md-4 my-4">
            <a href="/articles/{{ $article->slug }}">
              <img src="{{ Voyager::image( $article->image ) }}" style="width:100%">
            </a>
            
            <a href="/articles/{{ $article->slug }}">
              <div class="ft-article"><h4 class="mt-3">{{ $article->title }}</h4></div>
            </a>

            <h6> By {{ $article->author_name }} </h6>
            <hr>
            <p> {{ $article->excerpt }} </p>
            <a class="btn btn-warning" href="/articles/{{ $article->slug }}" role="button">Read more</a>
          </div>

      	@endforeach

    	</div>

      <ul class="pagination pagination-sm justify-content-end flex-wrap">
      {!! $articles->onEachSide(5)->links() !!}
      </ul>

  </div> 

@endsection