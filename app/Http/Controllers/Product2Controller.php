<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Product2Controller extends Controller
{
    public function index()
    {
        $title = "Formulario para recibir";

        return view('/product-catalog/product2', [
            'title' => $title,
        ]);
    }
}
