<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $data = ['comics' => config('comics'), 'nomePagina' => 'DC Comics - Home'];
    return view('guest.home', $data);
})->name('home');

Route::get('/comics/{id}', function ($id) {
    $collection = collect(config('comics'));
    $comic = $collection->where('id', $id);

    // if ($comic-count() === 0) {
    //     abort(404);
    // }

    $singleComic = '';
    foreach ($comic as $value) {
        $singleComic = $value;
    }


    return view('guest.comic', [
        'comic' => $singleComic,
        'nomePagina' => $singleComic['title'],
    ]);
})->name('comic');

Route::get('/characters', function () {
    $data = ['nomePagina' => 'characters'];
    return view('guest.characters', $data);
})->name('characters');

Route::get('/movies', function () {
    $data = ['nomePagina' => 'movies'];
    return view('guest.movies', $data);
})->name('movies');

Route::get('/tv', function () {
    $data = ['nomePagina' => 'tv'];
    return view('guest.tv', $data);
})->name('tv');

Route::get('/games', function () {
    $data = ['nomePagina' => 'games'];
    return view('guest.games', $data);
})->name('games');

Route::get('/collectibles', function () {
    $data = ['nomePagina' => 'collectibles'];
    return view('guest.collectibles', $data);
})->name('collectibles');

Route::get('/videos', function () {
    $data = ['nomePagina' => 'videos'];
    return view('guest.videos', $data);
})->name('videos');

Route::get('/fans', function () {
    $data = ['nomePagina' => 'fans'];
    return view('guest.fans', $data);
})->name('fans');

Route::get('/news', function () {
    $data = ['nomePagina' => 'news'];
    return view('guest.news', $data);
})->name('news');

Route::get('/shop', function () {
    $data = ['nomePagina' => 'shop'];
    return view('guest.shop', $data);
})->name('shop');