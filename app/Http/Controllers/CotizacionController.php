<?php

namespace App\Http\Controllers;

use App\Http\Middleware\NoCache;
use App\Http\Controllers\Controller;
use App\Models\QuoteHistories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CotizacionController extends Controller
{
    public function index ()
    {
        $title = 'Cotización';

        return view('/cotizacion', [
            'title' => $title,
        ]);
    }
    public function __construct()
    {
        //$this->middleware(NoCache::class);
    }

    public function crear(Request $request) {
        // Validar los datos del formulario
        $request->validate([
            'id_service' => 'required|numeric|between:1,5', // Validar que el ID del servicio esté entre 1 y 5
        ]);

        // Crear una nueva instancia de la clase QuoteHistories
        $cotizacion = new QuoteHistories();

        // Establecer los valores de los atributos de la nueva cotización
        $cotizacion->ip_address = $request->ip();
        $cotizacion->cookie = $request->cookie('cotizacion_cookie', uniqid());
        $cotizacion->id_service = $request->input('id_service');
        // Agregar otros atributos según sea necesario

        // Guardar la nueva cotización en la base de datos
        $cotizacion->save();

        // Redirigir a una vista para mostrar los detalles de la cotización
        return redirect()->route('cotizacion.mostrar', $cotizacion->id);
    }

    public function mostrar($id) {
        // Obtener la cotización según el ID proporcionado junto con la relación "service"
        $cotizacion = QuoteHistories::with('service')->findOrFail($id);

        // Pasar la variable $cotizacion a la vista de detalles de la cotización
        return view('cotizacion.mostrar', ['cotizacion' => $cotizacion]);
    }
    public function update()
    {
        // Lógica para actualizar una cotización existente
    }

    public function delete($id)
    {
        // Lógica para eliminar una cotización existente
    }

}
