<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

use App\Http\Controllers\FruitsListController;


Route::get('/hello', function () {
    return Inertia::render('hello-world');
});

Route::get('/table', function () {
    return Inertia::render('table');
});

Route::get('/', function () {
    return Inertia::render('table');
});

Route::get('/fruits/list',[FruitsListController::class,'index'])
    ->name('fruits.index');
