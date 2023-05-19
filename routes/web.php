<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


Auth::routes(["register" => false]);

Route::get('/', function () {  
    return redirect()->route('home.index');
});


Route::group(['prefix' => 'extranet'], function() {
    Route::get('/home', [App\Http\Controllers\Principal\HomeController::class, 'index2'])->name('home.index2');

    Route::get('/index', [App\Http\Controllers\Principal\HomeController::class, 'index2'])->name('home.index');
    Route::get('/vacantes', [App\Http\Controllers\Principal\HomeController::class, 'vacantes'])->name('vacantes.index');

    Route::get('/trabajo/{area} ', [App\Http\Controllers\Principal\HomeController::class, 'vacantes2'])->name('buscarvacante2');

    Route::get('/buscarvacante/{id} ', [App\Http\Controllers\Principal\HomeController::class, 'buscar'])->name('buscarvacante');
    Route::get('/filtrar-vacantes', [App\Http\Controllers\Principal\HomeController::class, 'filtrar'])->name('filtrar.vacantes');

    Route::get('/hoja-vida', [App\Http\Controllers\Principal\CvController::class, 'index'])->name('cv.index');
    Route::post('/hoja-vida/registrar', [App\Http\Controllers\Principal\CvController::class, 'store'])->name('cv.store');
    Route::post('vacante/{id}/{type}', [App\Http\Controllers\Principal\CvController::class, 'vacante'])->name('home.vacante');
    Route::get('vacante2/{id}/{type}', [App\Http\Controllers\Principal\CvController::class, 'vacante2'])->name('home.vacante2');
    // Route::post('aplicar-vacante/{id}/{type}/{documento}', [App\Http\Controllers\Principal\CvController::class, 'vacanteConCedula'])->name('cv.aplicar.vacante');
    Route::post('aplicar-vacante', [App\Http\Controllers\Principal\CvController::class, 'vacanteConCedula'])->name('cv.aplicar.vacante');
    Route::get('editar-cv/{id}/{type}/{documento}', [App\Http\Controllers\Principal\CvController::class, 'update'])->name('cv.vacant.update');
    //Route::put('', [App\Http\Controllers\Principal\CvController::class, 'edit'])->name('cv.vacant.edit');    
});

Route::group(['prefix' => 'administrador', 'middleware' => 'auth'], function() {
    //rutas de perfil
    Route::get('perfil', [App\Http\Controllers\Administrador\ProfileController::class, 'index'])->name('admin.perfil');
    Route::put('editarperfil', [App\Http\Controllers\Administrador\ProfileController::class, 'update'])->name('admin.editarperfil');
    //rutas de vacantes
    Route::get('buscar', [App\Http\Controllers\Administrador\VacantController::class, 'search'])->name('admin.search');
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
    //Rutas de importacion de jefes
    Route::post('admin-import-excel', [App\Http\Controllers\Administrador\BossController::class, 'importExcel'])->name('admin.import.excel');
    Route::get('jefes', [App\Http\Controllers\Administrador\BossController::class, 'index'])->name('admin.index.jefes');
});

Route::group(['prefix' => 'reclutador', 'middleware' => 'auth'], function() {
    //rutas de perfil
    Route::get('perfil', [App\Http\Controllers\Reclutador\ProfileController::class, 'index'])->name('reclutador.perfil');
    Route::put('editarperfil', [App\Http\Controllers\Reclutador\ProfileController::class, 'update'])->name('reclutador.editarperfil');
    //rutas de candidatos
    Route::get('/buscar-candidato/{id} ', [App\Http\Controllers\Reclutador\CandidateController::class, 'buscar'])->name('reclutador.aspirantes');
    Route::get('/ver-candidato/{id}/{vacant}', [App\Http\Controllers\Reclutador\CandidateController::class, 'vercandidato'])->name('vercandidato');
    Route::get('/vacantes', [App\Http\Controllers\Reclutador\CandidateController::class, 'index'])->name('reclutador.index');
    Route::get('/getvacantes', [App\Http\Controllers\Reclutador\CandidateController::class, 'index_fetch'])->name('reclutador.index2');
    Route::post('/descartar-candidato/{id}/{vacant}', [App\Http\Controllers\Reclutador\CandidateController::class, 'descartar'])->name('reclutador.candidato.rechazar');
    Route::post('seleccionar/{id}/{vacant}', [App\Http\Controllers\Reclutador\CandidateController::class, 'seleccionar'])->name('reclutador.candidate.index');
    //rutas de reclutamiento
    Route::get('enviados-pruebas/{id}', [App\Http\Controllers\Reclutador\RecruitmentController::class, 'show'])->name('reclutador.reclutamientos.buscar');
    Route::get('calificar-candidato/{id}/{vacante}', [App\Http\Controllers\Reclutador\RecruitmentController::class, 'calificar'])->name('reclutador.reclutamientos.calificar');
    Route::get('ver-calificacion-candidato/{id}/{vacante}', [App\Http\Controllers\Reclutador\RecruitmentController::class, 'vercalificacion'])->name('reclutador.reclutamientos.vercalificar');
    
    Route::post('store', [App\Http\Controllers\Reclutador\RecruitmentController::class, 'store'])->name('reclutador.store');
    Route::put('calificar/{id}', [App\Http\Controllers\Reclutador\RecruitmentController::class, 'update'])->name('reclutador.update');    
    Route::put('envio-pruebas/{id}', [App\Http\Controllers\Reclutador\RecruitmentController::class, 'send'])->name('reclutador.reclutamiento.pruebas');    
    //rutas de descartados
    Route::get('descartados/{id}', [App\Http\Controllers\Reclutador\DiscardedController::class, 'discarded'])->name('reclutador.discarded.index');   
    //rutas de vacantes
    Route::get('buscar', [App\Http\Controllers\Reclutador\VacantController::class, 'search'])->name('reclutador.search');
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
    Route::get('/ver-candidato-seleccionado/{id}/{vacant}', [App\Http\Controllers\Reclutador\SelectCandidateController::class, 'vercandidato'])->name('vercandidatoseleccionado');
    Route::post('cambiar-pruebas/{id}', [App\Http\Controllers\Reclutador\SelectCandidateController::class, 'pruebas'])->name('reclutador.candidate.pruebas');
    
    //rutas Registros de cv
    Route::get('resgistros', [App\Http\Controllers\Reclutador\RegisterController::class, 'index'])->name('reclutador.registros.index');
    //rutas de analista
    Route::get('analistas', [App\Http\Controllers\Reclutador\AnalystController::class, 'index'])->name('reclutador.analista.index');
    Route::get('ver-postulados-vacante/{id}', [App\Http\Controllers\Reclutador\AnalystController::class, 'show'])->name('reclutador.analista.buscar');
    Route::put('entrevista-analista/{id}', [App\Http\Controllers\Reclutador\AnalystController::class, 'entrevista'])->name('reclutador.analista.entrevista');
    Route::put('calificaion-comercial/{id}', [App\Http\Controllers\Reclutador\AnalystController::class, 'calificacion'])->name('reclutador.analista.calificacion');
    Route::put('asignar-jefe/{id}', [App\Http\Controllers\Reclutador\AnalystController::class, 'jefe'])->name('reclutador.analista.jefe');
    


});

Route::group(['prefix' => 'jefe', 'middleware' => 'auth'], function() {
    //rutas de perfil
    Route::get('perfil', [App\Http\Controllers\Jefe\ProfileController::class, 'index'])->name('jefe.perfil');
    Route::put('editarperfil', [App\Http\Controllers\Jefe\ProfileController::class, 'update'])->name('jefe.editarperfil');
    Route::get('index', [App\Http\Controllers\Jefe\CandidateController::class, 'index'])->name('jefe.candidatos.index');
    Route::get('vercandidato/{id}/{vacant}/{recruitment}', [App\Http\Controllers\Jefe\CandidateController::class, 'show'])->name('jefe.candidatos.show');

    
});


