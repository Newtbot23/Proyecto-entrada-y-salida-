<?php

use App\Http\Controllers\EntidadesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanesLicenciaController;

Route::get('/', function () {
    return redirect()->route('superadmin.planes.index');
});

Route::prefix('superadmin')->name('superadmin.')->group(function () {

    Route::get('/planes', [PlanesLicenciaController::class, 'index'])
        ->name('planes.index');

    Route::post('/planes', [PlanesLicenciaController::class, 'store'])
        ->name('planes.store');

    Route::get('/planes/{id}/edit', [PlanesLicenciaController::class, 'edit'])
        ->name('planes.edit');

    Route::put('/planes/{id}', [PlanesLicenciaController::class, 'update'])
        ->name('planes.update');

    Route::delete('/planes/{id}', [PlanesLicenciaController::class, 'destroy'])
        ->name('planes.destroy');
        
    Route::get('/institutions', [EntidadesController::class, 'index'])->name('institutions.index');
    Route::get('/institutions/create', [EntidadesController::class, 'create'])->name('institutions.create');
    Route::post('/institutions/store', [EntidadesController::class, 'store'])->name('institutions.store');
    Route::get('/institutions/{id}/edit', [EntidadesController::class, 'edit'])->name('institutions.edit');
    Route::put('/institutions/{id}', [EntidadesController::class, 'update'])->name('institutions.update');
    Route::delete('/institutions/{id}', [EntidadesController::class, 'destroy'])->name('institutions.destroy');


    Route::get('/planes_user', [PlanesLicenciaController::class, 'userPlanes'])->name('planes_user.index');
});

