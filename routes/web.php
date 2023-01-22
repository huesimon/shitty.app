<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
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
    return view('components.post.index',[
        'posts' => Post::all()
    ]);
})->name('home');

Route::get('/b/{number_plate}', function ($number_plate) {
    $posts = Post::where('number_plate', $number_plate)->get();

    return $posts;
});

Route::post('/b/{post:number_plate}', function (Post $post) {
    return $post->votes += 1;
});

Route::resource('posts', PostController::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
