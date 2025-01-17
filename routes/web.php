<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/MasterProject', function (){
    return view('MasterProject');
});

Route::get('/mproject', function (){
    return view('mproject');
});


Route::get('/home', function (){
    return view('home');
});


Route::get('/funfact', function (){
    return view('kevin');
});