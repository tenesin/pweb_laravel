@extends('template')

@section('tulisan1', 'Edit Flashdisk')

@section('link1')
<a href="/flashdisk" class="btn btn-secondary">Kembali</a>
@endsection

@section('konten')
	@foreach($flashdisk as $f)
	<form action="/flashdisk/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="kodeflashdisk" value="{{ $f->kodeflashdisk }}"> <br/>

        <div class="row mb-3">
            <label for="merkflashdisk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
              <input type="text" name="merkflashdisk" class="form-control" id="merkflashdisk" required="required" value="{{ $f->merkflashdisk }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="stokflashdisk" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-10">
              <input type="number" name="stokflashdisk" class="form-control" id="stokflashdisk" required="required" value="{{ $f->stokflashdisk }}">
            </div>
        </div>

        <div class="row mb-3">
            <label for="tersedia" class="col-sm-2 col-form-label">Tersedia</label>
            <div class="col-sm-10">
              <select name="tersedia" id="tersedia" class="form-control" required>
                <option value="y" {{ $f->tersedia == 'y' ? 'selected' : '' }}>Ya</option>
                <option value="n" {{ $f->tersedia == 'n' ? 'selected' : '' }}>Tidak</option>
              </select>
            </div>
        </div>

        <div class="row mb-3">
            <div class="col-sm-12">
                <center><input type="submit" value="Simpan Data" class="btn btn-primary"></center>
            </div>
        </div>
	</form>
	@endforeach
@endsection
