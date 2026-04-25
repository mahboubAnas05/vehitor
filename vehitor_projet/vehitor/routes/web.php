<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('vehitor.home');
})->name('home');

Route::get('/about', function () {
    return view('vehitor.about');
})->name('about');

Route::get('/loginClient', function(){
    return view('vehitor.loginClient');
})->name('loginClient'); //des route temporere va etre remplacer par les route ressources (controller)

Route::get('/loginAgence', function(){
    return view('vehitor.loginAgence');
})->name('loginAgence'); //des route temporere va etre remplacer par les route ressources (controller)