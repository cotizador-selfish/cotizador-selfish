<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HostAndSecurity;
use Illuminate\Http\Request;

class Product6Controller extends Controller
{
    public function index()
    {
        $datos = HostAndSecurity::all();

        $title = "Opciones de hosting y de seguridad";

        return view('/product-catalog/product6', [
            'title' => $title,
            'datos' => $datos,
        ]);
    }
}
