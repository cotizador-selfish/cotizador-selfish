<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Lading7Controller extends Controller
{
    public function index()
    {
        $title = "Hosting y seguridad";

        return view('lading7', [
            'title' => $title,
        ]);
    }
}
