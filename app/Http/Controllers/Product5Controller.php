<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Product5Controller extends Controller
{
    public function index()
    {
        $title = "Proporcionar las traducciones";

        return view('/product-catalog/product5', [
            'title' => $title,
        ]);
    }
}
