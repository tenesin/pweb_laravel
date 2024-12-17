<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function updateAndRead()
{
    // Pastikan baris pertama ada, jika tidak tambahkan baris baru
    DB::table('pagecounter')->insertOrIgnore(['count' => 1]);

    // Tambahkan nilai kolom `jumlah`
    DB::table('pagecounter')->increment('count');

    // Ambil nilai terbaru dari kolom `jumlah`
    $jumlah = DB::table('pagecounter')->value('count');

    return view('pagecounter', ['count' => $jumlah]);
}

}
