<?php

use Illuminate\Support\Facades\Route;


Route::get('/welcome', function () {
    $data = [
        'nama' => 'Ulan Aisah Sari Tinamba',
        'email' => 'Ulan@example.com',
        'teman' => ['Ulan', 'Aisah', 'Tinamba'], 
        'isAdmin' => true,
    ];
    return view('welcome',$data);

});

Route::get('/home', function () {
   
    return view('home');

});

Route::get('/app', function () {
   
    return view('app');

});

