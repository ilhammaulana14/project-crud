<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crud Data Mobil</title>
</head>

<body>

    <h2>DATA MOBIL</h2>
    <hr>

    <!-- Tombol tambah -->
    <a href="{{ route('mobil.create') }}">Tambah Data</a>

    <br><br>

    <!-- Tabel -->
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>Gambar</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($mobil as $item)
            <tr>
                <td>
                    <img src="{{ asset('/storage/mobil/'.$item->gambar) }}" width="100">
                </td>
                <td>{{ $item->nama }}</td>
                <td>{{ "Rp " . number_format($item->harga,2,',','.') }}</td>
                <td>{{ $item->stok }}</td>
                <td>

                    <form action="{{ route('mobil.destroy', $item->id) }}" method="POST">
                        <a href="{{ route('mobil.show', $item->id) }}">Show</a> |
                        <a href="{{ route('mobil.edit', $item->id) }}">Edit</a> |

                        @csrf
                        @method('DELETE')

                        <button type="submit" onclick="return confirm('Yakin?')">
                            Hapus
                        </button>
                    </form>

                </td>
            </tr>
            @empty
            <tr>
                <td colspan="5">Data mobil belum ada.</td>
            </tr>
            @endforelse

        </tbody>
    </table>

    <br>

    <!-- Pagination -->
    {{ $mobil->links() }}

    <!-- Alert -->
    @if(session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @elseif(session('error'))
        <p style="color: red;">{{ session('error') }}</p>
    @endif

</body>
</html>