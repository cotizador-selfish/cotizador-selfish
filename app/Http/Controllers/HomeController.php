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

        $urls = [
            "/page-web/panel2",
            "/page-lading/lading2",
            "/product-catalog/product2",
            "/e-commerce/ecommerce2",
            "/custom-system/custom2",
            "https://selfish.com.mx/servicios"
        ];

        // Verificamos si la cantidad de URLs coincide con la cantidad de servicios
        if (count($datos) !== count($urls)) {
            // Si no coinciden, lanzamos una excepción o ajustamos la lógica según sea necesario
            throw new \Exception("La cantidad de servicios y URLs no coincide");
        }

        $title = "Home";

        return view('home', compact('title', 'datos', 'urls'));
    }
}

