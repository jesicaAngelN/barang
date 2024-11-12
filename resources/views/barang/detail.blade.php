<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Detail Barang</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #FDDBBB;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
        }

        form {
            max-width: 400px;
            margin: 20px auto;
            padding: 30px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
            box-shadow: 3px 3px black;

        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        .link {
            margin-bottom: 15px;
            padding: 10px;
        }

        button {
            padding: 10px 15px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            box-shadow: 3px 3px black;
        }

        button:hover {
            background-color: #45a049;
        }

        .back-button {
            margin-top: 15px;
            text-align: center;
        }
    </style>
</head>

<body>
    <h1> Detail Barang</h1>
    <form id="formdetail" action="{{ route('detailbarang', $data->id_barang) }}" method="POST">
        @csrf

        <label for="nama_barang">Nama Barang:</label>
        <div class="link">{{ $data->nama_barang }}</div>

        <label for="harga">Harga:</label>
        <div class="link">{{ $data->harga }}</div>

        <label for="stok">Stok:</label> 
        <div class="link">{{ $data->stok }}</div>

        <div class="back-button">
            <a href="{{ route('listbarang') }}">
                <button type="button">Kembali ke Daftar Barang</button>
            </a>
        </div>
    </form>
</body>

</html>