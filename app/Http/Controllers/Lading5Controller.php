<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Lading5Controller extends Controller
{
    public function index()
    {
        $title = "Imágenes con enlaces";

        return view('lading5', [
            'title' => $title,
        ]);
    }
}
