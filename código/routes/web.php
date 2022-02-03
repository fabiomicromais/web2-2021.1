<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\VeiculoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


// Clientes
Route::get('clientes/index', [ClienteController::class, 'index']);
Route::get('clientes/create', [ClienteController::class, 'create']);
Route::post('clientes/add', [ClienteController::class, 'add']);
Route::get('clientes/{id}/edit', [ClienteController::class, 'edit']);
Route::put('clientes/{id}/update', [ClienteController::class, 'update']);
Route::delete('clientes/{id}/delete', [ClienteController::class, 'delete']);

// Funcionários
Route::get('funcionarios/index', [FuncionarioController::class, 'index']);
Route::get('funcionarios/create', [FuncionarioController::class, 'create']);
Route::post('funcionarios/add', [FuncionarioController::class, 'add']);
Route::get('funcionarios/{id}/edit', [FuncionarioController::class, 'edit']);
Route::put('funcionarios/{id}/update', [FuncionarioController::class, 'update']);
Route::delete('funcionarios/{id}/delete', [FuncionarioController::class, 'delete']);

// Fornecedores
Route::get('fornecedores/index', [FornecedorController::class, 'index']);
Route::get('fornecedores/create', [FornecedorController::class, 'create']);
Route::post('fornecedores/add', [FornecedorController::class, 'add']);
Route::get('fornecedores/{id}/edit', [FornecedorController::class, 'edit']);
Route::put('fornecedores/{id}/update', [FornecedorController::class, 'update']);
Route::delete('fornecedores/{id}/delete', [FornecedorController::class, 'delete']);

// Veículos
Route::get('veiculos/index', [VeiculoController::class, 'index']);
Route::get('veiculos/create', [VeiculoController::class, 'create']);
Route::post('veiculos/add', [VeiculoController::class, 'add']);
// Route::get('veiculos/{id}/edit', [VeiculoController::class, 'edit']);
// Route::put('veiculos/{id}/update', [VeiculoController::class, 'update']);
// Route::delete('veiculos/{id}/delete', [VeiculoController::class, 'delete']);