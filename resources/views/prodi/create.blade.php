@extends('template.main')

@section('content')
<main class="app-main">
    <div class="container-fluid mt-4">
        <h3 class="mb-4">Tambah Program Studi</h3>

        <form action="{{ route('prodi.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Program Studi</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="kaprodi" class="form-label">Nama Kaprodi</label>
                <input type="text" name="kaprodi" id="kaprodi" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('prodi.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</main>
@endsection
@extends('template.main')

@section('content')
<main class="app-main">
    <div class="container-fluid mt-4">
        <h3 class="mb-4">Tambah Program Studi</h3>

        <form action="{{ route('prodi.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Program Studi</label>
                <input type="text" name="nama" id="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="kaprodi" class="form-label">Nama Kaprodi</label>
                <input type="text" name="kaprodi" id="kaprodi" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="jurusan" class="form-label">Jurusan</label>
                <input type="text" name="jurusan" id="jurusan" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
            <a href="{{ route('prodi.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</main>
@endsection
