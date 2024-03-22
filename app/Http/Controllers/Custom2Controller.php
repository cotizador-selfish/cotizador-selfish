<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Custom2Controller extends Controller
{
    public function index()
    {
        $title = 'Control de inventario';
        return view('/custom-system/custom2', [
            'title' => $title,
        ]);
    }
}
