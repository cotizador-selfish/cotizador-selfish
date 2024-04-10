<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Custom6Controller extends Controller
{
    public function index()
    {
        $title = 'Generar facturas';
        return view('/custom-system/custom6', [
            'title' => $title,
        ]);
    }
}
