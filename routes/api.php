<?php

use App\Http\Controllers\ConversaController;
use App\Http\Controllers\NecessidadeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->post('/user', function (Request $request) {
    return $request->user();
});

Route::post('listMessage/{id_conversa}/{data_inicio}/{data_fim}', [ConversaController::class, 'listarMensagens']);

Route::post('message', [ConversaController::class, 'cadastrarMensagem']);

Route::delete('message', [ConversaController::class, 'desativarMensagem']);

Route::post('notificacoes/{data_inico}/{data_fim}', [UsuarioController::class, 'listarNotificacoes']);

Route::post('listarDoador', [ConversaController::class, 'listarDoador']);

Route::post('listarOng', [ConversaController::class, 'listarOng']);