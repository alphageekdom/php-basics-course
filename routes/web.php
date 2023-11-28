<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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
    return view('welcome');
});

Route::get('/{genre}/{artist}/{song}', function (Request $request, $genre, $artist, $song) {
    // dd($request->query("min"));
    $content = "<h1>{$song} {$request->query("min")}:{$request->query("max")}</h1> <h2>{$artist}</h2> <h4>{$genre}<h4>";
    return $content;
});

