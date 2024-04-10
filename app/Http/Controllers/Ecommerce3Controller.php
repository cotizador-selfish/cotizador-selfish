<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ecommerce3Controller extends Controller
{
    public function index()
    {
        $title = 'Funciones de e-ecommerce';

        return view('/e-commerce/ecommerce3', [
            'title' => $title,
        ]);
    }
}
