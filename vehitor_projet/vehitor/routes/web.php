<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\VehiculeController;
use App\Models\Vehicule;
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

Route::get('/loginAdmin', function(){
    return view('vehitor.loginAdmin');
})->name('loginAdmin'); //des route temporere va etre remplacer par les route ressources (controller)

Route::get('/registerClient', function(){
    return view('vehitor.registerClient');
})->name('registerClient');

Route::get('/registerAgence', function(){
    return view('vehitor.registerAgence');
})->name('registerAgence');

Route::get('/registerAdmin', function(){
    return view('vehitor.registerAdmin');
})->name('registerAdmin');

Route::resource('vehicules', VehiculeController::class);