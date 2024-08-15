<?php

use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('link.index');
});

Route::resource
("link",LinkController::class);
