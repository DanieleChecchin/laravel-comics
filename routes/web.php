<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.home');
}) -> name('home') ;

// Calciatori index
Route::get('/players', function () {
    $players =config('db.players');
    return view('pages.player-index', compact('players'));
}) -> name('players-index');

// Shop index
Route::get('/shop', function () {
    $shop =config('dbShop.juventusMerch');
    return view('pages.shop-index', compact('shop'));
}) -> name('shop-index');

// Calciatori show
Route::get('/players/{index}', function (string $index) {
    $players =config('db.players');
    if(isset($players[$index])){
        $player = $players[$index];
    } else{
        abort(404);
    }
    return view('pages.player-show', compact('player'));
}) -> name('players-show') ;

// Shop show
Route::get('/shop/{index}', function (string $index) {
    $shop =config('dbShop.juventusMerch');
    if(isset($shop[$index])){
        $article = $shop[$index];
    } else{
        abort(404);
    }
    return view('pages.shop-show', compact('article'));
}) -> name('shop-show') ;


