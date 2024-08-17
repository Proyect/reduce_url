<?php

use App\Http\Controllers\LinkController;
use Illuminate\Support\Facades\Route;

Route::get("link/",[LinkController::class, "index"])->name("link0");
Route::post("link/new",[LinkController::class,"create"])->name("link.create");
Route::get("link/list/",[LinkController::class, "show"])->name("link.list");
Route::post("link/edit",[LinkController::class,"update"])->name("link.update");
Route::delete("link/delete",[LinkController::class,"destroy"])->name("link.delete");
// Route::resource("link",LinkController::class);

 