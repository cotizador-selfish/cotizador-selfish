<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\QuoteHistories;
use App\Models\ContentWriting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class Panel4Controller extends Controller
{
    public function index()
    {

        $datos = ContentWriting::all();

        $title = "Redacción de contenidos";

        return view('panel4', [
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
    return redirect()->route('Panel5');
}


}
