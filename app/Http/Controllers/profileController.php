<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class profileController extends Controller
{
    function index()
    {
        return view('profile', [
            'nama' => 'M. Rom Doni',
            'kelas' => 'Ti-2A',
            'absen' => '17',
            'nim' => '2141720037'
        ]);
    }
}
