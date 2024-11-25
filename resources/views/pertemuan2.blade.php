<!-- Menghubungkan dengan view template master -->
@extends('master')

<!-- Set Judul Halaman -->
@section('judul_halaman', 'Halaman Pertemuan 2')

@section('konten')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda - Pemrograman Web</title>
    <style>
        body {
            background-color: #ffffff;
            color: black;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            font-size: 2.5em;
            margin: 20px 0;
        }

        p {
            margin: 20px;
            line-height: 1.6;
            font-size: 1.2em;
        }

        .centered-img {
            display: block;
            margin: 20px auto;
            width: 80%;
            max-width: 800px;
            border-radius: 10px;
        }

        .button-group {
            text-align: center;
            margin: 20px;
        }

        .button-group a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            text-decoration: none;
            color: white;
            background-color: #007acc;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .button-group a:hover {
            background-color: #005fa3;
        }
    </style>
</head>
<body>
    <h1>Selamat Datang People</h1>
    <p>
        Banyubramanta is an underwater robot team from the Sepuluh Nopember Institute of Technology (ITS). Since 2018, we have been developing robots with brilliant and innovative ideas to keep pushing forward. Our main focus is inspired by submarine robots, ocean exploration, and underwater resources, aiming to develop Remotely Operated Vehicles (ROVs) and Autonomous Underwater Vehicles (AUVs). The development of these robots continues to facilitate research and industry, enabling exploration of the deepest parts of the ocean. Up to now, the Banyubramanta team actively participates in and wins robot contests in national and international competitions.    </p>
    <p>
        
    </p>
    <img src="https://arek.its.ac.id/banyubramanta/assets/images/robot/10.png" 
         alt="Tim Barunastra ITS" class="centered-img">

    <div class="button-group">
        <a href="https://www.google.co.id">Google</a>
        <a href="https://www.its.ac.id/news/">ITS</a>
        <a href="#">Gak Kemana Mana</a>
    </div>
</body>
</html>
@endsection
