<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class Panel6Controller extends Controller
{
    public function index()
    {
        // Obtiene el ID del proyecto seleccionado de la sesión
        $proyecto_id = Session::get('proyecto_id');

        // Aquí puedes realizar cualquier otra lógica necesaria antes de pasar a la vista panel6

        // Título para la vista
        $title = "Mi cotización";

        // Pasa el ID del proyecto y el título a la vista panel6
        return view('panel6', [
            'title' => $title,
            'proyecto_id' => $proyecto_id,
        ]);
    }
}
