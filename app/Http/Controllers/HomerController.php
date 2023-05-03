<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomerController extends Controller
{
    function index()
    {
        return view('layout.template');
    }
}
