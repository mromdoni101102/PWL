<?php

namespace App\Http\Controllers;

use App\Models\HobiModel;
use Illuminate\Http\Request;

class HobiController extends Controller
{
    function index()
    {
        return view('hobi.hobi', [
            'hobis' => HobiModel::all()
        ]);
    }
    public function create()
    {
        return view('hobi.create_hobi')
            ->with('url_form', url('/hobi'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama_Hobi' => 'required|string',
            'Jenis_Hobi' => 'required|string|max:50',
            'Durasi_Hobi' => 'required|in:Panjang,Pendek',
        ]);
        $data = HobiModel::create($request->except(['_token']));
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('hobi')
            ->with('success', 'hobi Berhasil Ditambahkan');
    }
    public function edit($id)
    {
        $hobi = HobiModel::find($id);
        return view('hobi.create_hobi')
            ->with('hbi', $hobi)
            ->with('url_form', url('/hobi/' . $id));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama_Hobi' => 'required|string',
            'Jenis_Hobi' => 'required|string|max:50',
            'Durasi_Hobi' => 'required|in:Panjang,Pendek',
        ]);
        $data = HobiModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('hobi')
            ->with('success', 'hobi Berhasil Diedit');
    }
    public function destroy($id)
    {
        HobiModel::where('id', '=', $id)->delete();
        return redirect('hobi')
            ->with('success', 'hobi Berhasil di hapus');
    }
}
