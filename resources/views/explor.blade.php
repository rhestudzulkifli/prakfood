<!-- resources/views/explor.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exploration Page</title>
    <!-- Tambahkan stylesheet atau script lainnya jika diperlukan -->
</head>
<body>

    <header>
        <h1>Exploration Page - CRUD</h1>
    </header>

    <main>
        <!-- Tambahkan formulir atau antarmuka pengguna CRUD di sini -->
        <!-- Contoh formulir untuk menambah data -->
        <form action="{{ route('explor.store') }}" method="POST">
            @csrf
            <label for="nama">Nama:</label>
            <input type="text" name="nama" required>

            <label for="jenis">Jenis:</label>
            <input type="text" name="jenis" required>

            <label for="harga">Harga:</label>
            <input type="text" name="harga" required>

            <label for="foto">Foto:</label>
            <input type="text" name="foto" required>

            <label for="status">Status:</label>
            <input type="text" name="status" required>

            <button type="submit">Tambah</button>
        </form>

        <!-- Tabel untuk menampilkan data eksplorasi -->
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Jenis</th>
                <th>Harga</th>
                <th>Foto</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
            <!-- Loop untuk menampilkan data dari database -->
            @foreach ($explorations as $exploration)
                <tr>
                    <td>{{ $exploration->id }}</td>
                    <td>{{ $exploration->nama }}</td>
                    <td>{{ $exploration->jenis }}</td>
                    <td>{{ $exploration->harga }}</td>
                    <td>{{ $exploration->foto }}</td>
                    <td>{{ $exploration->status }}</td>
                    <td>
                        <!-- Tambahkan tombol untuk mengedit dan menghapus -->
                        <a href="{{ route('explor.edit', $exploration->id) }}">Edit</a>
                        <form action="{{ route('explor.destroy', $exploration->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </main>

    <footer>
        <!-- Tambahkan footer atau informasi lainnya jika diperlukan -->
    </footer>

    <!-- Tambahkan script lainnya jika diperlukan -->

</body>
</html>
