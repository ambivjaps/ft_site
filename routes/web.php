<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Navigation */

Route::get('/', [PagesController::class, 'index']);

Route::get('/articles', [PagesController::class, 'articles']);

Route::get('/articles/category/general', [PagesController::class, 'catGeneral']);
Route::get('/articles/category/crews-in', [PagesController::class, 'catCrewsIn']);
Route::get('/articles/category/mc-spotlight', [PagesController::class, 'catMCSpot']);
Route::get('/articles/category/behind-the-sound', [PagesController::class, 'catBehind']);
Route::get('/articles/category/album-review', [PagesController::class, 'catAlbum']);

Route::get('/emcees', [PagesController::class, 'emcees']);
Route::get('/emcees/metro-manila', [PagesController::class, 'emceesMM']);
Route::get('/emcees/central-luzon', [PagesController::class, 'emceesCLuzon']);
Route::get('/emcees/calabarzon', [PagesController::class, 'emceesCala']);
Route::get('/emcees/visayas', [PagesController::class, 'emceesVis']);
Route::get('/emcees/mindanao', [PagesController::class, 'emceesMin']);

Route::get('/videos', [PagesController::class, 'videos']);
Route::get('/videos/battle', [PagesController::class, 'videosBattle']);
Route::get('/videos/battle/search', [PagesController::class, 'searchBattle']);
Route::get('/videos/perf', [PagesController::class, 'videosPerf']);
Route::get('/videos/segment', [PagesController::class, 'videosSegment']);

/*Route::get('/radio', [PagesController::class, 'radio']);*/

Route::get('/promos', [PagesController::class, 'promos']);
/* Route::post('/promos/yield-qr', [PagesController::class, 'eventQr']); */

Route::get('/lyrics', [PagesController::class, 'lyrics']);
Route::get('/lyrics/search', [PagesController::class, 'searchLyric']);

Route::get('/about', [PagesController::class, 'about']);

/* Individual Pages */

Route::get('articles/{slug}', function($slug){
    $article = App\Models\Post::where('slug', '=', $slug)->firstOrFail();
    $read_also = App\Models\Post::where('id', '!=', $article->id)->inRandomOrder()->take(4)->get();
    $ads = App\Models\Ad::inRandomOrder()->take(2)->get();

    return view('single.article', compact('article', 'read_also', 'ads'));
});

Route::get('emcees/{slug}', function($slug){
    $emcee = App\Models\Emcee::where('slug', '=', $slug)->firstOrFail();
    $videos = App\Models\Battle::where('title', 'LIKE', '%'.$emcee->name.'%')->orderByDesc('id')->take(3)->get();

    return view('single.emcee', compact('emcee', 'videos'));
});

Route::get('videos/battle/{slug}', function($slug){
    $event_battle = App\Models\EventBattle::where('slug', '=', $slug)->firstOrFail();
    $videos = App\Models\Battle::where('event', '=', $event_battle->title)->get();

    return view('single.battle', compact('event_battle', 'videos'));
});

Route::get('videos/perf/{slug}', function($slug){
    $event_perf = App\Models\EventPerformance::where('slug', '=', $slug)->firstOrFail();
    $videos = App\Models\Performance::where('event', '=', $event_perf->title)->get();

    return view('single.perf', compact('event_perf', 'videos'));
});

Route::get('videos/segment/{slug}', function($slug){
    $segment = App\Models\Segment::where('slug', '=', $slug)->firstOrFail();
    $videos = App\Models\SegmentVid::where('segment', '=', $segment->title)->get();

    return view('single.segment', compact('segment', 'videos'));
});

/*
Route::get('radio/{slug}', function($slug){
    $station = App\Models\Station::where('slug', '=', $slug)->firstOrFail();

    return view('single.station', compact('station'));
});*/

Route::get('lyrics/{slug}', function($slug){
    $lyric = App\Models\Lyric::where('slug', '=', $slug)->firstOrFail();
    $ads = App\Models\Ad::inRandomOrder()->take(2)->get();

    return view('single.lyric', compact('lyric', 'ads'));
});



/* Voyager */

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
