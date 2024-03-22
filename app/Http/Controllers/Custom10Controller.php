<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\HostAndSecurity;
use Illuminate\Http\Request;

class Custom10Controller extends Controller
{
    public function index()
    {
        $datos = HostAndSecurity::all();

        $title = 'Actualmente tienes contratado un dominio';

        return view('/custom-system/custom10', [
            'title' => $title,
            'datos' => $datos,
        ]);
    }
}
