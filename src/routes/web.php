<?php


Route::get('/start', function () {
    return view('start::start');
})->name('start');

Route::get("/start/form", function () {
    return view("start::form");
})->name("form");
