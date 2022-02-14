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
    return view('guest.characters');
})->name('characters');