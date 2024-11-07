<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- Set Judul Halaman -->
@section('judul_halaman', 'Halaman Pertemuan 1')

<!-- Tambahkan Custom CSS -->
@push('styles')
<style>
    body {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
        background-color: beige;
    }
    .nav-per a:link {
        text-decoration: none;
        color: blue;
    }
    .nav-per a:visited {
        text-decoration: none;
        color: blue;
    }
    .nav-per a:hover {
        font-size: larger;
        color: green;
        text-decoration: underline;
    }
    .headingMerah {
        color: red;
        font-size: large;
    }
    .paragraphRight {
        text-align: right;
    }
    .paragraphMid {
        text-align: center;
    }
</style>
@endpush

<!-- Konten Utama -->
@section('konten')
    <h1 style="color: rgb(86, 131, 226)">Halo Selamat Datang</h1>
    <h1 class="headingMerah">Halo Selamat Datang Lagi</h1>

    <p style="font-size: small; color: aqua;">Jurusan Sistem Informasi</p>
    <p class="paragraphRight">Jurusan Sistem Informasi 2</p>
    <p class="paragraphMid">Jurusan Sistem Informasi 3</p>

    <!-- Link Navigasi -->
    <nav class="nav-per">
        <a href="https://www.google.com" target="_blank">Google</a>
        <a href="https://www.its.ac.id" target="_self">ITS</a>
        <a href="{{ url('test.html') }}">File Pertemuan 1</a>
    </nav>
@endsection
