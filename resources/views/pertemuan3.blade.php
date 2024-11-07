<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- Set Judul Halaman -->
@section('judul_halaman', 'Halaman Pertemuan 3')

<!-- Konten Halaman -->
@section('konten')

<!-- Load External CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://kit.fontawesome.com/db3782c531.js" crossorigin="anonymous"></script>

<div class="container">
    <!-- Header Section -->
    <div class="mt-4 p-5 text-center bg-dark text-white">
        <h1>My First Bootstrap Page</h1>
    </div>

    <!-- Alert Section -->
    <div class="alert alert-success my-2">
        <p class="text-center">This part is inside a .container class.</p>
    </div>

    <p class="text-center">The .container class provides a responsive fixed width container.</p>

    <!-- Main Content Section -->
    <div class="row">
        <!-- Left Column -->
        <div class="col-lg-1 border border-1">
            <p>kiri</p>
        </div>

        <!-- Center Column -->
        <div class="col-lg-10 text-center border border-1">
            <p>tengah</p>

            <!-- Nested Rows in Center Column -->
            <div class="row">
                <!-- Left Nested Column (8/12) -->
                <div class="col-lg-8 border border-1">
                    <p>ini isinya 8</p>
                </div>
                <!-- Right Nested Column (4/12) -->
                <div class="col-lg-4 border border-1">
                    <p>ini isinya 4</p>
                </div>
            </div>

            <!-- Button Section -->
            <div class="row mt-2">
                <div class="col-lg-12">
                    <a href="https://instagram.com/ishaqyudha_" target="_blank">
                        <button class="btn btn-danger">
                            <i class="fa-solid fa-bolt"></i> Bahaya
                        </button>
                    </a>
                    <a href="https://its.ac.id" target="_blank">
                        <button class="btn border border-warning border-2 mx-2 my-2">
                            <i class="fa-solid fa-rocket"></i> Warning
                        </button>
                    </a>
                </div>
            </div>
        </div>

        <!-- Right Column -->
        <div class="col-lg-1 border border-1">
            <p>kanan</p>
        </div>
    </div>
</div>

@endsection
