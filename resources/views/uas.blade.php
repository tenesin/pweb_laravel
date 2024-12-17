@extends('template')

@section('tulisan1', 'Data Nilai Kuliah')

@section('link1')
    <a href="/uas/tambahuas" class="btn btn-primary">
        + Tambah Data
    </a>
@endsection

@section('konten')
<div class="container my-4">
    <!-- Search Form -->
    <form action="/nilaikuliah/cari" method="GET" class="mb-4">
        <div class="row align-items-center">
            <label for="cari" class="col-sm-2 col-form-label">Cari NRP Mahasiswa:</label>
            <div class="col-sm-6">
                <input type="text" name="cari" id="cari" class="form-control" 
                       placeholder="Cari NRP ..." value="{{ old('cari') }}">
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
                <th>ID</th>
                <th>NRP</th>
                <th>Nilai Angka</th>
                <th>SKS</th>
                <th>Nilai Huruf</th>
                <th>Bobot</th>
            </tr>
        </thead>
        <tbody>
            @foreach($nilaikuliah as $nk)
                <tr>
                    <td>{{ $nk->ID }}</td>
                    <td>{{ $nk->NRP }}</td>
                    <td>{{ $nk->NilaiAngka }}</td>
                    <td>{{ $nk->SKS }}</td>
                    <td>{{ $nk->NilaiHuruf }}</td> <!-- Showing dynamic Nilai Huruf -->
                    <td>{{ $nk->Bobot }}</td> <!-- Showing dynamic Bobot -->
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Pagination Info -->
    <div class="mt-3">
        <p>Halaman: {{ $nilaikuliah->currentPage() }}</p>
        <p>Jumlah Data: {{ $nilaikuliah->total() }}</p>
        <p>Data Per Halaman: {{ $nilaikuliah->perPage() }}</p>
    </div>

    <!-- Pagination Links -->
    <div class="d-flex justify-content-center">
        {{ $nilaikuliah->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection
