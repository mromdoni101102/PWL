<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Artikel;



class ArtikelController extends Controller
{
    function index()
    {
        return view('artikel', [
            'artikels' => Artikel::all()
        ]);
    }
}
