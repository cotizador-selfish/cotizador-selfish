<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Custom7Controller extends Controller
{
    public function index()
    {
        $title = 'Generar códigos QR';
        return view('/custom-system/custom7', [
            'title' => $title,
        ]);
    }
}
