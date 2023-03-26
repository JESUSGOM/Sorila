<?php

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
Route::get('/usuario/consulto/{dni}', function($dni) {
    $usuarioUnido = DB::table('usuarios')->where('UsuDni', $dni)->first();
    return ['usuario' => $miUsuario];
});
