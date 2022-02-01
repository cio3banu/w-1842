<?php

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

Route::get('/', function () { return view('welcome');});


Route::get('/about', function () { 
    $grupe=['W-1841','W-1842','P-1841','P-1842','P-1843','R-1841'];
    $specialitate="Web";
    return view('about',['grupe'=>$grupe, 'specialitate'=>$specialitate]);});



    Route::get('/contacte', function () { return view('contacte');});
Route::get('/project', function () { return view('project');});
