<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
    <!-- Mengimpor CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1>Data Barang</h1>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Barang</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>ID Supplier</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barangbanyak as $barang)
                    <tr>
                        <td>{{ $barang->id }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->harga }}</td>
                        <td>{{ $barang->stok }}</td>
                        <td>{{ $barang->id_supplier }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Mengimpor JS Bootstrap (opsional, jika diperlukan) -->
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
