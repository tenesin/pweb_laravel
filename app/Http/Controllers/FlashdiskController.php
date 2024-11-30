<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FlashdiskController extends Controller
{
    // Display a paginated list of flashdisks
    public function index()
    {
        $flashdisk = DB::table('flashdisk')->paginate(10);
        return view('flashdisk.index', ['flashdisk' => $flashdisk]);
    }

    // Show the form to add a new flashdisk
    public function tambah()
{
    // Retrieve the latest kodeflashdisk and increment it
    $latestFlashdisk = DB::table('flashdisk')->orderBy('kodeflashdisk', 'desc')->first();
    $newKode = $latestFlashdisk ? $latestFlashdisk->kodeflashdisk + 1 : 1;  // Increment or start from 1

    // Pass the new code to the view
    return view('flashdisk.tambah', ['kodeflashdisk' => $newKode]);
}


    // Insert a new flashdisk into the database
    public function store(Request $request)
    {
        DB::table('flashdisk')->insert([
            'kodeflashdisk' => $request->kodeflashdisk, // Simplified numeric value
            'merkflashdisk' => $request->merkflashdisk,
            'stokflashdisk' => $request->stokflashdisk,
            'tersedia' => $request->stokflashdisk > 0 ? 'y' : 'n',
        ]);
        return redirect('/flashdisk')->with('success', 'Data berhasil disimpan!');
    }

    // Show the form to edit an existing flashdisk
    public function edit($id)
    {
        $flashdisk = DB::table('flashdisk')->where('kodeflashdisk', $id)->get();
        return view('flashdisk.edit', ['flashdisk' => $flashdisk]);
    }

    // Update flashdisk data
    public function update(Request $request)
    {
        DB::table('flashdisk')->where('kodeflashdisk', $request->kodeflashdisk)->update([
            'merkflashdisk' => $request->merkflashdisk,
            'stokflashdisk' => $request->stokflashdisk,
            'tersedia' => $request->stokflashdisk > 0 ? 'y' : 'n',
        ]);
        return redirect('/flashdisk')->with('success', 'Data berhasil diperbarui!');
    }

    // Delete a flashdisk
    public function hapus($id)
    {
        DB::table('flashdisk')->where('kodeflashdisk', $id)->delete();
        return redirect('/flashdisk')->with('success', 'Data berhasil dihapus!');
    }

    // Search for flashdisks by brand
    public function cari(Request $request)
    {
        $cari = $request->cari;
        $flashdisk = DB::table('flashdisk')
            ->where('merkflashdisk', 'like', "%" . $cari . "%")
            ->paginate(10);
        return view('flashdisk.index', ['flashdisk' => $flashdisk]);
    }
}
