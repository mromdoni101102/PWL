<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{

    function index()
    {
        return view('about-us
        ', [
            'whatsapp' => '081',
            'instagram' => '081_0',
            'twitter' => 'Pro081'
        ]);
    }
}
