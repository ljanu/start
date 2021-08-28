<?php

Route::get('/start', function () {
    return view('start::index');
})->name('start');
