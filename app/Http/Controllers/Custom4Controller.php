<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Custom4Controller extends Controller
{
    public function index()
    {
        $title = 'Generar cotizaciones';
        return view('/custom-system/custom4', [
            'title' => $title,
        ]);
    }
}
