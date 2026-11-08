<!DOCTYPE html>
<html>
<head>
    <title>Daftar Tugas Mahasiswa</title>
</head>
<body>

    <h1>Daftar Tugas Mahasiswa</h1>

    @if (count($daftarTugas) > 0)

        <ul>
            @foreach ($daftarTugas as $tugas)

                <li>
                    <h3>{{ $tugas['nama'] }}</h3>

                    @if ($tugas['status'] == 'Selesai')
                        <p>Status: Selesai</p>
                    @else
                        <p>Status: Belum Selesai</p>
                    @endif

                    <a href="{{ route('tugas.show', $tugas['id']) }}">
                        Lihat Detail
                    </a>
                </li>

            @endforeach
        </ul>

    @else

        <p>Belum ada tugas.</p>

    @endif

</body>
</html>