<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Ad;
use App\Models\Category;
use App\Models\Emcee;
use App\Models\Battle;
use App\Models\Performance;
use App\Models\Segment;
use App\Models\SegmentVid;
use App\Models\EventBattle;
use App\Models\EventPerformance;
use App\Models\Slide;
use App\Models\Station;
use App\Models\Promo;
use App\Models\Lyric;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Generator;


class PagesController extends Controller
{

	public function index()
	{
		$slides = Slide::all();
		$articles = Post::orderByDesc('id')->paginate(3);
    	$battles = Battle::orderByDesc('id')->paginate(3);
    	$perfs = Performance::orderByDesc('id')->paginate(3);
    	$segments = SegmentVid::orderByDesc('id')->paginate(3);

    	return view('pages.index', compact('slides', 'articles', 'battles', 'perfs', 'segments'));
	}

	/* Articles */

	public function articles() 
	{
		$articles = Post::orderByDesc('id')->paginate(20);
		$categories = Category::all();

   	 	return view('pages.articles', compact('articles', 'categories'));
	}

	/* Emcees */

	public function emcees()
	{
		$emcees = Emcee::orderBy('name')->paginate(20);

		return view('pages.emcees', compact('emcees'));
	}

	public function emceesMM()
	{
		$emcees = Emcee::all()->sortBy('name');

		return view('emcees.mm', compact('emcees'));
	}

	public function emceesCLuzon()
	{
		$emcees = Emcee::all()->sortBy('name');

		return view('emcees.cluzon', compact('emcees'));
	}

	public function emceesCala()
	{
		$emcees = Emcee::all()->sortBy('name');

		return view('emcees.cala', compact('emcees'));
	}

	public function emceesVis()
	{
		$emcees = Emcee::all()->sortBy('name');

		return view('emcees.vis', compact('emcees'));
	}

	public function emceesMin()
	{
		$emcees = Emcee::all()->sortBy('name');

		return view('emcees.min', compact('emcees'));
	}

	/* Videos */

	public function videos() 
	{
		$battles = EventBattle::orderByDesc('id')->paginate(4);
    	$perfs = EventPerformance::orderByDesc('id')->paginate(4);
    	$segments = Segment::orderBy('id')->paginate(4);

    	$vid_battles = Battle::orderByDesc('id')->paginate(1);
    	$vid_perfs = Performance::orderByDesc('id')->paginate(1);
    	$vid_segments = SegmentVid::orderByDesc('id')->paginate(1);

    	return view('pages.videos', compact('battles', 'perfs', 'segments', 'vid_battles', 'vid_perfs', 'vid_segments'));
	}

	public function videosBattle()
	{
	    $battles = EventBattle::orderByDesc('id')->paginate(20);

    	return view('videos.battle', compact('battles'));
	}

	public function videosPerf()
	{
	    $perfs = EventPerformance::all();

    	return view('videos.perf', compact('perfs'));
	}

	public function videosSegment()
	{
	    $segments = Segment::all();

    	return view('videos.segment', compact('segments'));
	}

	/* Radio */

	public function radio() 
	{
	 	$stations = Station::all();

    	return view('pages.radio', compact('stations'));
	}

	/* Promos */

	public function promos()
	{
	  	$promos = Promo::all();

    	return view('pages.promos', compact('promos'));
	}

	/* public function eventQr(Request $req)
	{
		$email = $req->input('email');
        $name = $req->input('name');
        $promo_code = $req->input('promo');

        $ft_name = $name.", "."#FlipTopMagIngay!";
        $ft_code = "FT"."-".$promo_code;

        $qr_code = new Generator;
        $ft_data = $qr_code->format('png')->merge(public_path('img/event_promo.png'), 0.7, true)
       		 			   ->eyeColor(0, 0, 100, 255, 250, 0, 0)
        				   ->size(500)
        				   ->margin(3)
        				   ->errorCorrection('H')
        				   ->email($email, $ft_name, $ft_code);

        return response($ft_data)->header('Content-type','image/png');
	} */

	/* Lyrics */

	public function lyrics()
	{
		$lyrics = Lyric::orderBy('title')->paginate(50);

		return view('pages.lyrics', compact('lyrics'));
	}

	/* Tryouts */

	public function tryouts() {
		return view('pages.tryouts');
	}

	/* About */

	public function about() {
		return view('pages.about');
	}

	/* Search Engine */

	public function searchLyric()
	{
		$search_text = $_GET['query'];
		$query_song = Lyric::where('title', 'LIKE', '%'.$search_text.'%')
							->orWhere('album', 'LIKE', '%'.$search_text.'%')
							->orWhere('artist', 'LIKE', '%'.$search_text.'%')
							->orWhere('producer', 'LIKE', '%'.$search_text.'%')
							->orWhere('year', 'LIKE', '%'.$search_text.'%')
							->orderBy('title')
							->get();

		return view('search.query_song', compact('search_text', 'query_song'));
	}

	public function searchBattle()
	{
		$search_text = $_GET['query'];
		$query_battle = EventBattle::where('title', 'LIKE', '%'.$search_text.'%')
							->orWhere('desc', 'LIKE', '%'.$search_text.'%')
							->orWhere('year', 'LIKE', '%'.$search_text.'%')
							->get();

		return view('search.query_battle', compact('search_text', 'query_battle'));
	}

}
