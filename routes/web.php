<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::put('/profile', App\Http\Controllers\UserImageUpdateController::class)->name('profile.image.update');
});

// Tweet
Route::get('/tweet', App\Http\Controllers\Tweet\IndexController::class)->name('tweet.index');
Route::get('/tweet#{tweetId}', App\Http\Controllers\Tweet\IndexController::class)->name('tweet.index.each');

Route::middleware('auth')->group(function () {
    Route::post('/tweet/create', App\Http\Controllers\Tweet\CreateController::class)->name('tweet.create');

    Route::get('/tweet/update/{tweetId}', App\Http\Controllers\Tweet\Update\IndexController::class)->name('tweet.update.index');
    Route::put('/tweet/update/{tweetId}', App\Http\Controllers\Tweet\Update\PutController::class)->name('tweet.update.put');

    Route::delete('/tweet/delete/{tweetId}', App\Http\Controllers\Tweet\DeleteController::class)->name('tweet.delete');

    Route::put('/tweet/update/likes/{tweetId}{userId}', App\Http\Controllers\Tweet\Update\PutLikesController::class)->name('tweet.update.likes');
});

require __DIR__ . '/auth.php';
