<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\QuoteHistories;
use App\Models\WebsiteFeacture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class Panel3Controller extends Controller
{
    public function index()
    {

        $datos = WebsiteFeacture::all();

        $title = "Funciones del sitio web";

        return view('/page-web/panel3', [
            'title' => $title,
            'datos' => $datos,
        ]);
    }
}
