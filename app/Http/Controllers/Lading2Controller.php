<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Lading2Controller extends Controller
{
    public function index()
    {
        $title = "Campaña de lanzamiento";

        return view('/page-lading/lading2', [
            'title' => $title,
        ]);
    }
}
