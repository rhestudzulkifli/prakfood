<!-- resources/views/transaksi.blade.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Transaksi</title>
    <!-- Tambahkan stylesheet atau script lainnya jika diperlukan -->
</head>
<body>

    <header>
        <h1>Halaman Transaksi</h1>
    </header>

    <main>
        <!-- Tabel untuk menampilkan data transaksi -->
        <table border="1">
            <tr>
                <th>ID</th>
                <th>ID Menu</th>
                <th>Jumlah</th>
                <!-- Tambahkan kolom-kolom lain sesuai kebutuhan -->
            </tr>
            <!-- Loop untuk menampilkan data dari database -->
            @foreach ($transaksis as $transaksi)
                <tr>
                    <td>{{ $transaksi->id }}</td>
                    <td>{{ $transaksi->idMenu }}</td>
                    <td>{{ $transaksi->jumlah }}</td>
                    <!-- Tambahkan kolom-kolom lain sesuai kebutuhan -->
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
