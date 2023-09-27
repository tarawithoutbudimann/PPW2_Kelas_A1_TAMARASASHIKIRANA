<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Barang</title>
</head>
<body>
    <h1>Data Barang</h1>
    <table>
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
            @foreach($barang)
                <tr>
                    <td>{{ $barang->id }}</td>
                    <td>{{ $barang->nama_barang }}</td>
                    <td>{{ "Rp ".number_format($barang->harga,2, ',','.' )}}</td>
                    <td>{{ $barang->stok }}</td>
                    <td>{{ $barang->id_supplier }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
