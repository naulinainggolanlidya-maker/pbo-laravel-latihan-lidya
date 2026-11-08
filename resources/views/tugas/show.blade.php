<!DOCTYPE html>
<html>
<head>
    <title>Detail Tugas Mahasiswa</title>
</head>
<body>

    <h1>Detail Tugas Mahasiswa</h1>

    <p>ID Tugas: {{ $tugas['id'] }}</p>

    <h3>Nama Tugas:</h3>
    <p>{{ $tugas['nama'] }}</p>

    <h3>Status Tugas:</h3>

    @if ($tugas['status'] == 'Selesai')
        <p>Status: Selesai</p>
    @else
        <p>Status: Belum Selesai</p>
    @endif

    <br>

    <a href="{{ route('tugas.index') }}">
        Kembali ke Daftar Tugas
    </a>

</body>
</html>