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
        <title>Form Tambah Barang</title>
        <link rel="stylesheet" href="styles.css">
        <style>
            body{
                background-color: #FDDBBB;
            }
            h1{
                text-align: center;
                text-decoration: underline black;
                text-underline-offset: 10px;  
                font-size: 35px;
                margin: 70px;
            }
            form {
                max-width: 400px;
                margin: 20px auto;
                padding: 70px;
                border: 1px solid #ccc;
                border-radius: 5px;
                background-color: #FFF5CD;
                box-shadow: 4px 4px black;
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
                box-shadow: 3px 3px grey;
            }

            button {
                padding: 10px 15px;
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 4px;
                cursor: pointer;
                box-shadow: 4px 4px grey;
            }

            button:hover {
                background-color: #45a049;
            }
        </style>
    </head>

    <body>
        <h1>Form Tambah Barang</h1>
        <form id="formTambah" action="{{route('simpanbarang')}}" method="POST"> 
            @csrf

            <label for="nama_barang">Nama Barang:</label>
            <input type="text" id="nama_barang" name="nama_barang" required>

            <label for="harga">Harga:</label>
            <input type="number" id="harga" name="harga" required>

            <label for="stok">Stok:</label>
            <input type="number" id="stok" name="stok" required>
            
            <label for="foto">foto Barang:</label>
            <input type="file" id="foto" name="foto" accept="image/*" required><br><br>

            <button type="submit">Tambah Barang</button>
        </form>
    </body>

    </html>

</body>

</html>