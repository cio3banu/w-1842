<?php
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\TestController;
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

Route::get('/', [TestController::class,'home']);


Route::get('/about', [TestController::class,'about']);
//Route::get('/about', 'App\Http\Controllers\TestController@about');



Route::get('/contacte', [TestController::class,'contacts']);

Route::get('/project', [TestController::class,'projects']);

Route::get('/ceva', [TestController::class,'ceva']);

//Route::redirect('/', '/ceva');

//Route::view('/welcome', 'altceva', ['name' => 'Ion']);

Route::get('user/{id}', [TestController::class,'showuserid']);

Route::resource('photos', PhotoController::class);