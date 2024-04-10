<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HostAndSecurity;
use Illuminate\Http\Request;

class Lading7Controller extends Controller
{
    public function index()
    {
        $datos = HostAndSecurity::all();

        $title = "Opciones de hosting y de seguridad";

        return view('/page-lading/lading7', [
            'title' => $title,
            'datos' => $datos,
        ]);
    }
}
