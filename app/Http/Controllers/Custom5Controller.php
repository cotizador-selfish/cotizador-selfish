<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Custom5Controller extends Controller
{
    public function index()
    {
        $title = 'Generar Documentos';
        return view('/custom-system/custom5', [
            'title' => $title,
        ]);
    }
}
