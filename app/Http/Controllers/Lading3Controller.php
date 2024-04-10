<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Lading3Controller extends Controller
{
    public function index()
    {
        $title = "Cargo directo";

        return view('/page-lading/lading3', [
            'title' => $title,
        ]);
    }
}
