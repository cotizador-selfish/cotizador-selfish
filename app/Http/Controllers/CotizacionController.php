<?php

namespace App\Http\Controllers;

use App\Http\Middleware\NoCache;
use App\Http\Controllers\Controller;
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

    public function crear($Request)
    {
        // Lógica para crear una nueva cotización
    }

    public function read()
    {
        // Lógica para leer una cotización existente
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
