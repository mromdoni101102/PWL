@extends('layout.template')
@section('content')
<div style="margin-left: 300px"><h1>Welcome to my website </h1></div>
@push('custom_js')
<script>
    alert("WElCOME")
</script>
@endpush
@endsection