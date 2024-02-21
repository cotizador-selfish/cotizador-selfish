<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\QuoteHistories;
use App\Models\Services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {

        $datos = Services::all();

        $url = [
            "/panel2"
        ];
        $title = "Home";

        return view('home', [
            'title' => $title,
            'datos' => $datos,
            'urls' => $url,
        ]);
    }

    public function startquote(Request $request)
    {
        // Recuperar el ID del proyecto desde la solicitud
        $proyecto_id = $request->input('quotes_histories');

        // Guardar el ID del proyecto en la sesión
        $request->session()->put('proyecto_id', $proyecto_id);

        // Redirigir al usuario a la siguiente vista
        return redirect()->route('panel2');
    }
}
