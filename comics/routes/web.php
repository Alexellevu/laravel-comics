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
   
    return view('home');
    
})->name ('home');



Route::get('/comics', function(){
    $comics = config('comic.data');
    return view('comics', compact('comics'));
})->name ('comics');

Route::get('/characters', function(){

    return 'Characters page';
})->name ('characters');



Route::get('/movies', function(){

    return 'movies page';
})->name ('movies');


Route::get('/tv', function(){

    return 'tv page';
})->name ('tv');

Route::get('/games', function(){

    return 'games page';
})->name ('games');

Route::get('/collectibles', function(){

    return 'Collectibles page';
})->name ('collectibles');

Route::get('/videos', function(){

    return 'videos page';
})->name ('videos');

Route::get('/fans', function(){

    return 'fans page';
})->name ('fans');

Route::get('/news', function(){

    return 'News page';
})->name ('news');

Route::get('/shop', function(){

    return 'shop page';
})->name ('shop');