<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Custom8Controller extends Controller
{
    public function index()
    {
        $title = 'Control de procesos';
        return view('/custom-system/custom8', [
            'title' => $title,
        ]);
    }
}
