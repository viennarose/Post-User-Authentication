<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;

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
    return view('landing');
});
Route::get('/login', function () {
    if(!auth()->guest()){
        return redirect('/dashboard');
    }
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::group(['middleware'=>'auth'], function(){
    Route::get('/dashboard', [AuthController::class, 'dashboard']);
    Route::get('/users', [AuthController::class, 'users']);
    Route::get('/posts/create', [PostController::class, 'create']);
    Route::post('/posts', [PostController::class, 'store']);
    Route::get('/posts/my-posts', [PostController::class, 'myPosts']);
    Route::get('/posts/recent', [PostController::class, 'recentPosts']);
    Route::get('/posts/{post}', [PostController::class, 'show']);
    Route::get('/posts/edit/{post}', [PostController::class, 'edit'])->middleware('can-edit');
    Route::put('/posts/{post}', [PostController::class, 'update'])->middleware('can-edit');

    
    
});

Route::get('/logout', [AuthController::class, 'logout']);
