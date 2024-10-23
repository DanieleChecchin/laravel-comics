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

Route::get('/players', function () {
    $players =config('db.players');
    return view('pages.player-index', compact('players'));
}) -> name('players-index');

Route::get('/players/{index}', function (string $index) {
    $players =config('db.players');
    if(isset($players[$index])){
        $player = $players[$index];
    } else{
        abort(404);
    }
    return view('pages.player-show', compact('player'));
}) -> name('players-show') ;

