@extends('layouts.app')

@section('title')
<title> Articles: General | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph/articles/category/general" />
<meta property="og:title"              content="Articles: General | FlipTop Battle League" />
<meta property="og:description"        content="The First Filipino Rap Battle League" />
<meta property="og:image"              content="{{ URL::asset('/img/bg_og.jpg') }}" />
<meta name="twitter:card"              content="summary_large_image">
@endsection

@section('content')

  <div class="container">

    <div class="row my-5">

    <nav class="category-nav">
      <ul class="nav nav-pills nav-fill">
        <li class="nav-item"> <a class="nav-link" href="/articles"> All </a> </li>
        <li class="nav-item"> <a class="nav-link active" aria-current="page" href="/articles/category/general"> General </a> </li>
        <li class="nav-item"> <a class="nav-link" href="/articles/category/crews-in"> Crew's In </a> </li>
        <li class="nav-item"> <a class="nav-link" href="/articles/category/mc-spotlight"> MC Spotlight </a> </li>
        <li class="nav-item"> <a class="nav-link" href="/articles/category/behind-the-sound"> Behind The Sound </a> </li>
        <li class="nav-item"> <a class="nav-link" href="/articles/category/album-review"> Album Review </a> </li>
      </ul><hr>
    </nav>

      @foreach($articles as $article)
        <div class="col-md-4 mt-4">
           <div class="card-box">
                <a href="/articles/{{ $article->slug }}">
                  <div class="card-thumbnail">
                    <img src="{{ Voyager::image( $article->image ) }}" class="img-fluid" title="{{ $article->title }}">
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