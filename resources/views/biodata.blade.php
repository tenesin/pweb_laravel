<!DOCTYPE html>
<html>
<head>
    <title>Tutorial Laravel #4 : Passing Data Controller Ke View Laravel - www.malasngoding.com</title>
</head>
<body>

    <h1>Tutorial Laravel</h1>
    <a href="https://www.malasngoding.com/category/laravel">www.malasngoding.com</a>

    <br>

    <p>Nama : {{ $nama }}</p>

    @isset($umur)
        <p>Umur : {{ $umur }}</p>
    @endisset

    @isset($alamat)
        <p>Alamat : {{ $alamat }}</p>
    @endisset

    @isset($email)
        <p>Email : {{ $email }}</p>
    @endisset

    @isset($matkul)
        <p>Mata Pelajaran:</p>
        <ul>
            @foreach($matkul as $m)
                <li>{{ $m }}</li>
            @endforeach
        </ul>
    @endisset

</body>
</html>
