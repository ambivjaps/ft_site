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
<meta name="description"               content="The First Filipino Rap Battle League" />
<meta name="keywords"                  content="FlipTop, FlipTop Battle League, Filipino Rap Battle, Rap, Rap Battle, Hip-Hop, Filipino" />
@endsection

@section('content')

	<div class="container">

		<div class="row my-5">

    <nav class="category-nav">
      <ul class="nav nav-pills nav-fill">
        <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/articles"> All </a> </li>
        <li class="nav-item"> <a class="nav-link" href="/articles/category/general"> General </a> </li>
        <li class="nav-item"> <a class="nav-link" href="/articles/category/crews-in"> Crew's In </a> </li>
        <li class="nav-item"> <a class="nav-link" href="/articles/category/mc-spotlight"> MC Spotlight </a> </li>
        <li class="nav-item"> <a class="nav-link" href="/articles/category/behind-the-sound"> Behind The Sound </a> </li>
        <li class="nav-item"> <a class="nav-link" href="/articles/category/reviews"> Reviews </a> </li>
      </ul><hr>
    </nav>

    	@foreach($articles as $article)
        <div class="col-md-4 mt-4">
          <div class="card">
            <a href="/articles/{{ $article->slug }}">
              <div class="card-thumbnail">
                <img src="{{ Voyager::image( $article->image ) }}" class="card-img-top" title="{{ $article->title }}">
              </div>
            </a>
            <div class="card-body">
              <a href="/articles/{{ $article->slug }}">
                <div class="ft-article"><h4>{{ $article->title }}</h4></div>
              </a>
              <h6><span class="badge bg-light text-dark"> By {{ $article->author_name }} </span></h6>
              <small class="text-muted">{{ $article->created_at->format('F d, Y') }}</small>
              <hr>
              <p>{{ $article->excerpt }}</p>
              <a class="btn btn-sm btn-warning float-end mt-2" href="/articles/{{ $article->slug }}" role="button">Read more ></a>
            </div>
          </div>   
        </div>
      @endforeach

    	</div>

      <ul class="pagination pagination-sm justify-content-end flex-wrap">
      {!! $articles->onEachSide(0)->links() !!}
      </ul>

  </div> 

@endsection