@extends('template.main')
@section('content')
<main class="app-main">
  <!--begin::App Content Header-->
  <div class="app-content-header">
    <!--begin::Container-->
    <div class="container-fluid">

      <!--begin::Row-->
      <div class="row">
        <div class="col-sm-6">
          <h3 class="mb-0">Mahasiswa</h3>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-end">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="index.php">Data Mahasiswa</a></li>
            <li class="breadcrumb-item active" aria-current="page">Tambah</li>
          </ol>
        </div>
        <div class="col-md-12">
          <div class="card mb-4">
            <div class="card-header">
              <h3 class="card-title">Data Mahasiswa</h3>
              <div class="card-tools">
                <a href="tambahmahasiswa.php" class="btn btn-primary">Tambah</a>
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>no</th>
                      <th>nim</th>
                      <th>nama</th>
                      <th>tanggal_lahir</th>
                      <th>telp</th>
                      <th>email</th>
                      <th>nama_prodi</th>
                      <th>Aksi</th>

                    </tr>
                  </thead>
                    </tbody>
                    

                    @foreach ($mahasiswa as $m) 
                      <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $m->nim }}</td>
                        <td>{{ $m->nama }}</td>
                        <td>{{ $m->tanggal_lahir }}</td>
                        <td>{{ $m->telp }}</td>
                        <td>{{ $m->prodi->nama }}</td>
                        <td>{{ $m->email}}</td>
                        <td>
                            <a href="deletemahasiswa.php?nim={{ $m->nim}}"
                            onclick="return confirm('yakin ingin hapus?')" 
                            class="btn btn-danger">Delete</a>
                            <a href="editmahasiswa.php?nim={{ $m->nim}}" 
                            class="btn btn-warning">Edit</a></
                            </tr>
                        @endforeach

                                </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->

                        </div>
                        <!-- /.card -->

                        <!-- /.card -->
                    </div>
                    <!-- /.col -->

                    <!-- /.col -->
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->

                <!-- /.row (main row) -->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content-->
</main>
@endsection
              
               