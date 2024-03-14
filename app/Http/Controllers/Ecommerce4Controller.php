<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ecommerce4Controller extends Controller
{
    public function index()
    {
        $title = 'Funciones de adicionales';

        return view('/e-commerce/ecommerce4', [
            'title' => $title,
        ]);
    }
}
