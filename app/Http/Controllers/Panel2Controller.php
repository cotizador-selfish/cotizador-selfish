<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\QuoteHistories;
use App\Models\ContentPages;
use App\Models\Services;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Panel2Controller extends Controller
{
    public function index()
    {
        $datos = ContentPages::all();
        $title = "Páginas de contenido";

        return view('panel2', [
            'title' => $title,
            'datos' => $datos,
        ]);
    }

    public function startquote(Request $request)
    {
        $proyecto_id = $request->input('quotes_histories');
        dd($proyecto_id); // Esto mostrará el valor del proyecto y detendrá la ejecución del código
        // Resto del código...
    }
}
