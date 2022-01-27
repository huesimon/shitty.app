<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Requests\StorePostRequest;

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

Route::post('posts', function (StorePostRequest $request) {
    return $request->all();
});


Route::get('posts', function (Request $request) {
    return Post::all();
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
