<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- Set Judul Halaman -->
@section('judul_halaman', 'Halaman Tentang')

<!-- Konten Halaman -->
@section('konten')

<!-- Load Bootstrap CSS and JS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript Functions -->
<script>
    function showAlert() {
        alert("Selamat anda dapat 1 milyar !");
    }

    function validateForm() {
        const nrp = document.getElementById("nrpku");

        if (nrp.value.length !== 10) {
            alert("NRP harus 10 digit");
            nrp.focus();
            return false;
        }

        if (isNaN(nrp.value)) {
            alert("NRP harus berupa angka!");
            nrp.focus();
            return false;
        }

        showAlert(); // Show the alert if validation passes
        return true;
    }
</script>

<div class="container mt-4">
    <form action="https://www.google.co.id" method="get" onsubmit="return validateForm();">
        <div class="mb-3">
            <label for="nrpku" class="form-label">NRP</label>
            <input type="text" class="form-control" placeholder="Isikan 10 digit NRP" name="nrp" id="nrpku">
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" placeholder="Nama lengkap" name="name" id="nama">
        </div>

        <div class="mb-3">
            <label for="umur" class="form-label">Umur</label>
            <input type="text" class="form-control" placeholder="Isikan umur" name="umur" id="umur">
        </div>

        <div class="d-flex gap-2">
            <input type="reset" class="btn btn-warning" value="Reset">
            <input type="submit" class="btn btn-success" value="Kirim">
            <input type="button" class="btn btn-secondary" value="Alert" onclick="showAlert();">
        </div>
    </form>
</div>

@endsection
