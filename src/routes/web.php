<?php

Route::get('/start', function () {
    return view('start::welcome');
})->name('start');
