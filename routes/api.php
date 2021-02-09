<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('author/{id}/getPosts', "PostController@getAuthorPosts");

Route::get('category/{id}/getPosts', "PostController@getCategoryPosts");

Route::get('getAuthors', "PostController@getAuthors");

Route::get('post/{id}', "PostController@getPostById");
