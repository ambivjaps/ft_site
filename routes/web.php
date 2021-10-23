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

Route::get('/radio', [PagesController::class, 'radio']);

Route::get('/promos', [PagesController::class, 'promos']);
/* Route::post('/promos/yield-qr', [PagesController::class, 'eventQr']); */

Route::get('/lyrics', [PagesController::class, 'lyrics']);
Route::get('/lyrics/search', [PagesController::class, 'searchLyric']);

/* Route::get('/tryouts', [PagesController::class, 'tryouts']); */
Route::get('/about', [PagesController::class, 'about']);

/* Individual Pages */

Route::get('articles/{slug}', function($slug){
    $article = App\Models\Post::where('slug', '=', $slug)->firstOrFail();
    $read_also = App\Models\Post::inRandomOrder()->paginate(4);
    $ads = App\Models\Ad::inRandomOrder()->paginate(4);

    return view('single.article', compact('article', 'read_also', 'ads'));
});

Route::get('articles/category/{slug}', function($slug){
    $category = App\Models\Category::where('slug', '=', $slug)->firstOrFail();
    $articles = App\Models\Post::orderByDesc('id')->paginate(6);
    $categories = App\Models\Category::all();

    return view('single.category', compact('category', 'articles', 'categories'));
});

Route::get('emcees/{slug}', function($slug){
    $emcee = App\Models\Emcee::where('slug', '=', $slug)->firstOrFail();

    return view('single.emcee', compact('emcee'));
});

Route::get('videos/battle/{slug}', function($slug){
    $event_battle = App\Models\EventBattle::where('slug', '=', $slug)->firstOrFail();
    $videos = App\Models\Battle::all();

    return view('single.battle', compact('event_battle', 'videos'));
});

Route::get('videos/perf/{slug}', function($slug){
    $event_perf = App\Models\EventPerformance::where('slug', '=', $slug)->firstOrFail();
    $videos = App\Models\Performance::all();

    return view('single.perf', compact('event_perf', 'videos'));
});

Route::get('videos/segment/{slug}', function($slug){
    $segment = App\Models\Segment::where('slug', '=', $slug)->firstOrFail();
    $videos = App\Models\SegmentVid::all();

    return view('single.segment', compact('segment', 'videos'));
});

Route::get('radio/{slug}', function($slug){
    $station = App\Models\Station::where('slug', '=', $slug)->firstOrFail();

    return view('single.station', compact('station'));
});

Route::get('lyrics/{slug}', function($slug){
    $lyric = App\Models\Lyric::where('slug', '=', $slug)->firstOrFail();

    return view('single.lyric', compact('lyric'));
});



/* Voyager */

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
