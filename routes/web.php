<?php

use App\Http\Controllers\ListingsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Listings;


Route::get('/', [ListingsController::class, 'index']);


Route::get('/about', function() {
    return response('<h1> Hello world from kenya at laravel<h1>', 200)
    ->header('Content-type', 'text/plain')
    ->header('foo', 'bar');
});

// routes with wild cards 
Route::get('posts/{id}', function($id) {
    return response('<h1> Posts</h1>: ' . $id);
})->where('id', '[0-9]+');

Route::get('/search', function(Request $request) {
    dd($request);
});


// single listing 

Route::get('/single-list/{listing}', [ListingsController::class, 'show']);