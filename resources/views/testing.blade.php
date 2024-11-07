<!-- resources/views/testing.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testing Page</title>
</head>
<body>
    <h1>Ini adalah page {{ $pageName }}</h1>

    <form action="/submit-form" method="POST">
        @csrf

        <!-- Name Field -->
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
        @error('name')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <!-- NRP Field -->
        <label for="nrp">NRP:</label>
        <input type="number" id="nrp" name="nrp" value="{{ old('nrp') }}">
        @error('nrp')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <!-- Fakultas Field -->
        <label for="fakultas">Fakultas:</label>
        <input type="text" id="fakultas" name="fakultas" value="{{ old('fakultas') }}">
        @error('fakultas')
            <div style="color: red;">{{ $message }}</div>
        @enderror
        <br>

        <button type="submit">Submit</button>
    </form>
</body>
</html>
