<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show Detail Mobil</title>
</head>

<body>

    <h2>DETAIL MOBIL</h2>
    <hr>

    <!-- Gambar -->
    <img src="{{ asset('/storage/mobil/'.$mobil->gambar) }}" width="200">

    <br><br>

    <!-- Nama -->
    <h3>{{ $mobil->nama }}</h3>

    <!-- Harga -->
    <p>{{ "Rp " . number_format($mobil->harga,2,',','.') }}</p>

    <!-- Deskripsi -->
    <p>{!! $mobil->deskripsi !!}</p>

    <!-- Stok -->
    <p>Stok: {{ $mobil->stok }}</p>

    <br>

    <!-- Tombol kembali -->
    <a href="{{ route('mobil.index') }}">Kembali</a>

</body>
</html>