<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Product4Controller extends Controller
{
    public function index()
    {
        $title = "El blog permite publicar artículos";

        return view('/product-catalog/product4', [
            'title' => $title,
        ]);
    }
}
