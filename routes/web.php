<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/accueil',function(){
    return view('home');
});


Route::get('/historique',function(){
    return view('historique');
});