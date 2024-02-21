<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Panel2Controller;
use App\Http\Controllers\Panel3Controller;
use App\Http\Controllers\Panel4Controller;
use App\Http\Controllers\Panel5Controller;
use App\Http\Controllers\Panel6Controller;

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
Route::post('/comenzar-cotizacion', [HomeController::class, 'startquote'])->name('comenzar_cotizacion');
Route::get('/panel2', [Panel2Controller::class, 'index'])->name('panel2');

Route::get('/panel3', [Panel3Controller::class, 'index'])->name('panel3');
Route::get('/panel4', [Panel4Controller::class, 'index'])->name('panel4');
Route::get('/panel5', [Panel5Controller::class, 'index'])->name('panel5');
Route::get('/panel6', [Panel6Controller::class, 'index'])->name('panel6');












