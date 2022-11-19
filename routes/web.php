<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\Project_requirmentController;
use App\Http\Controllers\User_roleController;
use App\Http\Controllers\InvoiceController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\RoleController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::group(['middleware' => ['auth']], function () {
    Route::resource('roles', RoleController::class);
    Route::resource('users', UserController::class);
    Route::resource('project', ProjectController::class);
    Route::resource('requirment', Project_requirmentController::class);
    Route::resource('invoice', InvoiceController::class);
    Route::resource('user_role', user_roleController::class);
    Route::resource('status', StatusController::class);
});
