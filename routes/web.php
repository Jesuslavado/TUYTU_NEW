<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('NotRegister.index');
});

Route::get('/contact', function () {
    return view('NotRegister.contact');
});

Route::get('/cookies', function () {
    return view('NotRegister.cookies');
});

Route::get('/terminos', function () {
    return view('NotRegister.terminos');
});

Route::get('/privacidad', function () {
    return view('NotRegister.privacidad');
});
Route::get('/manifesto', function () {
    return view('NotRegister.manifiesto');
});