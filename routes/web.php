<?php

use App\Http\Controllers\AccesoController;
use App\Http\Controllers\CentrosController;
use App\Http\Controllers\EnvioEmailController;
use App\Http\Controllers\IncidenciasController;
use App\Http\Controllers\KeyMovesController;
use App\Http\Controllers\LlavesController;
use App\Http\Controllers\MovadojController;
use App\Http\Controllers\PlantasController;
use App\Http\Controllers\TelefonoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

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

Route::get('/usuario',[UsuarioController::class,'index']);
Route::get('/create',[UsuarioController::class,'create']);
Route::get('/show/{nombre}/{apellido?}',[UsuarioController::class,'help']);
Route::get('/usuario/consultar/{dni}',[UsuarioController::class,'buscoDni']);
/**Route::get('/usuario/consulto/{dni}', function($dni) {
    $usuarioUnido = DB::table('usuarios')->where('UsuDni', $dni)->first();
    return ['usuario' => $miUsuario];
});*/
Route::get('/telefono',[TelefonoController::class,'index']);
Route::get('/retposto',[RetpostoController::class,'index']);
Route::get('/planta',[PlantasController::class,'index']);
Route::get('/paquetes',[PaqueteriaController::class,'index']);
Route::get('/movadoj',[MovadojController::class,'index']);
Route::get('/llaves',[LlavesController::class,'index']);
Route::get('km',[KeyMovesController::class,'index']);
Route::get('/incidencia',[IncidenciasController::class,'index']);
Route::get('/envioemail',[EnvioEmailController::class,'index']);
Route::get('/centros',[CentrosController::class,'index']);
Route::get('/inicio',[AccesoController::class,'index'])->name('inicio');
Route::post('/acceso',[AccesoController::class,'store']);
Route::get('/acceso/{{UsuDni}}',[AccesoController::class,'store']);
Route::get('/principal')
