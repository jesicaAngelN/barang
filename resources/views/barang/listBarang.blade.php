<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: peachpuff;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 3px solid black;
            padding: 10px;
            text-align: left;
            justify-content: center;
            text-align: center;

        }

        th {
            background-color: #f4f4f4;
        }

        button {
            padding: 10px;
            margin: 2px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 120px;
        }

        .edit {

            background-color: #4CAF50;
            color: white;
        }

        .hapus {
            background-color: red;
            color: white;
        }

        .detail {
            background-color: #2196F3;
            color: white;
        }

        .tambah {
            padding: 15px;
            background-color: #4CAF50;
            margin-bottom: 4px;
            color: white;
            font-size: medium;

        }
    </style>
</head>
<body>
  <!-- Form untuk tambah barang -->
  <form action="{{ route('barang.tambahbarang') }}" method="GET">
        <button class="tambah" type="submit">Tambah Barang</button>
    </form>

    <table border="1">
        <thead>
            <tr>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Foto</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($barang as $data)
                <tr>
                    <td>{{ $data->id_barang }}</td>
                    <td>{{ $data->nama_barang }}</td>
                    <td>
                        <!-- Menampilkan gambar -->
                        <img src="{{ asset($data->foto) }}" alt="Foto Barang" width="100">
                    </td>
                    <td>{{ $data->harga }}</td>
                    <td>{{ $data->stok }}</td>
                    <td>
                        <!-- Form untuk edit barang -->
                        <form action="{{ route('barang.editbarang', $data->id_barang) }}" method="GET">
                            <button class="edit" type="submit">Edit</button>
                        </form>

                        <!-- Form untuk hapus barang -->
                        <form action="{{ route('barang.hapusbarang', $data->id_barang) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button class="hapus" type="submit">Hapus</button>
                        </form>

                        <!-- Form untuk detail barang -->
                        <form action="{{ route('detailbarang', $data->id_barang) }}" method="GET" style="display:inline;">
                            <button class="detail" type="submit">Detail</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
</body>

</html>
