<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\QuoteHistories;
use App\Models\ContentWriting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class Panel4Controller extends Controller
{
    public function index()
    {

        $datos = ContentWriting::all();

        $title = "Redacción de contenidos";

        return view('/page-web/panel4', [
            'title' => $title,
            'datos' => $datos,
        ]);
    }

}
