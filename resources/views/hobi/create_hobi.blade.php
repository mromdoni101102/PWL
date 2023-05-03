@extends('layout.template')
@section('content')
<div class="card-body" style="margin-left: 250px;">
    <form method="post" action="{{ $url_form }}">
    @csrf
    {!! (isset($hbi))? method_field('PUT') : '' !!}

    <div class="form-group">
        <label>Nama Hobi</label>
        <input class="form-control" @error('Nama_Hobi') is-invalid @enderror type="text" value="{{ isset($hbi)? $hbi->Nama_Hobi : old('Nama_Hobi') }}" name="Nama_Hobi">
        @error('Nama_Hobi')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Jenis Hobi</label>
        <input class="form-control" @error('Jenis_Hobi') is-invalid @enderror type="text" value="{{ isset($hbi)? $hbi->Jenis_Hobi : old('Jenis_Hobi') }}" name="Jenis_Hobi">
        @error('Jenis_Hobi')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="form-group">
        <div class="form-group">
            <label>Durasi Hobi</label>
            <select class="form-control" @error('Durasi_Hobi') is-invalid @enderror value="{{ isset($hbi)? $hbi->Durasi_Hobi : old('Durasi_Hobi') }}" name="Durasi_Hobi">
              <option value="">--Durasi Hobi--</option>
              <option value="Panjang">Panjang</option>
              <option value="Pendek">Pendek</option>
            </select>
            @error('Durasi_Hobi')
              <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
    </div>
    
    <button type="submit" class="btn btn-primary btn-block">submit</button>

@endsection
@push('custom_js')
    <script>
        
    </script>
@endpush