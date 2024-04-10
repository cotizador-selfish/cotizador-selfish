<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ecommerce2Controller extends Controller
{
    public function index()
    {
        $title = 'Numero de productos en stock';

        return view('/e-commerce/ecommerce2', [
            'title' => $title,
        ]);
    }
}
