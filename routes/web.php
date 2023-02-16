<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;



Route::get('/', function () {  
    
        return redirect()->route('home.index');
    
});

// Route::get('/home', function () {  
//     if(Auth::user()->id==1){
//         return redirect()->route('admin.index');
//     }else{
//         return redirect()->route('reclutador.index');
//     }

// });

Auth::routes(["register" => false]);

Route::group(['prefix' => 'extranet'], function() {
    Route::get('/index', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');

    

    Route::get('/vacantes', [App\Http\Controllers\HomeController::class, 'vacantes'])->name('vacantes.index');
    Route::get('/hoja-vida', [App\Http\Controllers\CvController::class, 'index'])->name('cv.index');
    Route::get('/hoja-vida/registrar', [App\Http\Controllers\CvController::class, 'store'])->name('cv.store');
    Route::get('/buscarvacante/{id} ', [App\Http\Controllers\HomeController::class, 'buscar'])->name('buscarvacante');
    Route::get('/trabajo/{id} ', [App\Http\Controllers\HomeController::class, 'vacantes2'])->name('buscarvacante2');
});

Route::group(['prefix' => 'administrador'], function() {

    Route::get('perfil', [App\Http\Controllers\UserController::class, 'index2'])->name('admin.perfil');
    Route::put('editarperfil', [App\Http\Controllers\UserController::class, 'update'])->name('admin.editarperfil');

    Route::get('vacantes', [App\Http\Controllers\VacantController::class, 'vacantes'])->name('admin.vacantes');
    Route::get('buscar', [App\Http\Controllers\VacantController::class, 'search'])->name('admin.search');
    
    Route::get('nuevasvacantes', [App\Http\Controllers\VacantController::class, 'index'])->name('admin.index');
    Route::post('registrarvacantes', [App\Http\Controllers\VacantController::class, 'store'])->name('admin.crearvacante');
    Route::put('editvacant/{id}', [App\Http\Controllers\VacantController::class, 'edit'])->name('admin.edit.vacant');
    Route::post('cerrarvacante/{id}', [App\Http\Controllers\VacantController::class, 'close'])->name('cerrarvacante');

    Route::get('postulaciones', [App\Http\Controllers\CandidateController::class, 'postulaciones'])->name('admin.postulaciones');
    // Route::get('buscar2', [App\Http\Controllers\CandidateController::class, 'search'])->name('admin.search2');

    Route::get('vacante/{id}/{type}', [App\Http\Controllers\CvController::class, 'vacante'])->name('admin.vacante');
    
});

Route::group(['prefix' => 'reclutador'], function() {
    Route::get('perfil', [App\Http\Controllers\UserController::class, 'index'])->name('reclutador.perfil');
    Route::put('editarperfil', [App\Http\Controllers\UserController::class, 'update'])->name('reclutador.editarperfil');

    // Route::get('index', [App\Http\Controllers\CandidateController::class, 'index'])->name('reclutador.index');
    // Route::get('index', [App\Http\Controllers\CandidateController::class, 'index'])->name('reclutador.index');
    Route::get('/buscaraspirantes/{id} ', [App\Http\Controllers\CandidateController::class, 'buscar'])->name('reclutador.aspirantes');
    Route::get('/vercandidato/{id}', [App\Http\Controllers\CandidateController::class, 'vercandidato'])->name('vercandidato');

    Route::get('aspirantes', [App\Http\Controllers\CandidateController::class, 'index'])->name('reclutador.index');
    Route::get('reclutamientos', [App\Http\Controllers\RecruitmentController::class, 'index'])->name('reclutador.show');
    Route::post('store', [App\Http\Controllers\RecruitmentController::class, 'store'])->name('reclutador.store');
    Route::put('calificar/{id}', [App\Http\Controllers\RecruitmentController::class, 'update'])->name('reclutador.update');

    
});

  