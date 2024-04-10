<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Product3Controller extends Controller
{
    public function index()
    {
        $title = "El slider es un carrusel";

        return view('/product-catalog/product3', [
            'title' => $title,
        ]);
    }
}
