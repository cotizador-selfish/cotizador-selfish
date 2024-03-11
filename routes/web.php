<?php

use App\Http\Controllers\Controller;
use App\Http\Middleware\NoCache;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Panel2Controller;
use App\Http\Controllers\Panel3Controller;
use App\Http\Controllers\Panel4Controller;
use App\Http\Controllers\Panel5Controller;
use App\Http\Controllers\CotizacionController;
use App\Http\Controllers\ServicioController;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/test-db-connection', function () {
    try {
        DB::connection()->getPdo();
        echo "Conexión exitosa a la base de datos.";
    } catch (\Exception $e) {
        die("No se pudo conectar a la base de datos: " . $e->getMessage());
    }
});
*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::redirect('/', '/home');

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::post('/iniciar-cotizacion', [CotizacionController::class, 'iniciarCotizacion'])
     ->middleware(NoCache::class)
     ->name('iniciar-cotizacion');

Route::get('/cotizacion/retroceder/{paginaActual}', [CotizacionController::class, 'retroceder'])->name('cotizacion.retroceder');


Route::get('/page-web/panel2', [Panel2Controller::class, 'index'])->name('panel2');

Route::get('/page-web/panel3', [Panel3Controller::class, 'index'])->name('panel3');
Route::get('/page-web/panel4', [Panel4Controller::class, 'index'])->name('panel4');
Route::get('/page-web/panel5', [Panel5Controller::class, 'index'])->name('panel5');


Route::get('/ver-cotizacion/{id}', 'CotizacionController@verCotizacion');













