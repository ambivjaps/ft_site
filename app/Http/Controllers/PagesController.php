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
		$articles = Post::where('featured', '=', '1')->orderByDesc('id')->take(6)->get();
    	$battles = Battle::orderByDesc('id')->take(3)->get();
    	$perfs = Performance::orderByDesc('id')->take(3)->get();
    	$segments = SegmentVid::orderByDesc('id')->take(3)->get();

    	return view('pages.index', compact('slides', 'articles', 'battles', 'perfs', 'segments'));
	}

	/* Articles */

	public function articles() 
	{
		$articles = Post::where('status', '=', 'PUBLISHED')->orderByDesc('id')->paginate(12);

   	 	return view('pages.articles', compact('articles'));
	}

	public function catGeneral()
	{
		$articles = Post::where('category_id', '=', '1')->orderByDesc('id')->paginate(12);

   	 	return view('category.general', compact('articles'));
	}

	public function catCrewsIn()
	{
		$articles = Post::where('category_id', '=', '2')->orderByDesc('id')->paginate(12);

   	 	return view('category.crewsin', compact('articles'));
	}

	public function catMCSpot()
	{
		$articles = Post::where('category_id', '=', '3')->orderByDesc('id')->paginate(12);

   	 	return view('category.mcspot', compact('articles'));
	}

	public function catBehind()
	{
		$articles = Post::where('category_id', '=', '4')->orderByDesc('id')->paginate(12);

   	 	return view('category.behind', compact('articles'));
	}

	public function catAlbum()
	{
		$articles = Post::where('category_id', '=', '5')->orderByDesc('id')->paginate(12);

   	 	return view('category.album', compact('articles'));
	}

	/* Emcees */

	public function emcees()
	{
		$emcees = Emcee::orderBy('name')->paginate(20);

		return view('pages.emcees', compact('emcees'));
	}

	public function emceesMM()
	{
		$emcees = Emcee::where('division', '=', 'Metro Manila')->orderBy('name')->paginate(20);

		return view('emcees.mm', compact('emcees'));
	}

	public function emceesCLuzon()
	{
		$emcees = Emcee::where('division', '=', 'Central Luzon')->orderBy('name')->paginate(20);

		return view('emcees.cluzon', compact('emcees'));
	}

	public function emceesCala()
	{
		$emcees = Emcee::where('division', '=', 'Calabarzon')->orderBy('name')->paginate(20);

		return view('emcees.cala', compact('emcees'));
	}

	public function emceesVis()
	{
		$emcees = Emcee::where('division', '=', 'Visayas')->orderBy('name')->paginate(20);

		return view('emcees.vis', compact('emcees'));
	}

	public function emceesMin()
	{
		$emcees = Emcee::where('division', '=', 'Mindanao')->orderBy('name')->paginate(20);

		return view('emcees.min', compact('emcees'));
	}

	/* Videos */

	public function videos() 
	{
		$battles = EventBattle::orderByDesc('id')->take(10)->get();
    	$perfs = EventPerformance::orderByDesc('id')->take(4)->get();
    	$segments = Segment::orderBy('id')->take(10)->get();

    	$vid_battles = Battle::orderByDesc('id')->take(1)->get();
    	$vid_perfs = Performance::orderByDesc('id')->take(1)->get();
    	$vid_segments = SegmentVid::orderByDesc('id')->take(1)->get();

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

	/* Radio 

	public function radio() 
	{
	 	$stations = Station::all();

    	return view('pages.radio', compact('stations'));
	}

	*/

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
