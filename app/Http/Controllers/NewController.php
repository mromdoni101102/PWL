<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    function index($news)
    {
        return view('news', [
            'judul' => $news
        ]);
    }
}
