@extends('layout.template')
@section('content')
<div class="card-body" style="margin-left: 250px;">
    <form method="post" action="{{ $url_form }}">
    @csrf
    {!! (isset($mhs))? method_field('PUT') : '' !!}

    <div class="form-group">
        <label>NIM</label>
        <input class="form-control" @error('nim') is-invalid @enderror type="text" value="{{ isset($mhs)? $mhs->nim : old('nim') }}" name="nim">
        @error('nim')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Nama</label>
        <input class="form-control" @error('nama') is-invalid @enderror type="text" value="{{ isset($mhs)? $mhs->nama : old('nama') }}" name="nama">
        @error('nama')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="form-group">
        <div class="form-group">
            <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control" @error('jk') is-invalid @enderror value="{{ isset($mhs)? $mhs->jk : old('jk') }}" name="jk">
                  <option value="">--Pilih Jenis Kelamin--</option>
                  <option value="l">Laki-laki</option>
                  <option value="p">Perempuan</option>
                </select>
                @error('jk')
                  <span class="error invalid-feedback">{{ $message }}</span>
                @enderror
              </div>
        </div>
    </div>

    <div class="form-group">
        <label>tempat lahir</label>
        <input class="form-control" @error('tempat_lahir') is-invalid @enderror type="text" value="{{ isset($mhs)? $mhs->tempat_lahir : old('tempat_lahir') }}" name="tempat_lahir">
        @error('tempat_lahir')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input class="form-control" @error('tanggal_lahir') is-invalid @enderror type="date" value="{{ isset($mhs)? $mhs->tanggal_lahir : old('tanggal_lahir') }}" name="tanggal_lahir">
            @error('tanggal_lahir')
                <span class="error invalid-feedback">{{ $message }}</span>
            @enderror
          </div>
    </div>

    <div class="form-group">
        <label>Kelas</label>
        <select class="form-control @error('kelas') is-invalid @enderror" value="{{isset($mhs)? $mhs->kelas : old('kelas')}}" name="kelas" >
            @foreach($kelas as $kls)
            <option value="{{$kls->id}}">{{$kls->nama_kelas}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label>Alamat</label>
        <input class="form-control" @error('alamat') is-invalid @enderror type="text" value="{{ isset($mhs)? $mhs->alamat : old('alamat') }}" name="alamat">
        @error('alamat')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label>No.Hp</label>
        <input class="form-control" @error('hp') is-invalid @enderror type="text" value="{{ isset($mhs)? $mhs->hp : old('hp') }}" name="hp">
        @error('hp')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary btn-block">submit</button>

@endsection
@push('custom_js')
    <script>
        
    </script>
@endpush