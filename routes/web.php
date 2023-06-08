<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\Post;

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
/*
//desplay all posts in a home page
Route::get('/', function () {
    $posts=Post::all();
    return view('home', ['posts'=>$posts]);
});
*/
/*
// the user see only his/her post from old to latest, but it misses the entire
consept of relationships
Route::get('/', function () {
    $posts=Post::where('user_id', auth()->id())->get();
    return view('home', ['posts'=>$posts]);
});
*/

Route::get('/', function () {
    $posts = auth()->user()->userCoolPosts()->latest()->get();
    return view('home', ['posts'=>$posts]);
});

Route::post('/register', [UserController::class, 'registerUser']);
Route::post('/logout', [UserController::class, 'logoutuser']); 
Route::post('/login',[UserController::class, 'loginuser']);

//Route related to posts
Route::post('/create-post', [PostController::class, 'createPost']);