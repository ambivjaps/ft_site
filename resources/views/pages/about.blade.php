@extends('layouts.app')

@section('title')
<title> About | FlipTop Battle League </title>
@endsection

@section('meta')
<meta property="og:url"                content="https://www.fliptop.com.ph/about" />
<meta property="og:title"              content="About | FlipTop Battle League" />
<meta property="og:description"        content="The First Filipino Rap Battle League" />
<meta property="og:image"              content="{{ URL::asset('/img/bg_og.jpg') }}" />
<meta name="twitter:card" 			   content="summary_large_image">
@endsection

@section('content')

	<div class="container">
		<div class="row my-5">
			<hr>
			<div class="col-md-4">
				<center>
					<h1><i class="fas fa-eye"></i></h1>
					<h4 class="ft-about-title"> OVER 2 BILLION VIEWS ON YOUTUBE </h4>
				</center>
			</div>

			<div class="col-md-4">
				<center>	
					<h1><i class="fas fa-globe-americas"></i></h1>
					<h4 class="ft-about-title"> WORLD'S MOST VIEWED RAP BATTLE LEAGUE </h4>
				</center>
			</div>

			<div class="col-md-4">
				<center>
					<h1><i class="fas fa-users"></i></h1>
					<h4 class="ft-about-title"> 6.4 MILLION SUBSCRIBERS </h4>
				</center>
			</div>
			<hr>
		</div>

			<div class="youtube-player" data-id="GKgqOoOPPj4"></div>

		<div class="ft-about mt-4 mb-5">
			<p> FlipTop is a grassroots, self-produced, events and artist management company, with its first brainchild in the FlipTop Battle League.<br><br>

			The FlipTop Battle League is the Philippines’ first premier – and the world’s most-viewed – rap battle league. It is popularly credited for the resurgence and widespread acceptance of HipHop culture in the Philippines since its inception in February 2010, and continues to champion all other HipHop elements in its variety of events and online content. It is home to the country’s top HipHop talents and houses divisions in the main island groups of Luzon, Visayas, and Mindanao.<br><br>

			FlipTop takes much pride in having uplifted, and given the spotlight to, Filipino HipHop talents that traditional society and "the industry" would have easily disregarded otherwise. Its top 40 talents have become nationwide celebrities and have branched out and flourished in other industries and sectors besides their HipHop careers.<br><br> 

			<div class="row my-4">
				<div class="col-md-4">
					<div class="youtube-player" data-id="XCV_CfQtfj4"></div>
				</div>

				<div class="col-md-4">
					<div class="youtube-player" data-id="sHanaRM7NmY"></div>
				</div>

				<div class="col-md-4">
					<div class="youtube-player" data-id="WzF8CH2KyKw"></div>
				</div>
			</div>

			It recently held it's 10th Anniversary culminating event in the The FlipTop Festival; a 2-day, 3-staged music festival that featured over 200 talents of the different elements from all over the country, featuring both the unsung underground heroes as well as household names that have achieved mainstream status.<br><br>

			We have been viral practically twice a week for the last decade, have over 2 billion views, 6.59 million subscribers, and all in spite of the unashamed piracy prevalent in our culture as well as longstanding lack of any true sponsorship or assistance. 
			</p>
		</div>

			<hr><center>
				<h1><i class="fas fa-handshake"></i></h1>
				<h4> Become a partner! Email us: </h4>
				<h3 class="ft-about-title"> partner@fliptop.com.ph </h3>
			</center><hr>

		<div class="ft-about mb-5">
			<center>
				<a class="btn btn-warning mt-3" href="https://www.patreon.com/fliptop" target="_blank" role="button">
     			<i class="fab fa-patreon"></i> Support us on Patreon</a>
     		</center>
     	</div>
  	</div> 

@endsection