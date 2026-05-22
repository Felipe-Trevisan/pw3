<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return '<h1>Hello, World!</h1>';
});

Route::get('/calc/{n}', function ($n) {
    for($i=0; $i<11; $i++){echo "$n*$i = " . $n*$i . "<br>";}
});

Route::get('/calc1/{n1}/{n2}', function ($n1, $n2) {
    return $n1*$n2;
});