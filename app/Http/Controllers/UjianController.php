<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB; // DB facade untuk query database
use Illuminate\Http\Request; // Request untuk menangkap data dari form

class UjianController extends Controller
{
    // Fungsi Index untuk menampilkan data dengan logika tambahan
    public function index()
{
    // Retrieve data from the 'nilaikuliah' table with pagination
    $nilaikuliah = DB::table('nilaikuliah')->paginate(10);

    // Loop through each record to calculate additional fields and statistics
    foreach ($nilaikuliah as $item) {
        // Determine Nilai Huruf
        $item->NilaiHuruf = $item->NilaiAngka >= 81 ? 'A' :
                            ($item->NilaiAngka >= 61 ? 'B' :
                            ($item->NilaiAngka >= 41 ? 'C' : 'D'));
    
        // Calculate Bobot
        $item->Bobot = $item->NilaiAngka * $item->SKS;
    }    
    
    // Return the data to the view
    return view('uas', [
        'nilaikuliah' => $nilaikuliah,
		
    ]);
}


    // Fungsi Tambah untuk menampilkan form tambah data
    public function tambah()
    {
        return view('tambahuas');
    }

    // Fungsi Store untuk menyimpan data ke database
    public function store(Request $request)
    {
        // Validasi data input
        $request->validate([
            'NRP' => 'required|string|max:6', // NRP harus string dengan panjang maksimal 6
            'NilaiAngka' => 'required|integer|min:0', // Nilai Angka minimal 0
            'SKS' => 'required|integer|min:1', // SKS minimal 1
        ]);

        // Insert data ke tabel nilaikuliah
        DB::table('nilaikuliah')->insert([
            'NRP' => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS' => $request->SKS,
        ]);

        // Redirect ke halaman utama
        return redirect('/uas')->with('success', 'Data berhasil ditambahkan!');
    }
}
