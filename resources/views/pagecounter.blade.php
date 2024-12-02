@extends('template')

@section('tulisan1', 'Data Pegawai')

@section('link1')
    <a href="/pegawai/tambah" class="btn btn-primary">
        + Tambah Pegawai Baru
    </a>
    <a href="/flashdisk" class="btn btn-secondary">
        Ke Halaman Flashdisk
    </a>
    <a href="/uas" class="btn btn-danger">
        Ke Halaman UAS
    </a>
    <a href="/pagecounter" class="btn btn-success">
        Ke Halaman Page Counter
    </a>
@endsection

@section ('konten')
  <div class="counter-container">
    <h1>Page Visits: <span id="count" class="text-primary">{{ $result }}</span></h1>
  </div>

 @endsection
