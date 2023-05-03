@extends('layout.template')
@section('content')
<div class="card-body" style="margin-left: 250px;">
    <form method="post" action="{{ $url_form }}">
    @csrf
    {!! (isset($mtk))? method_field('PUT') : '' !!}

    <div class="form-group">
        <label>Nama Matkul</label>
        <input class="form-control" @error('Nama_Matkul') is-invalid @enderror type="text" value="{{ isset($mtk)? $mtk->Nama_Matkul : old('Nama_Matkul') }}" name="Nama_Matkul">
        @error('Nama_Matkul')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Nama Dosen</label>
        <input class="form-control" @error('Nama_Dosen') is-invalid @enderror type="text" value="{{ isset($mtk)? $mtk->Nama_Dosen : old('Nama_Dosen') }}" name="Nama_Dosen">
        @error('Nama_Dosen')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="form-group">
        <div class="form-group">
            <div class="form-group">
                <label>Jumlah SKS</label>
                <select class="form-control" @error('Jumlah_SKS') is-invalid @enderror value="{{ isset($mtk)? $mtk->Jumlah_SKS : old('Jumlah_SKS') }}" name="Jumlah_SKS">
                  <option value="">--Pilih SKS--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                </select>
                @error('Jumlah_SKS')
                  <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
        </div>
    </div>
    
    <button type="submit" class="btn btn-primary btn-block">submit</button>

@endsection
@push('custom_js')
    <script>
        
    </script>
@endpush