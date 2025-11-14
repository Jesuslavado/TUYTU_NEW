<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('NotRegister.home');
});

Route::get('/contact', function () {
    return view('NotRegister.contact');
});
