<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!DOCTYPE html>
    <html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Form Edit Barang</title>
        <link rel="stylesheet" href="styles.css">
        <style>
            body{
                background-color: #FDDBBB; 
            }
            h1{
                text-align: center
            }
            form {
                max-width: 400px;
                margin: 20px auto;
                padding: 70px;
                border: 1px solid #ccc;
                border-radius: 5px;
                background-color: #f9f9f9;
                box-shadow: 3px 3px black;
            }

            label {
                display: block;
                margin-bottom: 5px;
            }

            input {
                width: 100%;
                padding: 10px;
                margin-bottom: 15px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 18px
            }

            button {
                padding: 10px 15px;
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                width: 420px;
                font-size: 18px;
                box-shadow: 3px 3px black;
            }

            button:hover {
                 background-color: #45a049;
            }
        </style>
    </head>

    <body>
        <h1>Form edit Barang</h1>
        <form id="formedit" action="{{route('updatebarang',$data->id_barang)}}" method="POST">
            @csrf
            <label for="nama_barang">Nama Barang:</label>
            <input type="text" id="nama_barang" name="nama_barang" required value="{{$data->nama_barang}}">

            <label for="harga">Harga:</label>
            <input type="number" id="harga" name="harga" required value="{{$data->harga}}">

            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok" required value="{{$data->stok}}">

            <button type="submit">Simpan</button>
        </form>
    </body>

    </html>

</body>

</html>