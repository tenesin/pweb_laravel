<?php

use App\Http\Controllers\MalasngodingController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\FlashdiskController;



// Default welcome route
Route::get('/', function () {
    return view('welcome');
});

// Testing page route
Route::get('testing', function () {
    return view('testing', ['pageName' => 'Testing']);
});

// Form submission route with validation
Route::post('submit-form', function (Request $request) {
    $validatedData = $request->validate([
        'name' => 'required|string',
        'nrp' => 'required|integer',
        'fakultas' => 'required|string',
    ]);

    return "Form submitted! Name: {$validatedData['name']}, NRP: {$validatedData['nrp']}, Fakultas: {$validatedData['fakultas']}";
});


// Route Blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// Dosen Routes
Route::get('dosen', [DosenController::class, 'index']); // Displays list of subjects
Route::get('dosen/biodata', [DosenController::class, 'biodata']); // Displays personal biodata
Route::get('dosen/blog', [DosenController::class, 'blog']); // Displays blog posts

// Route Pegawai
Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get ('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiController::class, 'cari']);

// Route Flashdisk
Route::get('/flashdisk', [FlashdiskController::class, 'index']);
Route::get ('/flashdisk/tambah', [FlashdiskController::class, 'tambah']);
Route::post('/flashdisk/store',[FlashdiskController::class, 'store']);
Route::get('/flashdisk/edit/{id}',[FlashdiskController::class, 'edit']);
Route::post('/flashdisk/update',[FlashdiskController::class, 'update']);
Route::get('/flashdisk/hapus/{id}',[FlashdiskController::class, 'hapus']);
Route::get('/flashdisk/cari',[FlashdiskController::class, 'cari']);


// Route Formulir
Route::get('formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// Route Tugas
Route::get('/tugas', [TugasController::class, 'home']);
Route::get('/tugas/pertemuan1', [TugasController::class, 'pertemuan1']);
Route::get('/tugas/pertemuan2', [TugasController::class, 'pertemuan2']);
Route::get('/tugas/pertemuan3', [TugasController::class, 'pertemuan3']);
Route::get('/tugas/pertemuan5', [TugasController::class, 'pertemuan5']);
Route::get('/tugas/pertemuan7', [TugasController::class, 'pertemuan7']);


Route::get('/input', [MalasngodingController::class, 'input']); 
Route::post('/proses', [MalasngodingController::class, 'proses']);