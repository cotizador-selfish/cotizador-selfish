<?php

namespace App\Http\Controllers;
use App\Models\HostAndSecurity;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ecommerce7Controller extends Controller
{
    public function index()
    {
        $datos = HostAndSecurity::all();

        $title = 'Opciones de hosting y de seguridad';

        return view('/e-commerce/ecommerce7', [
            'title' => $title,
            'datos' => $datos,
        ]);
    }
}
