<?php

namespace App\Http\Controllers;

use App\Models\KeluargaModel;
use Illuminate\Http\Request;

class KeluargaController extends Controller
{
    function index()
    {
        return view('keluarga.keluarga', [
            'keluargas' => KeluargaModel::all()
        ]);
    }
    public function create()
    {
        return view('keluarga.create_keluarga')
            ->with('url_form', url('/keluarga'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'Nama' => 'required|string',
            'Status_Hubungan' => 'required|string|max:50',
            'Tanggal_Lahir' => 'required|date',
        ]);
        $data = KeluargaModel::create($request->except(['_token']));
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('keluarga')
            ->with('success', 'keluarga Berhasil Ditambahkan');
    }
    public function edit($id)
    {
        $keluarga = KeluargaModel::find($id);
        return view('keluarga.create_keluarga')
            ->with('klg', $keluarga)
            ->with('url_form', url('/keluarga/' . $id));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama' => 'required|string',
            'Status_Hubungan' => 'required|string|max:50',
            'Tanggal_Lahir' => 'required|date',
        ]);
        $data = KeluargaModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('keluarga')
            ->with('success', 'keluarga Berhasil Diedit');
    }
    public function destroy($id)
    {
        KeluargaModel::where('id', '=', $id)->delete();
        return redirect('keluarga')
            ->with('success', 'keluarga Berhasil di hapus');
    }
}
