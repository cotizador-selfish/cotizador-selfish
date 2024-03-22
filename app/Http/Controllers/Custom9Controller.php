<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Custom9Controller extends Controller
{
    public function index()
    {
        $title = 'Conectarse a un sistema';
        return view('/custom-system/custom9', [
            'title' => $title,
        ]);
    }
}
