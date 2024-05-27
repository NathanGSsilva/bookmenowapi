<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;


Route::get('/',[SiteController::class, "home"]);
Route::get('/sobre-nos',[SiteController::class, "sobreNos"]);
Route::get('/contato',[SiteController::class, "contato"]);

