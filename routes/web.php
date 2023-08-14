<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserSeeNewPostsController;
use App\Http\Controllers\VerificationController;
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


Route::get('/', [PostController::class, 'getNewPosts'])->name('home');

Route::get('/login', [AuthController::class, 'showFormLogin'])->name('show-form-login');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/verify-mail/{userId}', [AuthController::class, 'verifyEmail'])->name('verify-email');

Route::post('/register-see-new-post', [UserSeeNewPostsController::class, 'create'])->name('register-see-new-post');
Route::prefix('posts')->group(function () {
    Route::get('/', [PostController::class, 'show'])->name('show-form-create-post');
    Route::post('/', [PostController::class, 'create'])->name('create-post')->middleware('verified-account');
});

