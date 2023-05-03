<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        return view('products', [
            'judul' => 'Home Products',
            'products' => ['roti', 'susu', 'keripik']
        ]);
    }
    function roti()
    {
        return view('products', [
            'judul' => 'roti',
            'products' => ['roti coklat', 'roti keju', 'roti susu']
        ]);
    }
    function susu()
    {
        return view('products', [
            'judul' => 'susu',
            'products' => ['susu sapi', 'susu beruang', 'susu kedelai']
        ]);
    }
    function keripik()
    {
        return view('products', [
            'judul' => 'keripik',
            'products' => ['keripik asin', 'keripik manis', 'keripik balado']
        ]);
    }
}
