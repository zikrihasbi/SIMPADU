@extends('template.main')

@section('content')
<main class="app-main">
    <div class="container-fluid mt-4">
        <h3 class="mb-4">Data Program Studi</h3>

        @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
        @endif


        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif  

        <a href="{{ route('prodi.create') }}" class="btn btn-primary mb-3">Tambah</a>

        <div class="card">
            <div class="card-body">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Program Studi</th>
                            <th>Kaprodi</th>
                            <th>Jurusan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($prodi as $index => $p)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $p->nama }}</td>
                            <td>{{ $p->kaprodi }}</td>
                            <td>{{ $p->jurusan }}</td>
                            <td>
                            <a href="{{ route('prodi.edit', $p->ID) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('prodi.destroy', $p->ID) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin ingin menghapus data ini?')" class="btn btn-danger btn-sm">Hapus</button>
                        </form>
                        </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="5" class="text-center">Tidak ada data program studi</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
