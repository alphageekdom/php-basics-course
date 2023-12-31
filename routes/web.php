<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
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
    return view('pages/home');
});

Route::get('/about', function () {
    return view('pages/about');
});

Route::get('/', [PageController::class, "index"]);
Route::get('/about', [PageController::class, "about"]);


Route::prefix('/pop')->group(function() {
    Route::get('/{artist}/{song}', function (Request $request, $artist, $song) {
        // dd($request->query("min"));
        $content = "<h1>{$song} {$request->query("min")}:{$request->query("max")}</h1> <h2>{$artist}</h2> <h4>Pop<h4>";
        return $content;
    });

    Route::get('/test', function () {
        return "test";
    });
    
    Route::get('/about', function () {
        return "about";
    });
    
});



Route::get('/products', [ProductController::class, "index"]);