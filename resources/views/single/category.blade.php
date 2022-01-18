@extends('layouts.app')

@section('title')
<title> Articles: {{ $category->name }} | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph/articles" />
<meta property="og:title"              content="Articles: {{ $category->name }} | FlipTop Battle League" />
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
        @foreach($categories as $nav)
        <li class="nav-item"> <a class="nav-link" href="/articles/category/{{ $nav->slug }}"> {{ $nav->name }} </a> </li>
        @endforeach
      </ul><hr>
    </nav>

      @foreach($articles as $article)
        @if($article->category_id == $category->id)
          <div class="col-md-4 my-3">
             <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5" style="background-image: linear-gradient(to bottom, rgba(0,0,0,0.5) 0%,rgba(0,0,0,0.5) 100%), url('{{ Voyager::image( $article->image ) }}'); background-size: cover;">
            <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                <a href="/articles/{{ $article->slug }}">
                  <div class="ft-article"><h4 class="pt-5 mt-3 mb-3 display-7 lh-1" style="text-shadow: #000 1px 0 6px;">{{ $article->title }}</h4></div>
                </a>
                <h6><span class="badge bg-light text-dark"> By {{ $article->author_name }} </span></h6>
                <hr>
                <p style="text-shadow: #000 1px 0 6px;"> {{ $article->excerpt }} </p>
              <ul class="d-flex list-unstyled mt-auto">
                <li class="d-flex align-items-center">
                  <a class="btn btn-warning" href="/articles/{{ $article->slug }}" role="button">Read more</a>
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