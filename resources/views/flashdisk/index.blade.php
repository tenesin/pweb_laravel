@extends('template')

@section('tulisan1', 'Data Flashdisk')

@section('link1')
    <a href="/flashdisk/tambah" class="btn btn-primary">
        + Tambah Flashdisk Baru
    </a>
    <a href="/pegawai" class="btn btn-secondary">
        Ke Halaman Pegawai
    </a>
@endsection

@section('konten')

    <div class="container my-4">
        <!-- Search Form -->
        <form action="/flashdisk/cari" method="GET" class="mb-4">
            <div class="row align-items-center">
                <label for="cari" class="col-sm-2 col-form-label">Cari Flashdisk:</label>
                <div class="col-sm-6">
                    <input type="text" name="cari" id="cari" class="form-control" 
                           placeholder="Cari Merk Flashdisk ..." value="{{ old('cari') }}">
                </div>
                <div class="col-sm-4">
                    <button type="submit" class="btn btn-success">CARI</button>
                </div>
            </div>
        </form>

        <!-- Data Table -->
        <table class="table table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th>Kode Flashdisk</th>
                    <th>Merk</th>
                    <th>Stok</th>
                    <th>Tersedia</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($flashdisk as $f)
                    <tr>
                        <td>{{ $f->kodeflashdisk }}</td>
                        <td>{{ $f->merkflashdisk }}</td>
                        <td>{{ $f->stokflashdisk }}</td>
                        <td>{{ $f->tersedia == 'y' ? 'Ya' : 'Tidak' }}</td>
                        <td>
                            <a href="/flashdisk/edit/{{ $f->kodeflashdisk }}" class="btn btn-warning btn-sm">
                                <i class="fa-solid fa-pen-to-square"></i> Edit
                            </a>
                            <a href="/flashdisk/hapus/{{ $f->kodeflashdisk }}" class="btn btn-danger btn-sm">
                                <i class="fa-solid fa-trash"></i> Hapus
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Pagination Info -->
        <div class="mt-3">
            <p>Halaman: {{ $flashdisk->currentPage() }}</p>
            <p>Jumlah Data: {{ $flashdisk->total() }}</p>
            <p>Data Per Halaman: {{ $flashdisk->perPage() }}</p>
        </div>

        <!-- Pagination Links -->
        <div class="d-flex justify-content-center">
            {{ $flashdisk->links('pagination::bootstrap-5') }}
        </div>
    </div>

@endsection
