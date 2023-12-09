<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Back\DashboardController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SesiController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\ProfileController;

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
    return view('index');
});

//ADMIN ROUTES
Route::get('/dashboard', [DashboardController::class, 'index']);
    
Route::get('/artikel', [ArtikelController::class, 'index'])->name('artikel');
Route::get('/artikel/delete/{id}', [ArtikelController::class, 'delete'])->name('artikel.delete');
Route::get('/artikel/update/{id}', [ArtikelController::class, 'updateArticle']);
Route::post('/artikel/update/{id}', [ArtikelController::class, 'doUpdate']);
Route::get('/artikel/detail/{id}', [ArtikelController::class, 'detail'])->name('artikel.detail');

Route::get('/kategori', [KategoriController::class, 'index'])->name('kategori');
Route::get('/kategori/add', [KategoriController::class, 'add']);
Route::post('/kategori/add', [KategoriController::class, 'store']);
Route::get('/kategori/delete/{id}', [KategoriController::class, 'delete'])->name('kategori.delete');

Route::get('/game', [GameController::class, 'index']);

Route::get('/profile', [ProfileController::class, 'index']);

Route::get('/sesi',[SesiController::class, 'index']);
Route::post('/sesi/login',[SesiController::class, 'login']);
Route::get('/sesi/register',[SesiController::class, 'register']);
Route::post('/sesi/create',[SesiController::class, 'create']);
Route::get('/sesi/logout', [SesiController::class, 'logout']);
Route::get('/artikel/add', [ArtikelController::class, 'addArticle'])->name('article.add');
Route::post('/artikel/store', [ArtikelController::class, 'store'])->name('article.store');