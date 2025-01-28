<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HistorialHorarioController;
use App\Http\Controllers\MaestroController;
use App\Http\Controllers\GrupoController;
use App\Http\Controllers\ModuloController;
use App\Http\Controllers\HorariosOficialeController;
use App\Http\Controllers\ModificacioneController;
use App\Http\Controllers\SolicitudeController;
use App\Http\Controllers\NotificacioneController;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::middleware('auth')->group(function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




    Route::resource('historial-horarios', HistorialHorarioController::class);
    Route::resource('maestros', MaestroController::class);
    Route::resource('grupos', GrupoController::class);
    Route::resource('modulos', ModuloController::class);
    Route::resource('horarios-oficiales', HorariosOficialeController::class);
    Route::resource('solicitudes', SolicitudeController::class);
    Route::resource('modificaciones', ModificacioneController::class);
    Route::resource('notificaciones', NotificacioneController::class);

    Route::get('/horario', [HorariosOficialeController::class, 'showHorario'])->name('horario');

    Route::get('/modulos', [ModuloController::class, 'indexnuevo'])->name('modulos.index.nuevo');
    Route::get('/modulos/{id}/select', [ModuloController::class, 'editar'])->name('modulos.editar');

});