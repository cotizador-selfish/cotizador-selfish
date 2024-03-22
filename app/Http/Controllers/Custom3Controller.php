<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Custom3Controller extends Controller
{
    public function index()
    {
        $title = 'Registrar ventas';
        return view('/custom-system/custom3', [
            'title' => $title,
        ]);
    }
}
