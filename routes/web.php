<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('homepage');
});

Route::get('/login', function () {
    return view('sign_in');
});

Route::get('/signup', function(){
    return view('sign_up');
});

