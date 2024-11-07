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

Route::get('/tableau',function(){
    return view('tableau');
});



Route::get('/textes',function(){
    return view('textes');
});

Route::group(['prefix' => 'infos-departement'], function () {
    Route::get('/brazzaville',function(){
        return view('brazzaville');
    });
    Route::get('/pointe-noire',function(){
        return view('pointe-noire');
    });
});
