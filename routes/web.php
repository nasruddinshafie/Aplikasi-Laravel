<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JadualController;
use App\Http\Controllers\Admin\UserController;

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
    return view('welcome');
});


Route::get('/jadual/{subjek}', [
    JadualController::class, 
    'index'
]);

// Route::get('/login', [AuthControllerL::class, 'login'])->name('login');

//grouping
// Route::prefix('admin')->name('admin.')->group(function(){
//     Route::get('/user', [JadualController::class, 'index'])->name('index');
//     Route::get('/user/{id}', [JadualController::class, 'show'])->name('detail');
//     Route::get('/user/{id}/edit', [JadualController::class, 'edit'])->name('edit');
// });

//resource

Route::resource('/user', UserController::class);