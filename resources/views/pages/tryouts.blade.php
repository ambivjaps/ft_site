@extends('layouts.app')

@section('title')
<title> Tryouts | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph/tryouts" />
<meta property="og:title"              content="Tryouts | FlipTop Battle League" />
<meta property="og:description"        content="The First Filipino Rap Battle League" />
<meta property="og:image"              content="{{ URL::asset('/img/bg_og.jpg') }}" />
<meta name="twitter:card" 			   content="summary_large_image">
@endsection

@section('content')

	<div class="container-xxl">
		<div class="row my-5">
			<div class="col-md-5 my-3">
				<img src="{{ URL::asset('/img/tryouts/POI7_1.jpg') }}" title="Process of Illumination 7 Tryouts" style="width:100%">
			</div>

			<div class="col-md-6 my-3">
				<h2> Process of Illumination 7 Tryouts </h2><hr>
				<i> Submissions have ended. </i>
				<p> Stay tuned for the list of successful applicants! </p>
				<h5> #FlipTop2021 #FlipTopPOI7 </h5>
			</div>
		</div>
  	</div> 

@endsection