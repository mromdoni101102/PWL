<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact', [
            'message' => 'Kontak berhasil !'
        ]);
    }

    public function create()
    {
        return view('contact', [
            'message' => 'Pembuatan Kontak berhasil !'
        ]);
    }

    public function store(Request $request)
    {
        return view('contact', [
            'message' => 'store Kontak berhasil !'
        ]);
    }

    public function show($id)
    {
        return view('contact', [
            'message' => 'Show Kontak berhasil !'
        ]);
    }

    public function update(Request $request, $id)
    {
        return view('contact', [
            'message' => 'Update Kontak berhasil !'
        ]);
    }


    public function destroy($id)
    {
        return view('contact', [
            'message' => 'Destroy Kontak berhasil !'
        ]);
    }
}
