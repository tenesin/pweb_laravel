@extends('template')

@section('tulisan1', 'Tambah Data Flashdisk')

@section('link1')
<a href="/flashdisk">Kembali</a>
@endsection

@section('konten')
    <form action="/flashdisk/store" method="post">
        {{ csrf_field() }}
        
        <div class="row mb-3">
            <label for="kodeflashdisk" class="col-sm-2 col-form-label">Kode Flashdisk</label>
            <div class="col-sm-10">
                <input type="text" name="kodeflashdisk" class="form-control" id="kodeflashdisk" value="{{ $kodeflashdisk }}" readonly>
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="merkflashdisk" class="col-sm-2 col-form-label">Merk Flashdisk</label>
            <div class="col-sm-10">
                <input type="text" name="merkflashdisk" class="form-control" id="merkflashdisk" required="required">
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="stokflashdisk" class="col-sm-2 col-form-label">Stok Flashdisk</label>
            <div class="col-sm-10">
                <input type="number" name="stokflashdisk" class="form-control" id="stokflashdisk" required="required">
            </div>
        </div>
        
        <div class="row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
                <select name="tersedia" class="form-control" id="tersedia" required="required">
                    <option value="y">Yes</option>
                    <option value="n">No</option>
                </select>
            </div>
        </div>
        
        <div class="row mb-3">
            <div class="col-sm-12">
                <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
            </div>
        </div>
    </form>
@endsection
