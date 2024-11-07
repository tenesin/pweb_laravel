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
            background: linear-gradient(135deg, #ff7f50, #ff6347, #ffa07a);
            color: #ffccff;
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
        General Manager of Barunastra ITS 2024, I Made Vibra Dananjaya, revealed that the 12th INAMARINE event became a potential event to strengthen collaboration with the maritime industry. This is because Barunastra returned to appear for the third time in Asia's leading shipping exhibition. “Barunastra is the only research team among students to showcase our innovative work,” said Vibra.
    </p>
    <p>
        Being a team with many innovations, Vibra explained that this year’s INAMARINE was also a showcase for their innovative work in the form of the Nala Proteus 0.2 autonomous ship. The ship has been equipped with a sophisticated system for ocean clean-up missions. Thanks to these advantages, Nala Proteus 0.2 has won various prestigious events, including the International Roboboat Competition (IRC) last February.
    </p>
    <img src="https://www.its.ac.id/news/wp-content/uploads/sites/2/2024/08/Tim-Barunastra-ITS-turut-berpartisipasi-di-ajang-INAMARINE-2024-di-JIExpo-Kemayoran-Kota-Jakarta-1.jpg" 
         alt="Tim Barunastra ITS" class="centered-img">

    <div class="button-group">
        <a href="https://www.google.co.id">Google</a>
        <a href="https://www.its.ac.id/news/">ITS</a>
        <a href="#">Gak Kemana Mana</a>
    </div>
</body>
</html>
@endsection
