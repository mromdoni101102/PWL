@extends('layout.template')
@section('content')
<div class="card-body" style="margin-left: 250px;">
    <form method="post" action="{{ $url_form }}">
    @csrf
    {!! (isset($klg))? method_field('PUT') : '' !!}

    <div class="form-group">
        <label>Nama</label>
        <input class="form-control" @error('Nama') is-invalid @enderror type="text" value="{{ isset($klg)? $klg->Nama : old('Nama') }}" name="Nama">
        @error('Nama')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="form-group">
        <label>Status Hubungan</label>
        <input class="form-control" @error('Status_Hubungan') is-invalid @enderror type="text" value="{{ isset($klg)? $klg->Status_Hubungan : old('Status_Hubungan') }}" name="Status_Hubungan">
        @error('Status_Hubungan')
            <span class="error invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
    
    <div class="form-group">
       <div class="form-group">
            <label>Tanggal Lahir</label>
            <input class="form-control" @error('Tanggal_Lahir') is-invalid @enderror type="date" value="{{ isset($mhs)? $mhs->Tanggal_Lahir : old('Tanggal_Lahir') }}" name="Tanggal_Lahir">
            @error('Tanggal_Lahir')
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