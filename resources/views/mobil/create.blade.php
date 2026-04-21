<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Mobil</title>
</head>

<body>

    <h2>TAMBAH DATA MOBIL</h2>
    <hr>

    <form action="{{ route('mobil.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <!-- Gambar -->
        <label>Gambar:</label><br>
        <input type="file" name="gambar"><br>
        @error('gambar')
            <small>{{ $message }}</small><br>
        @enderror
        <br>

        <!-- Nama -->
        <label>Nama Mobil:</label><br>
        <input type="text" name="nama" value="{{ old('nama') }}"><br>
        @error('nama')
            <small>{{ $message }}</small><br>
        @enderror
        <br>

        <!-- Deskripsi -->
        <label>Deskripsi:</label><br>
        <textarea name="deskripsi">{{ old('deskripsi') }}</textarea><br>
        @error('deskripsi')
            <small>{{ $message }}</small><br>
        @enderror
        <br>

        <!-- Harga -->
        <label>Harga:</label><br>
        <input type="number" name="harga" value="{{ old('harga') }}"><br>
        @error('harga')
            <small>{{ $message }}</small><br>
        @enderror
        <br>

        <!-- Stok -->
        <label>Stok:</label><br>
        <input type="number" name="stok" value="{{ old('stok') }}"><br>
        @error('stok')
            <small>{{ $message }}</small><br>
        @enderror
        <br>

        <!-- Tombol -->
        <button type="submit">Simpan</button>
        <button type="reset">Reset</button>

    </form>

</body>
</html>