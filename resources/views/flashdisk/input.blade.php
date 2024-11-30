<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Flashdisk Form Validation</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card mt-5">
                    <div class="card-body">
                        <h3 class="text-center">Flashdisk Form</h3>
                        <br/>

                        {{-- Display validation errors --}}
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <br/>
                        <!-- Form -->
                        <form action="/flashdisk/proses" method="post">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="kodeflashdisk">Kode Flashdisk</label>
                                <input class="form-control" type="text" name="kodeflashdisk" value="{{ old('kodeflashdisk') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="merkflashdisk">Merk Flashdisk</label>
                                <input class="form-control" type="text" name="merkflashdisk" value="{{ old('merkflashdisk') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="stokflashdisk">Stok Flashdisk</label>
                                <input class="form-control" type="number" name="stokflashdisk" value="{{ old('stokflashdisk') }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tersedia">Tersedia</label>
                                <select class="form-control" name="tersedia" required>
                                    <option value="y" {{ old('tersedia') == 'y' ? 'selected' : '' }}>Yes</option>
                                    <option value="n" {{ old('tersedia') == 'n' ? 'selected' : '' }}>No</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" value="Proses">
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
