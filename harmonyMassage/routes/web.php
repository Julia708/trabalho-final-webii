<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RelatorioController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\AvaliacaoController;
use App\Http\Controllers\GraficoController;
use Illuminate\Support\Facades\Route;

require __DIR__.'/auth.php';


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::resource('agendamentos', AgendamentoController::class);
Route::resource('relatorios', RelatorioController::class);

Route::middleware(['auth'])->group(function () {
    Route::get('/relatorios', [RelatorioController::class, 'index'])->name('relatorios.index');
    Route::post('/relatorios/emitir', [RelatorioController::class, 'emitir'])->name('relatorios.emitir');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/avaliacoes', [AvaliacaoController::class, 'index'])->name('avaliacoes.index');
    Route::get('/avaliacoes/create/{agendamento}', [AvaliacaoController::class, 'create'])->name('avaliacoes.create');
    Route::post('/avaliacoes', [AvaliacaoController::class, 'store'])->name('avaliacoes.store');
});

Route::get('/grafico/avaliacoes', [GraficoController::class, 'avaliacoes'])->name('grafico.avaliacoes');

Route::get('/massagista/agenda', [AgendamentoController::class, 'agendaMassagista'])
    ->middleware(['auth'])
    ->name('massagista.agenda');