<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComicController;


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
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/characters', function () {

    return view('characters');
});


Route::resource('comics', ComicController::class);


Route::get('/movies', function () {

    return view('movies');
});
Route::get('/tv', function () {

    return view('tv');
});
Route::get('/games', function () {
    $games = config('gamesdb.games');
    return view('games.index', compact('games'));
});

Route::get('/games/{id}', function ($id) {
    $games = config('gamesdb.games');
    if ($id >= 0 && $id < count($games)) {
        $game = $games[$id];
        return view('games.show', compact('game'));
    } else {
        abort(404);
    }
})->name('games.show');

Route::get('/collectibles', function () {

    return view('collectibles');
});
Route::get('/videos', function () {

    return view('videos');
});
Route::get('/fans', function () {

    return view('fans');
});
Route::get('/news', function () {

    return view('news');
});
Route::get('/shop', function () {

    return view('shop');
});
