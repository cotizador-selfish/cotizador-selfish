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
use App\Http\Controllers\Lading2Controller;
use App\Http\Controllers\Lading3Controller;
use App\Http\Controllers\Lading4Controller;
use App\Http\Controllers\Lading5Controller;
use App\Http\Controllers\Lading6Controller;
use App\Http\Controllers\Lading7Controller;
use App\Http\Controllers\Product2Controller;
use App\Http\Controllers\Product3Controller;
use App\Http\Controllers\Product4Controller;
use App\Http\Controllers\Product5Controller;
use App\Http\Controllers\Product6Controller;
use App\Http\Controllers\Ecommerce2Controller;
use App\Http\Controllers\Ecommerce3Controller;
use App\Http\Controllers\Ecommerce4Controller;
use App\Http\Controllers\Ecommerce5Controller;
use App\Http\Controllers\Ecommerce6Controller;
use App\Http\Controllers\Ecommerce7Controller;
use App\Http\Controllers\Custom2Controller;
use App\Http\Controllers\Custom3Controller;
use App\Http\Controllers\Custom4Controller;
use App\Http\Controllers\Custom5Controller;
use App\Http\Controllers\Custom6Controller;
use App\Http\Controllers\Custom7Controller;
use App\Http\Controllers\Custom8Controller;
use App\Http\Controllers\Custom9Controller;
use App\Http\Controllers\Custom10Controller;
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
/* Rutas para el modulo de home */
Route::redirect('/', '/home');
Route::get('/home', [HomeController::class, 'index'])->name('home');

/* Rutas para el modulo de page-web */
Route::get('/page-web/panel2', [Panel2Controller::class, 'index'])->name('panel2');
Route::get('/page-web/panel3', [Panel3Controller::class, 'index'])->name('panel3');
Route::get('/page-web/panel4', [Panel4Controller::class, 'index'])->name('panel4');
Route::get('/page-web/panel5', [Panel5Controller::class, 'index'])->name('panel5');

/* Rutas para el modulo de page-lading */
Route::get('/page-lading/lading2', [Lading2Controller::class, 'index'])->name('lading2');
Route::get('/page-lading/lading3', [Lading3Controller::class, 'index'])->name('lading3');
Route::get('/page-lading/lading4', [Lading4Controller::class, 'index'])->name('lading4');
Route::get('/page-lading/lading5', [Lading5Controller::class, 'index'])->name('lading5');
Route::get('/page-lading/lading6', [Lading6Controller::class, 'index'])->name('lading6');
Route::get('/page-lading/lading7', [Lading7Controller::class, 'index'])->name('lading7');

/* Rutas para el modulo de product-catalog */
Route::get('/product-catalog/product2', [Product2Controller::class, 'index'])->name('product2');
Route::get('/product-catalog/product3', [Product3Controller::class, 'index'])->name('product3');
Route::get('/product-catalog/product4', [Product4Controller::class, 'index'])->name('product4');
Route::get('/product-catalog/product5', [Product5Controller::class, 'index'])->name('product5');
Route::get('/product-catalog/product6', [Product6Controller::class, 'index'])->name('product6');

/* Rutas para el modulo de e-commerce */
Route::get('/e-commerce/ecommerce2', [Ecommerce2Controller::class, 'index'])->name('ecommerce2');
Route::get('/e-commerce/ecommerce3', [Ecommerce3Controller::class, 'index'])->name('ecommerce3');
Route::get('/e-commerce/ecommerce4', [Ecommerce4Controller::class, 'index'])->name('ecommerce4');
Route::get('/e-commerce/ecommerce5', [Ecommerce5Controller::class, 'index'])->name('ecommerce5');
Route::get('/e-commerce/ecommerce6', [Ecommerce6Controller::class, 'index'])->name('ecommerce6');
Route::get('/e-commerce/ecommerce7', [Ecommerce7Controller::class, 'index'])->name('ecommerce7');

/* Rutas para el modulo de custom-system */
Route::get('/custom-system/custom2', [Custom2Controller::class, 'index'])->name('custom2');
Route::get('/custom-system/custom3', [Custom3Controller::class, 'index'])->name('custom3');
Route::get('/custom-system/custom4', [Custom4Controller::class, 'index'])->name('custom4');
Route::get('/custom-system/custom5', [Custom5Controller::class, 'index'])->name('custom5');
Route::get('/custom-system/custom6', [Custom6Controller::class, 'index'])->name('custom6');
Route::get('/custom-system/custom7', [Custom7Controller::class, 'index'])->name('custom7');
Route::get('/custom-system/custom8', [Custom8Controller::class, 'index'])->name('custom8');
Route::get('/custom-system/custom9', [Custom9Controller::class, 'index'])->name('custom9');
Route::get('/custom-system/custom10', [Custom10Controller::class, 'index'])->name('custom10');

/* Ruta para la creacion de la cotizacion */
Route::post('/crear_cotizacion', [CotizacionController::class, 'crear'])->name('crear_cotizacion');

/* Ruta para mostrar la cotizacion */
Route::get('/cotizacion/{id}', 'CotizacionController@mostrar')->name('mostrar');















