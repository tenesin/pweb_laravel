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
    // Validate the incoming request
    $request->validate([
        'kodeflashdisk' => 'required|string|max:255',
        'merkflashdisk' => 'required|string|max:255',
        'stokflashdisk' => 'required|integer|min:0',
        'tersedia' => 'nullable|in:y,n', // Optional and only accepts 'y' or 'n'
    ]);

    // Determine the 'tersedia' value based on stock and user input
    $tersedia = $request->stokflashdisk == 0 
                ? 'n' 
                : ($request->tersedia ?? 'y'); // If stock > 0, use user input or default to 'y'

    // Insert data into the database
    DB::table('flashdisk')->insert([
        'kodeflashdisk' => $request->kodeflashdisk,
        'merkflashdisk' => $request->merkflashdisk,
        'stokflashdisk' => $request->stokflashdisk,
        'tersedia' => $tersedia,
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
        // Validate the request data
        $request->validate([
            'kodeflashdisk' => 'required',
            'merkflashdisk' => 'required|string|max:255',
            'stokflashdisk' => 'required|integer|min:0',
            'tersedia' => 'required|in:y,n',
        ]);
    
        // Determine 'tersedia' based on stock and user input
        $tersedia = $request->stokflashdisk > 0 ? $request->tersedia : 'n';
    
        // Update the database record
        DB::table('flashdisk')->where('kodeflashdisk', $request->kodeflashdisk)->update([
            'merkflashdisk' => $request->merkflashdisk,
            'stokflashdisk' => $request->stokflashdisk,
            'tersedia' => $tersedia,
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
