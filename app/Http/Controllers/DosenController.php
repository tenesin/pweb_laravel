<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    // Displays subjects
    public function index()
    {
        $nama = "Ishaq Yudha";
        $pelajaran = ["Algoritma & Pemrograman", "Kalkulus", "Pemrograman Web"];

        return view('biodata', ['nama' => $nama, 'matkul' => $pelajaran]);
    }

    // Displays personal information (biodata)
    public function biodata()
    {
        $data = [
            'nama' => 'Ishaq Yudha',
            'umur' => 30,
            'alamat' => 'Jalan Merdeka No. 10, Jakarta',
            'email' => 'diki@example.com'
        ];

        return view('biodata', $data);
    }

    // Displays blog posts
    public function blog()
    {
        $posts = [
            [
                'title' => 'Introduction to Laravel',
                'content' => 'Laravel is a powerful PHP framework...',
                'author' => 'Diki'
            ],
            [
                'title' => 'Mastering PHP',
                'content' => 'PHP is a widely-used open source language...',
                'author' => 'John Doe'
            ]
        ];

        return view('blog', ['posts' => $posts]);
    }
}
