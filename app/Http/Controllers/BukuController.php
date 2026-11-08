<?php

namespace App\Http\Controllers;

class BukuController extends Controller
{
    // Menampilkan daftar buku
    public function index()
    {
        $daftarBuku = [
            [
                'id' => 1,
                'judul' => 'Belajar PHP'
            ],
            [
                'id' => 2,
                'judul' => 'Dasar Laravel'
            ],
            [
                'id' => 3,
                'judul' => 'Pemrograman Web'
            ],
        ];

        return view('buku.index', compact('daftarBuku'));
    }

    // Menampilkan detail buku
    public function show(string $id)
    {
        return view('buku.show', compact('id'));
    }
}
?>