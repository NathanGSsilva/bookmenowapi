<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ServicoApiController;
use App\Http\Controllers\Api\CategoriaApiController;
use App\Http\Controllers\AutenticacaoController;

Route::post('/login', [AutenticacaoController::class, 'login']);
Route::post('/logout', [AutenticacaoController::class, 'logout'])->middleware('auth:sanctum');

Route::get('servicos', [ServicoApiController::class, 'index']);
Route::post('servicos', [ServicoApiController::class, 'store']);
Route::get('servicos/{id}', [ServicoApiController::class, 'show']);
Route::put('servicos/{id}', [ServicoApiController::class, 'update']);
Route::delete('servicos/{id}', [ServicoApiController::class, 'destroy']);

Route::get('categorias', [CategoriaApiController::class, 'index']);
Route::post('categorias', [CategoriaApiController::class, 'store']);
Route::get('categorias/{id}', [CategoriaApiController::class, 'show']);
Route::put('categorias/{id}', [CategoriaApiController::class, 'update']);
Route::delete('categorias/{id}', [CategoriaApiController::class, 'destroy']);




