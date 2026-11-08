<?php

namespace App\Http\Controllers;
class TugasController extends Controller
{
    public function index()
    {
        $daftarTugas = [
            [
                'id' => 1,
                'nama' => 'Pemrograman Berorientasi Objek',
                'status' => 'Belum Selesai'
            ],
            [
                'id' => 2,
                'nama' => 'Pemrograman Web',
                'status' => 'Selesai'
            ],
            [
                'id' => 3,
                'nama' => 'Basis Data',
                'status' => 'Belum Selesai'
            ],
        ];

        return view('tugas.index', compact('daftarTugas'));
    }

    public function show(string $id)
    {
        $daftarTugas = [
        [
            'id' => 1,
            'nama' => 'Pemrograman Berorientasi Objek',
            'status' => 'Belum Selesai'
        ],
        [
            'id' => 2,
            'nama' => 'Pemrograman Web',
            'status' => 'Selesai'
        ],
        [
            'id' => 3,
            'nama' => 'Basis Data',
            'status' => 'Belum Selesai'
        ],
    ];

    $tugas = null;

    foreach ($daftarTugas as $item) {
        if ($item['id'] == $id) {
            $tugas = $item;
            break;
        }
    }

    if ($tugas === null) {
        abort(404);
    }

    return view('tugas.show', compact('tugas'));
}
}