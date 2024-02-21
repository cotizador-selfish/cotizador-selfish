<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\QuoteHistories;
use App\Models\WebsiteFeacture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class Panel3Controller extends Controller
{
    public function index()
    {

        $datos = WebsiteFeacture::all();

        $title = "Funciones del sitio web";

        return view('panel3', [
            'title' => $title,
            'datos' => $datos,
        ]);
    }

    public function startquote(Request $request)
{
    // Obtiene el ID del proyecto seleccionado de la sesión
    $proyecto_id = Session::get('proyecto_id');

    // Aquí puedes hacer cualquier otra lógica necesaria antes de pasar a la vista panel3

    // Redirige al usuario a la ruta correspondiente para la vista panel4
    return redirect()->route('Panel4');
}


}
