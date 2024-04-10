<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Lading6Controller extends Controller
{
    public function index()
    {
        $title = "Proporcionar las traducciones";

        return view('/page-lading/lading6', [
            'title' => $title,
        ]);
    }
}
