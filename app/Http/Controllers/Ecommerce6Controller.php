<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Ecommerce6Controller extends Controller
{
    public function index()
    {

        $title = 'Redacción de contenidos';

        return view('/e-commerce/ecommerce6', [
            'title' => $title,
        ]);
    }
}
