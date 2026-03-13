<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    /**
     * Menampilkan semua profil mahasiswa
     */
    public function index()
    {
        $data = [
            [
                "nama" => "Uhti Amelia",
                "nim" => "4124012",
                "prodi" => "Sistem Informasi",
                "semester" => 4,
                "keahlian" => ["HTML", "CSS", "Laravel", "Database"]
            ],
            [
                "nama" => "Yazka Dzahaa Dzakiyah",
                "nim" => "4124013",
                "prodi" => "Sistem Informasi",
                "semester" => 4,
                "keahlian" => ["HTML", "CSS", "Laravel", "Database"]
            ],
            [
                "nama" => "Yanis Kamil Fikri",
                "nim" => "4122004",
                "prodi" => "Sistem Informasi",
                "semester" => 8,
                "keahlian" => ["HTML", "CSS", "Laravel", "Database"]
            ]
        ];

        // Mengirim data ke view 'profil.blade.php'
        return view('profil', compact('data'));
    }

    /**
     * Menampilkan detail profil berdasarkan NIM
     */
    public function show($nim)
    {
        // Contoh sederhana, nanti bisa diganti dengan pencarian data dari array
        return "Detail profil mahasiswa dengan NIM: " . $nim;
    }
}