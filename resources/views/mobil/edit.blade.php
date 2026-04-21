<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Mobil</title>
</head>

<body>

    <h2>EDIT DATA MOBIL</h2>
    <hr>

    <form action="{{ route('mobil.update', $mobil->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Gambar -->
        <label>Gambar:</label><br>
        <input type="file" name="gambar"><br>
        @error('gambar')
            <small>{{ $message }}</small><br>
        @enderror
        <br>

        <!-- Preview gambar -->
        <img src="{{ asset('/storage/mobil/'.$mobil->gambar) }}" width="150"><br><br>

        <!-- Nama -->
        <label>Nama Mobil:</label><br>
        <input type="text" name="nama" 
               value="{{ old('nama', $mobil->nama) }}"><br>
        @error('nama')
            <small>{{ $message }}</small><br>
        @enderror
        <br>

        <!-- Deskripsi -->
        <label>Deskripsi:</label><br>
        <textarea name="deskripsi">{{ old('deskripsi', $mobil->deskripsi) }}</textarea><br>
        @error('deskripsi')
            <small>{{ $message }}</small><br>
        @enderror
        <br>

        <!-- Harga -->
        <label>Harga:</label><br>
        <input type="number" name="harga" 
               value="{{ old('harga', $mobil->harga) }}"><br>
        @error('harga')
            <small>{{ $message }}</small><br>
        @enderror
        <br>

        <!-- Stok -->
        <label>Stok:</label><br>
        <input type="number" name="stok" 
               value="{{ old('stok', $mobil->stok) }}"><br>
        @error('stok')
            <small>{{ $message }}</small><br>
        @enderror
        <br>

        <!-- Tombol -->
        <button type="submit">Update</button>
        <button type="reset">Reset</button>

    </form>

</body>
</html>