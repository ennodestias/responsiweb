<?php


Route::get('/', function () {
    return view('welcome');
});

Route::resource('employee','a12763_enno_controller');
