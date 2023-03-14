<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



Route::get('/', function () {  return redirect()->route('home.index');});

Auth::routes(["register" => false]);

Route::group(['prefix' => 'extranet'], function() {
    Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
    Route::get('/vacantes', [App\Http\Controllers\HomeController::class, 'vacantes'])->name('vacantes.index');
    Route::get('/trabajo/{id} ', [App\Http\Controllers\HomeController::class, 'vacantes2'])->name('buscarvacante2');
    Route::get('/buscarvacante/{id} ', [App\Http\Controllers\HomeController::class, 'buscar'])->name('buscarvacante');

    Route::get('/hoja-vida', [App\Http\Controllers\CvController::class, 'index'])->name('cv.index');
    Route::get('/hoja-vida/registrar', [App\Http\Controllers\CvController::class, 'store'])->name('cv.store');
    Route::get('vacante/{id}/{type}', [App\Http\Controllers\CvController::class, 'vacante'])->name('home.vacante');
});

Route::group(['prefix' => 'administrador'], function() {
    //rutas de perfil
    Route::get('perfil', [App\Http\Controllers\Administrador\ProfileController::class, 'index'])->name('admin.perfil');
    Route::put('editarperfil', [App\Http\Controllers\Administrador\ProfileController::class, 'update'])->name('admin.editarperfil');
    //rutas de vacantes
    Route::get('vacantes', [App\Http\Controllers\Administrador\VacantController::class, 'vacantes'])->name('admin.vacantes');
    Route::get('buscar', [App\Http\Controllers\Administrador\VacantController::class, 'search'])->name('admin.search');
    Route::get('nuevasvacantes', [App\Http\Controllers\Administrador\VacantController::class, 'index'])->name('admin.index');
    Route::post('registrarvacantes', [App\Http\Controllers\Administrador\VacantController::class, 'store'])->name('admin.crearvacante');
    Route::put('editvacant/{id}', [App\Http\Controllers\Administrador\VacantController::class, 'edit'])->name('admin.edit.vacant');
    Route::post('cerrarvacante/{id}', [App\Http\Controllers\Administrador\VacantController::class, 'close'])->name('cerrarvacante');
    //rutas de candidatos
    Route::get('/candidatos', [App\Http\Controllers\Administrador\CandidateController::class, 'postulaciones'])->name('admin.postulaciones');    
    //rutas de usuarios
    Route::get('/usuarios', [App\Http\Controllers\Administrador\UserController::class, 'index'])->name('admin.usuarios');    
    Route::post('/crear-usuarios', [App\Http\Controllers\Administrador\UserController::class, 'store'])->name('admin.crear.usuarios');    
});

Route::group(['prefix' => 'reclutador'], function() {
    //rutas de perfil
    Route::get('perfil', [App\Http\Controllers\Reclutador\ProfileController::class, 'index'])->name('reclutador.perfil');
    Route::put('editarperfil', [App\Http\Controllers\Reclutador\ProfileController::class, 'update'])->name('reclutador.editarperfil');
    //rutas de candidatos
    Route::get('/buscar-candidato/{id} ', [App\Http\Controllers\Reclutador\CandidateController::class, 'buscar'])->name('reclutador.aspirantes');
    Route::get('/ver-candidato/{id}', [App\Http\Controllers\Reclutador\CandidateController::class, 'vercandidato'])->name('vercandidato');
    Route::get('/candidatos', [App\Http\Controllers\Reclutador\CandidateController::class, 'index'])->name('reclutador.index');
    //rutas de reclutamiento
    Route::get('reclutamientos', [App\Http\Controllers\Reclutador\RecruitmentController::class, 'index'])->name('reclutador.show');
    Route::post('store', [App\Http\Controllers\Reclutador\RecruitmentController::class, 'store'])->name('reclutador.store');
    Route::put('calificar/{id}', [App\Http\Controllers\Reclutador\RecruitmentController::class, 'update'])->name('reclutador.update');    
});

