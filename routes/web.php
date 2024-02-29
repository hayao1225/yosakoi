<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\PrefectureController;
use App\Http\Controllers\PostController;

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

Route::get('/teams', [TeamController::class, 'index']);
Route::get('/teams/create', [TeamController::class, 'create']);//投稿フォームの表示
Route::get('/teams/{team}', [TeamController::class, 'show']);//投稿詳細画面の表示
//'/teams/{対象データのID}'にGetリクエストが来たら、TeamControllerのshowメソッドを実行する。
Route::post('/teams', [TeamController::class, 'store']);//画像を含めた投稿の保存処理
Route::get('/teams/{team}/edit', [TeamController::class, 'edit']);
Route::put('/teams/{team}', [TeamController::class, 'update']);
Route::delete('/teams/{team}', [TeamController::class,'delete']);

Route::get('/prefectures/{prefecture}', [PrefectureController::class,'index']);

Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class ,'show']);
Route::post('/posts', [PostController::class, 'store']);
Route::get('/posts/{post}/edit', [PostController::class, 'edit']);
Route::put('/posts/{post}', [PostController::class, 'update']);
Route::delete('/posts/{post}', [PostController::class,'delete']);


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
});

require __DIR__.'/auth.php';
