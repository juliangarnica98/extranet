<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

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

// Route::get('/', function () {  
//     return redirect('/login');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home.index');
Route::get('/vacantes', [App\Http\Controllers\HomeController::class, 'vacantes'])->name('vacantes.index');
Route::get('/hoja-vida', [App\Http\Controllers\CvController::class, 'index'])->name('cv.index');
Route::get('/hoja-vida/registrar', [App\Http\Controllers\CvController::class, 'store'])->name('cv.store');
Route::get('/buscarvacante/{id} ', [App\Http\Controllers\HomeController::class, 'buscar'])->name('buscarvacante');


Route::get('/home', function () {  
    if(Auth::user()->id==1){
        return redirect()->route('admin.index');
    }else if(Auth::user()->id!=1){
        return redirect()->route('boss.index');
    }
});

Auth::routes(["register" => false]);

Route::group(['prefix' => 'administrador'], function() {
    Route::get('index', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
    Route::get('importar', [App\Http\Controllers\AdminController::class, 'importar'])->name('admin.importar');
    // Route::get('importar-colaboradores', [App\Http\Controllers\AdminController::class, 'importar2'])->name('admin.importar2');
    Route::post('admin-import-colaborator', [App\Http\Controllers\AdminController::class, 'importCollaborator'])->name('admin.import.collaborator');
    Route::post('admin-import-excel', [App\Http\Controllers\AdminController::class, 'importExcel'])->name('admin.import.excel');
    Route::post('busqueda-cdc', [App\Http\Controllers\AdminController::class, 'busqueda'])->name('admin.search');
    Route::post('asignar-cdc', [App\Http\Controllers\AdminController::class, 'asignarCdc'])->name('admin.asignar');
    Route::get('exporttable', [App\Http\Controllers\AdminController::class, 'export'])->name('admin.export.excel');
    Route::get('postulaciones', [App\Http\Controllers\AdminController::class, 'postulaciones'])->name('admin.postulaciones');
    Route::get('vacantes', [App\Http\Controllers\VacantController::class, 'vacantes'])->name('admin.vacantes');
    Route::get('nuevasvacantes', [App\Http\Controllers\VacantController::class, 'index'])->name('admin.vacantes2');
    Route::post('registrarvacantes', [App\Http\Controllers\VacantController::class, 'store'])->name('admin.crearvacante');
    Route::put('editvacant/{id}', [App\Http\Controllers\VacantController::class, 'edit'])->name('admin.edit.vacant');
    Route::post('buscarcv/{id}', [App\Http\Controllers\CvController::class, 'search'])->name('admin.search.cv');
    Route::post('cerrarvacante/{id}', [App\Http\Controllers\VacantController::class, 'close'])->name('cerrarvacante');
});

  
Route::group(['prefix' => 'jefe'], function() 
{
    Route::get('exporttable/{id}', [App\Http\Controllers\BossController::class, 'export'])->name('boss.export.excel');
    Route::get('index', [App\Http\Controllers\BossController::class,'index'])->name('boss.index');
    Route::get('colaboradores', [App\Http\Controllers\BossController::class,'show'])->name('boss.show');
    Route::get('colaborador', [App\Http\Controllers\BossController::class,'search'])->name('boss.busqueda');
    Route::get('retiros', [App\Http\Controllers\RetirementController::class, 'index'])->name('retirement.index');
    Route::post('create', [App\Http\Controllers\RetirementController::class, 'create'])->name('boss.create');
    Route::post('busqueda', [App\Http\Controllers\BossController::class, 'busqueda'])->name('boss.search');
});
// Route::get('areas', [App\Http\Controllers\AdminController::class, 'areas'])->name('admin.areas');
// Route::get('cargos', [App\Http\Controllers\AdminController::class, 'cargos'])->name('admin.cargos');
// Route::get('tiporetiro', [App\Http\Controllers\AdminController::class, 'tiporetiro'])->name('admin.tiporetiro');
// Route::post('creararea', [App\Http\Controllers\AdminController::class, 'creararea'])->name('admin.creararea');
// Route::post('crearcargo', [App\Http\Controllers\AdminController::class, 'crearcargo'])->name('admin.crearcargo');
// Route::post('creartiporetiro', [App\Http\Controllers\AdminController::class, 'creartiporetiro'])->name('admin.creartiporetiro');


// Route::get('/retiro', [App\Http\Controllers\RetiroController::class, 'index'])->name('retiro');
// Route::get('/administrador', function () { return view('layouts.admin');});
// Route::post('/import-excel', [App\Http\Controllers\RetirementController::class, 'importExcel'])->name('import.excel');
