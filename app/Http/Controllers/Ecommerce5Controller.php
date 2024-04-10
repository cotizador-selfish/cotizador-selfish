<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ecommerce5Controller extends Controller
{
    public function index()
    {
        $title = 'Funciones del sitio web';

        return view('/e-commerce/ecommerce5', [
            'title' => $title,
        ]);
    }
}
