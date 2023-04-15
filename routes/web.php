<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\FruitsController;

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

/*Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});*/

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [FruitsController::class,'index'])
    ->middleware(['auth', 'verified'])->name('fruits.home');

Route::get('/fruits/list',[FruitsController::class,'index'])
    ->middleware(['auth', 'verified'])->name('fruits.index');

Route::get('/fruits/add', function () {
        return Inertia::render('Fruits/Create');})
        ->middleware(['auth', 'verified']);

Route::post('/fruits/create',[FruitsController::class,'create'])
        ->middleware(['auth', 'verified'])->name('fruits.create');

Route::delete('/fruits/del/{fruit}/{fruitname}',[FruitsController::class,'destroy'])
        ->middleware(['auth', 'verified'])->name('fruits.destroy');

Route::put('/fruits/{fruit}/update',[FruitsController::class,'update'])
        ->middleware(['auth', 'verified'])->name('fruits.update');

