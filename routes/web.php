<?php

use App\Http\Controllers\Admin\ProjectController as AdminProjectController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

//ROTTE RAGGRUPPATE PER L'ADMIN
Route::middleware('auth')
->name('admin.')
->prefix('admin/')
->group(function () {
    Route::resource('projects', AdminProjectController::class);
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
