<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function(){
    //return 'Hello all...';
    //return '<h1>Hello all...</h1>';
    return 5+7;
});

Route::resource('/report',ReportController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
