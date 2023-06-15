<?php
use App\Http\Controllers\VideoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


//Загрузка видео
Route::get('video-upload', [ VideoController::class, 'getVideoUploadForm' ])->name('get.video.upload');
Route::post('video-upload', [ VideoController::class, 'uploadVideo' ])->name('store.video');
//Категории
Route::get('categories', [CategoryController::class, 'categoryList'])->name('categories.list');
//Просмотр всех видеороликов
Route::get('/videoRols/all', [VideoController::class, 'allData'])->name('video.rols');
//Просмотр всех видеороликов
Route::get('home', [VideoController::class, 'limite'])->name('home');
//Главная страница
Route::get('/', function () {
    return view('welcome');
});

//Действия с профилем
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
