<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::get('/posts', function() {
//     return response() -> json([
//         'posts' => [
//             [
//                 'title' => 'Post one'
//             ],
//             [
//                 'title' => 'Post 2'
//             ],
//             [
//                 'title' => 'Post 3'
//             ],
//             [
//                 'title' => 'Post 4'
//             ]
//             ]
//         ]);
// });


Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
