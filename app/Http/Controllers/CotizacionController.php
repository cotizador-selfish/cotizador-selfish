<?php

namespace App\Http\Controllers;

use App\Http\Middleware\NoCache;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CotizacionController extends Controller
{
    public function __construct()
    {
        $this->middleware(NoCache::class);
    }

    public function crearCotizacion()
    {
        // Lógica para crear una nueva cotización
    }
    public function iniciarCotizacion(Request $request)
    {
        // Lógica para iniciar la cotización

        // Si ocurre un error, redirigir al home
    }

    public function verCotizacion($id)
    {
        // Lógica para mostrar los detalles de una cotización específica
    }

    public function retroceder($paginaActual)
    {
        // Define las páginas y sus rutas correspondientes
        $paginas = [
            'panel2' => 'cotizacion.home',
            'panel3' => 'cotizacion.panel2',
            'panel4' => 'cotizacion.panel3',
            'panel5' => 'cotizacion.panel4',
            // Ajusta esto según tus necesidades...
        ];

        // Verifica si la página actual tiene una página anterior definida
        if (isset($paginas[$paginaActual])) {
            // Redirige al usuario a la página anterior
            return redirect()->route($paginas[$paginaActual]);
        }

        // Si no hay página anterior definida, redirige al usuario al inicio de la cotización
        return redirect()->route('cotizacion.home');
    }

    public function mostrarPagina()
    {
        $paginaActual = "panel2";

        return view('panel2')->with('paginaActual', $paginaActual);
    }
}
