@extends('template.main')
@section('content')
<!--begin::App Main-->
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
                            <h3 class="card-title">Tambah Mahasiswa</h3>
                        </div>
                        <div class="card-body">

                            <form action="{{ url('mahasiswa') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="nim" class="form-label">NIM</label>
                                    <input type="text" name="nim" id="nim"
                                    class="form-control @error('nim') is-invalid @enderror">
                                     @error ('nim')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" name="password" id="password" 
                                    class="form-control @error('password') is-invalid @enderror">
                                     @error ('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama" class="form-label">Nama</label>
                                    <input type="text" name="nama" id="nama" 
                                    class="form-control @error('nama') is-invalid @enderror">
                                     @error ('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="tanggal_lahir" class="form-label">Tanggal Lahir</label>
                                    <input type="date" name="tanggal_lahir" id="tanggal_lahir" 
                                    class="form-control  @error('tanggal_lahir') is-invalid @enderror">
                                     @error ('tanggal_lahir')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" name="email" id="email" 
                                    class="form-control @error('email') is-invalid @enderror">
                                     @error ('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="telp" class="form-label">Telp</label>
                                    <input type="text" name="telp" id="telp" 
                                    class="form-control @error('telp') is-invalid @enderror">
                                     @error ('telp')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                                <div class="form-group">
                                    <label for="id_prodi" class="form-label">Prodi</label>
                                    <select class="form-select" name="id_prodi" id="id_prodi" required>
                                       @foreach ($prodi as $p)
                                       <option value="{{ $p->ID }}">{{ $p->nama }}</option>
                                       @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="foto" class="form-label">Upload Foto</label>
                                    <input type="file" class="form-control" id="foto" 
                                    name="foto" @error('foto') is-invalid @enderror">
                                     @error ('foto')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                                @enderror
                                </div>
                                <div class="card-footer mt-4">
                                    <a href="index.php" class="btn btn-warning">Kembali</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</main>
@endsection