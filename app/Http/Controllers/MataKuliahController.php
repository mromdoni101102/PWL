<?php

namespace App\Http\Controllers;

use App\Models\MataKuliahModel;
use Illuminate\Http\Request;

class MataKuliahController extends Controller
{
    function index()
    {
        return view('matakuliah.matakuliah', [
            'matakuliahs' => MataKuliahModel::all()
        ]);
    }

    public function create()
    {
        return view('matakuliah.create_matakuliah')
            ->with('url_form', url('/matakuliah'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'Nama_Matkul' => 'required|string',
            'Nama_Dosen' => 'required|string|max:50',
            'Jumlah_SKS' => 'required|in:1,2,3,4',
        ]);
        $data = MataKuliahModel::create($request->except(['_token']));
        //jika data berhasil ditambahkan, akan kembali ke halaman utama
        return redirect('matakuliah')
            ->with('success', 'mataku$matakuliah Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $matakuliah = MataKuliahModel::find($id);
        return view('matakuliah.create_matakuliah')
            ->with('mtk', $matakuliah)
            ->with('url_form', url('/matakuliah/' . $id));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'Nama_Matkul' => 'required|string',
            'Nama_Dosen' => 'required|string|max:50',
            'Jumlah_SKS' => 'required|in:1,2,3,4'
        ]);
        $data = MataKuliahModel::where('id', '=', $id)->update($request->except(['_token', '_method']));
        return redirect('matakuliah')
            ->with('success', 'matakuliah Berhasil Diedit');
    }

    public function destroy($id)
    {
        MataKuliahModel::where('id', '=', $id)->delete();
        return redirect('matakuliah')
            ->with('success', 'matakuliah Berhasil di hapus');
    }
}
