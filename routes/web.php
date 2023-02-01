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
    // Route::get('index', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    Route::get('postulaciones', [App\Http\Controllers\AdminController::class, 'postulaciones'])->name('admin.postulaciones');
    Route::get('vacantes', [App\Http\Controllers\VacantController::class, 'vacantes'])->name('admin.vacantes');
    Route::get('nuevasvacantes', [App\Http\Controllers\VacantController::class, 'index'])->name('admin.index');
    Route::post('registrarvacantes', [App\Http\Controllers\VacantController::class, 'store'])->name('admin.crearvacante');
    Route::put('editvacant/{id}', [App\Http\Controllers\VacantController::class, 'edit'])->name('admin.edit.vacant');
    // Route::get('vacante/{id}', [App\Http\Controllers\CvController::class, 'vacante'])->name('admin.vacante');
    Route::get('vacante/{id}/{type}', [App\Http\Controllers\CvController::class, 'vacante'])->name('admin.vacante');
    Route::post('cerrarvacante/{id}', [App\Http\Controllers\VacantController::class, 'close'])->name('cerrarvacante');
});

Route::group(['prefix' => 'reclutador'], function() {
    Route::get('index', [App\Http\Controllers\CandidateController::class, 'index'])->name('reclutador.index');

});

  