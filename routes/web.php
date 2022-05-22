<?php
use App\Post;
use App\User;
use App\Http\Resources\PostResource;
use App\Http\Resources\UserResource;
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

Route::get('/user/{id}', function ($id) {
    $User = User::with('posts')->findorfail($id);
    return new UserResource($User);
});

Route::get('/{id}', function ($id) {
    $Post = Post::with('user')->findorfail($id);
    return new PostResource($Post);
});

Route::get('/', function () {
    $Post = Post::with('user')->get();
    return PostResource::collection($Post);
});
