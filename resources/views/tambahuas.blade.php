@extends('template')

@section('tulisan1', 'Tambah Data')

@section('link1')
<a href="/uas" class="btn btn-secondary">Kembali</a>
@endsection

@section('konten')
<div class="container">
    <form action="/uas/store" method="post">
        {{ csrf_field() }}
        <!-- NRP -->
        <div class="row mb-3">
            <label for="NRP" class="col-sm-2 col-form-label">NRP</label>
            <div class="col-sm-10">
                <input type="text" name="NRP" class="form-control" id="NRP" required="required" maxlength="6">
            </div>
        </div>

        <!-- Nilai Angka -->
        <div class="row mb-3">
            <label for="NilaiAngka" class="col-sm-2 col-form-label">Nilai Angka</label>
            <div class="col-sm-10">
                <input type="number" name="NilaiAngka" class="form-control" id="NilaiAngka" required="required">
            </div>
        </div>

        <!-- SKS -->
        <div class="row mb-3">
            <label for="SKS" class="col-sm-2 col-form-label">SKS</label>
            <div class="col-sm-10">
                <input type="number" name="SKS" class="form-control" id="SKS" required="required">
            </div>
        </div>


        <!-- Submit Button -->
        <div class="row mb-3">
            <div class="col-sm-12">
                <center>
                    <input type="submit" value="Simpan Data" class="btn btn-primary">
                </center>
            </div>
        </div>
    </form>
</div>
@endsection
