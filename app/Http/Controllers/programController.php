<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class programController extends Controller
{
    function index()
    {
        return view('programs', [
            'judul' => 'list program',
            'list' => ['kelistrikan', 'pertanian', 'keuangan']
        ]);
    }

    function kelistrikan()
    {
        return view('programs', [
            'judul' => 'List Program Kelistrikan',
            'list' => ['Mematikan', 'Menyalakan', 'Memperbaiki']

        ]);
    }


    function pertanian()
    {
        return view('programs', [
            'judul' => 'List Program pertanian',
            'list' => ['Mencangkul', 'Membajak', 'Menanam']

        ]);
    }
    function keuangan()
    {
        return view('programs', [
            'judul' => 'List Program keuangan',
            'list' => ['Menghitung', 'Meminjam', 'Mengembalikan']

        ]);
    }
}
