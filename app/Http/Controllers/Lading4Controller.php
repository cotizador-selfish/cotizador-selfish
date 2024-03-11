<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Lading4Controller extends Controller
{
    public function index()
    {
        $title = "Evento o información";

        return view('lading4', [
            'title' => $title,
        ]);
    }
}
