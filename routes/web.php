<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


Auth::routes(["register" => false]);

Route::get('/', function () {  
    return redirect()->route('home.index');
});


Route::group(['prefix' => 'extranet'], function() {
    Route::get('/index', [App\Http\Controllers\Principal\HomeController::class, 'index'])->name('home.index');
    Route::get('/vacantes', [App\Http\Controllers\Principal\HomeController::class, 'vacantes'])->name('vacantes.index');
    Route::get('/trabajo/{area} ', [App\Http\Controllers\Principal\HomeController::class, 'vacantes2'])->name('buscarvacante2');
    Route::get('/buscarvacante/{id} ', [App\Http\Controllers\Principal\HomeController::class, 'buscar'])->name('buscarvacante');
    Route::get('/filtrar-vacantes', [App\Http\Controllers\Principal\HomeController::class, 'filtrar'])->name('filtrar.vacantes');

    Route::get('/hoja-vida', [App\Http\Controllers\Principal\CvController::class, 'index'])->name('cv.index');
    Route::get('/hoja-vida/registrar', [App\Http\Controllers\Principal\CvController::class, 'store'])->name('cv.store');
    Route::post('vacante/{id}/{type}', [App\Http\Controllers\Principal\CvController::class, 'vacante'])->name('home.vacante');
    Route::get('vacante2/{id}/{type}', [App\Http\Controllers\Principal\CvController::class, 'vacante2'])->name('home.vacante2');
    // Route::post('aplicar-vacante/{id}/{type}/{documento}', [App\Http\Controllers\Principal\CvController::class, 'vacanteConCedula'])->name('cv.aplicar.vacante');
    Route::post('/aplicar-vacante', [App\Http\Controllers\Principal\CvController::class, 'vacanteConCedula'])->name('cv.aplicar.vacante');
    Route::get('editar-cv/{id}/{type}/{documento}', [App\Http\Controllers\Principal\CvController::class, 'update'])->name('cv.vacant.update');
    //Route::put('', [App\Http\Controllers\Principal\CvController::class, 'edit'])->name('cv.vacant.edit');    
});

Route::group(['prefix' => 'administrador'], function() {
    //rutas de perfil
    Route::get('perfil', [App\Http\Controllers\Administrador\ProfileController::class, 'index'])->name('admin.perfil');
    Route::put('editarperfil', [App\Http\Controllers\Administrador\ProfileController::class, 'update'])->name('admin.editarperfil');
    //rutas de vacantes
    Route::get('buscar', [App\Http\Controllers\Administrador\VacantController::class, 'search'])->name('admin.search');
    Route::get('nuevasvacantes', [App\Http\Controllers\Administrador\VacantController::class, 'index'])->name('admin.index');
    Route::get('vacantes-archivadas', [App\Http\Controllers\Administrador\VacantController::class, 'archivadas'])->name('admin.vacant.archivadas');
    Route::get('vacantes-duplicar/{id}', [App\Http\Controllers\Administrador\VacantController::class, 'duplicar'])->name('admin.vacant.duplicar');
    Route::get('crear-vacante', [App\Http\Controllers\Administrador\VacantController::class, 'create'])->name('admin.vacant.create');
    Route::get('editar-vacante/{id}', [App\Http\Controllers\Administrador\VacantController::class, 'update'])->name('admin.vacant.edit');
    Route::post('registrarvacantes', [App\Http\Controllers\Administrador\VacantController::class, 'store'])->name('admin.crearvacante');
    Route::put('editvacant/{id}', [App\Http\Controllers\Administrador\VacantController::class, 'edit'])->name('admin.edit.vacant');
    Route::post('archivar-vacante/{id}', [App\Http\Controllers\Administrador\VacantController::class, 'archivar'])->name('admin.archivar.vacant');
    //rutas de candidatos
    Route::get('/candidatos', [App\Http\Controllers\Administrador\CandidateController::class, 'postulaciones'])->name('admin.postulaciones');    
    //rutas de usuarios
    Route::get('/usuarios', [App\Http\Controllers\Administrador\UserController::class, 'index'])->name('admin.usuarios');    
    Route::post('/crear-usuarios', [App\Http\Controllers\Administrador\UserController::class, 'store'])->name('admin.crear.usuarios');    
    Route::post('/cambiar-status/{id}', [App\Http\Controllers\Administrador\UserController::class, 'update'])->name('admin.crear.update');    
});

Route::group(['prefix' => 'reclutador'], function() {
    //rutas de perfil
    Route::get('perfil', [App\Http\Controllers\Reclutador\ProfileController::class, 'index'])->name('reclutador.perfil');
    Route::put('editarperfil', [App\Http\Controllers\Reclutador\ProfileController::class, 'update'])->name('reclutador.editarperfil');
    //rutas de candidatos
    Route::get('/buscar-candidato/{id} ', [App\Http\Controllers\Reclutador\CandidateController::class, 'buscar'])->name('reclutador.aspirantes');
    Route::get('/ver-candidato/{id}', [App\Http\Controllers\Reclutador\CandidateController::class, 'vercandidato'])->name('vercandidato');
    Route::get('/candidatos', [App\Http\Controllers\Reclutador\CandidateController::class, 'index'])->name('reclutador.index');
    Route::post('/descartar-candidato/{id}', [App\Http\Controllers\Reclutador\CandidateController::class, 'descartar'])->name('reclutador.candidato.rechazar');
    Route::post('seleccionar/{id}', [App\Http\Controllers\Reclutador\CandidateController::class, 'seleccionar'])->name('reclutador.candidate.index');
    //rutas de reclutamiento
    Route::get('reclutamientos', [App\Http\Controllers\Reclutador\RecruitmentController::class, 'index'])->name('reclutador.show');
    Route::post('store', [App\Http\Controllers\Reclutador\RecruitmentController::class, 'store'])->name('reclutador.store');
    Route::put('calificar/{id}', [App\Http\Controllers\Reclutador\RecruitmentController::class, 'update'])->name('reclutador.update');    
    Route::put('envio-pruebas/{id}', [App\Http\Controllers\Reclutador\RecruitmentController::class, 'send'])->name('reclutador.reclutamiento.pruebas');    
    //rutas de descartados
    Route::get('descartados', [App\Http\Controllers\Reclutador\DiscardedController::class, 'discarded'])->name('reclutador.discarded.index');   
    //rutas de vacantes

    Route::get('buscar', [App\Http\Controllers\Reclutador\VacantController::class, 'search'])->name('reclutador.search');
    Route::get('nuevasvacantes', [App\Http\Controllers\Reclutador\VacantController::class, 'index'])->name('reclutador.vacantes.index');
    Route::get('vacantes-archivadas', [App\Http\Controllers\Reclutador\VacantController::class, 'archivadas'])->name('reclutador.vacant.archivadas');
    Route::get('vacantes-duplicar/{id}', [App\Http\Controllers\Reclutador\VacantController::class, 'duplicar'])->name('reclutador.vacant.duplicar');
    Route::get('crear-vacante', [App\Http\Controllers\Reclutador\VacantController::class, 'create'])->name('reclutador.vacant.create');
    Route::get('editar-vacante/{id}', [App\Http\Controllers\Reclutador\VacantController::class, 'update'])->name('reclutador.vacant.edit');
    Route::post('registrarvacantes', [App\Http\Controllers\Reclutador\VacantController::class, 'store'])->name('reclutador.crearvacante');
    Route::put('editvacant/{id}', [App\Http\Controllers\Reclutador\VacantController::class, 'edit'])->name('reclutador.edit.vacant');
    Route::post('archivar-vacante/{id}', [App\Http\Controllers\Reclutador\VacantController::class, 'archivar'])->name('reclutador.archivar.vacant');

    //rutas seleccionados
    Route::get('seleccionados', [App\Http\Controllers\Reclutador\SelectCandidateController::class, 'index'])->name('reclutador.seleccionados.index');
    Route::get('/buscar-candidato-seleccionado/{id} ', [App\Http\Controllers\Reclutador\SelectCandidateController::class, 'buscar'])->name('reclutador.seleccionados.buscar');
    //rutas Registros de cv
    Route::get('resgistros', [App\Http\Controllers\Reclutador\RegisterController::class, 'index'])->name('reclutador.registros.index');

});

Route::group(['prefix' => 'jefe'], function() {
    //rutas de perfil
    Route::get('perfil', [App\Http\Controllers\Jefe\ProfileController::class, 'index'])->name('jefe.perfil');
    Route::put('editarperfil', [App\Http\Controllers\Jefe\ProfileController::class, 'update'])->name('jefe.editarperfil');
    //rutas de vacantes

   
});


