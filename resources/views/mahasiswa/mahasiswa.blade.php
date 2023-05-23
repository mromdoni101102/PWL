@extends('layout.template')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mahasiswa</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">LIST</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">

            <a href="{{url('mahasiswa/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
  
            <table class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>NIM</th>
                  <th>Nama</th>
                  <th>Foto</th>
                  <th>JK</th>
                  <th>tempat lahir</th>
                  <th>tanggal lahir</th>
                  <th>HP</th>
                  <th>Kelas</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                @if($mahasiswa->count() > 0)
                  @foreach($paginate as $i => $mhs)
                    <tr>
                      <td>{{++$i}}</td>
                      <td>{{$mhs->nim}}</td>
                      <td>{{$mhs->nama}}</td>
                      <td><img src="{{ asset('/storage/' . $mhs->foto) }}" alt="" width="100px" height="100px" style="overflow: auto"></td>
                      <td>{{$mhs->jk}}</td>
                      <td>{{$mhs->tempat_lahir}}</td>
                      <td>{{$mhs->tanggal_lahir}}</td>
                      <td>{{$mhs->hp}}</td>
                      <td>{{$mhs->kelas->nama_kelas}}</td>
                      <td>
                        <!-- Bikin tombol edit dan delete -->
                        <a href="{{ url('/mahasiswa/'. $mhs->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>
                        
                        <a href="{{url('/mahasiswa/'.$mhs->id.'/khs/')}}" class="btn btn-sm btn-primary">nilai</a>
  
                        <form method="POST" action="{{ url('/mahasiswa/'.$mhs->id) }}" >
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr><td colspan="6" class="text-center">Data tidak ada</td></tr>
                @endif
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        <!-- /.card-body -->
        <div class="card-footer">
          Lihat bawah berarti selesai
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

  @endsection

  @push('custom_css')
      <style>
        th{
            
        }
        /* .card{
            background:green;
            color:aliceblue;
            transition: 0.5s;
        }

        .card:hover{
            background: aqua;
            color: blue;
            transform:scale(0.9);
        } */
      </style>
  @endpush

  @push('custom_js')
      {{-- <script>
        alert('Halaman Home')
      </script> --}}
  @endpush