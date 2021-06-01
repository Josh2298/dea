<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DatoController;
use App\Http\Controllers\DocenteController;
use App\Http\Controllers\RespuestaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('login-student', function() {
    return view('auth.login-student');
});

Route::post('login-student-form', [AuthController::class, 'authStudent']);
Route::get('login-correo', [AuthController::class, 'authCorreo']);
Route::get('get-cuestionario/{id}', [AuthController::class, 'getCuestionario']);
Route::post('send-correo', [AuthController::class, 'authCodigo']);

Route::post('cuestionario-store',[RespuestaController::class,'storeCuestionario']);

Route::group(['middleware'=>'auth'],function(){
    Route::resource('users',UserController::class);
    Route::resource('docentes',DocenteController::class);
    Route::get('materias/{id}',[DatoController::class,'materiaIndex']);
    Route::get('materias/{id}/create',[DatoController::class,'createm']);
    Route::resource('datos',DatoController::class);
    Route::get('materias/{id}/nota',[DatoController::class,'materiaNota']);
    Route::post('docentes-search',[DocenteController::class,'searchDocentes']);
    Route::post('codigo',[DatoController::class,'codigo']);
});

require __DIR__.'/auth.php';


