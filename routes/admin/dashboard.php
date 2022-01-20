<?php

use Illuminate\Support\Facades\Route;

Route::get('/test3', function () {
    return view('dashboard.index');
});