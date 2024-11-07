<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\TugasController;

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


// route blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);

// Dosen routes
Route::get('dosen', [DosenController::class, 'index']); // Displays list of subjects
Route::get('dosen/biodata', [DosenController::class, 'biodata']); // Displays personal biodata
Route::get('dosen/blog', [DosenController::class, 'blog']); // Displays blog posts

// Pegawai route with optional name parameter
Route::get('pegawai/{nama?}', [PegawaiController::class, 'index']);


Route::get('formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

// route tugas
Route::get('/tugas', [TugasController::class, 'home']);
Route::get('/tugas/pertemuan1', [TugasController::class, 'pertemuan1']);
Route::get('/tugas/pertemuan2', [TugasController::class, 'pertemuan2']);
Route::get('/tugas/pertemuan3', [TugasController::class, 'pertemuan3']);
Route::get('/tugas/pertemuan5', [TugasController::class, 'pertemuan5']);
Route::get('/tugas/pertemuan7', [TugasController::class, 'pertemuan7']);
