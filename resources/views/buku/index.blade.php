<!DOCTYPE html>
<html>
<head>
    <title>Daftar Buku</title>
</head>
<body>

    <h1>Daftar Buku</h1>

    <ul>
        @foreach ($daftarBuku as $buku)
            <li>
                <a href="{{ route('buku.show', $buku['id']) }}">
                    {{ $buku['judul'] }}
                </a>
            </li>
        @endforeach
    </ul>

</body>
</html>
