<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\QuoteHistories;
use App\Models\HostAndSecurity;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Panel5Controller extends Controller
{
    public function index()
    {

        $datos = HostAndSecurity::all();

        $title = "Opciones de hosting y de seguridad";

        return view('/page-web/panel5', [
            'title' => $title,
            'datos' => $datos,
        ]);
    }
}
