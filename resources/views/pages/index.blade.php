@extends('layouts.app')

@section('title')
<title> Home | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph" />
<meta property="og:title"              content="FlipTop Battle League" />
<meta property="og:description"        content="The First Filipino Rap Battle League" />
<meta property="og:image"              content="{{ URL::asset('/img/bg_og.jpg') }}" />
<meta name="twitter:card"              content="summary_large_image">
<meta name="description"               content="The First Filipino Rap Battle League" />
<meta name="keywords"                  content="FlipTop, FlipTop Battle League, Filipino Rap Battle, Rap, Rap Battle, Hip-Hop, Filipino" />
@endsection

@section('content')

  <div id="ft-slide" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        @foreach($slides as $slide)
          <button type="button" data-bs-target="#ft-slide" data-bs-slide-to="{{ $loop->index }}" aria-label="Slide {{ $loop->iteration }}" @if($loop->first)class="active" aria-current="true"@endif></button>
        @endforeach
      </ol>

    <div class="carousel-inner">
        @foreach($slides as $slide)
        <div @if($loop->first) class="carousel-item active" @else class="carousel-item" @endif>
          <a href="{{ $slide->link }}" target="_blank">
            <img class="d-block w-100" src="{{ URL::asset('/storage/'.($slide->img)) }}" alt="{{ $slide->desc }}">
          </a>
        </div>
        @endforeach
      </div>
  
    <button class="carousel-control-prev" data-bs-target="#ft-slide" type="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
      </button>
  
      <button class="carousel-control-next" data-bs-target="#ft-slide" type="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden"></span>
      </button>
  </div>

	<div class="container">

    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v12.0" nonce="xnjZciI9"></script>

    <div class="row my-5">
      <div class="col-md-6">
        <div class="youtube-player" data-id="GKgqOoOPPj4"></div>
      </div>

      <div class="col-md-6">

        <div class="ft-about">
        <h2 class="ft-about-home"> <img width="10%" src="{{ URL::asset('/img/ft_icon.png') }}" title="FlipTop Battle League"> ABOUT FLIPTOP </h2>
        <p> FlipTop is a grassroots, self-produced, events and artist management company, with its first brainchild in the FlipTop Battle League. <br><br>

        The FlipTop Battle League is the Philippines’ first premier – and the world’s most-viewed – rap battle league. It is popularly credited for the resurgence and widespread acceptance of HipHop culture in the Philippines since its inception in February 2010, and continues to champion all other HipHop elements in its variety of events and online content. It is home to the country’s top HipHop talents and houses divisions in the main island groups of Luzon, Visayas, and Mindanao. <a href="/about"> Read more... </a></p>

        <a class="btn btn-warning" href="https://www.patreon.com/fliptop" target="_blank" role="button">
          <i class="fab fa-patreon"></i> Support us on Patreon</a>
        </div>
      </div>
    </div>

    <div class="ft-feature"> <h3> FEATURED ARTICLES </h3> </div>

    <div class="row my-4">
      <div class="owl-carousel owl-theme">
      @foreach($articles as $article)
        <div class="ml-2 mr-2">
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
    </div>

    <div class="ft-feature"> <h3> LATEST BATTLES </h3> </div>

    <div class="row my-3">
      @foreach($battles as $battle)
        <div class="col-md-4 my-3">
          <div class="youtube-player" data-id="{{ $battle->url }}"></div>

          <h4>{{ $battle->title }}</h4>
          <h6><span class="badge bg-light text-dark"> {{ $battle->event }} </span></h6><hr>
          <small>{{ $battle->desc }}</small>
        </div>
      @endforeach

    </div>

    <div class="row my-3 mb-5">
      <div class="col-md-4 my-3">
        <div class="ft-feature mb-3"> <h3> PERFORMANCES </h3> </div>
          @foreach($perfs as $perf)
          <div class="youtube-player" data-id="{{ $perf->url }}"></div>

          <h4>{{ $perf->title }}</h4>
          <h6 class="mb-5"><span class="badge bg-light text-dark"> {{ $perf->event }} </span></h6>
          @endforeach
      </div>

      <div class="col-md-4 my-3">
        <div class="ft-feature mb-3"> <h3> SOCIAL MEDIA </h3> </div>
        <div class="fb-page" data-href="https://www.facebook.com/fliptop.battleleague" data-tabs="timeline" data-width="400" data-height="400" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/fliptop.battleleague" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/fliptop.battleleague">FlipTop Battle League</a></blockquote></div>

        <br><br>

        <a class="twitter-timeline" data-height="400" href="https://twitter.com/FlipTop_Battles?ref_src=twsrc%5Etfw">Tweets by FlipTop_Battles</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
      </div>

      <div class="col-md-4 my-3">
        <div class="ft-feature mb-3"> <h3> SEGMENTS </h3> </div>
          @foreach($segments as $segment)
          <div class="youtube-player" data-id="{{ $segment->url }}"></div>

          <h4>{{ $segment->title }}</h4>
          <h6 class="mb-5"><span class="badge bg-light text-dark"> {{ $segment->segment }} </span></h6>
          @endforeach
      </div>

    </div>
  </div> 

@endsection

@section('owl')

<script>
    $('.owl-carousel').owlCarousel({
      stagePadding:0,
      loop:false,
      margin:10,
      dots:true,
      nav:true,
      responsive:{
          0:{
              items:1
          },
          600:{
              items:2
          },
          1000:{
              items:3
          }
        }
    })
</script>

@endsection