<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota Pangkalan Gas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }
        input[type="text"] {
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }
        button {
            padding: 10px 20px;
            border: none;
            background-color: #4CAF50;
            color: white;
            font-size: 14px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #45a049;
        }
        .back-btn {
            margin-top: 10px;
            text-align: center;
        }
        .back-btn a {
            color: #4CAF50;
            text-decoration: none;
        }
    </style>
</head>
<body>

    <div class="container">
    <h1>Tambah Anggota</h1>

<form action="/anggota/add" method="POST">
    <label for="nama">Nama:</label>
    <input type="text" name="nama" id="nama" required><br><br>

    <label for="alamat">Alamat:</label>
    <input type="text" name="alamat" id="alamat" required><br><br>

    <label for="no_telepon">No. Telepon:</label>
    <input type="text" name="no_telepon" id="no_telepon" required><br><br>

    <button type="submit">Tambah Anggota</button>
</form>

<div class="back-btn">
    <a href="/anggota">Kembali ke Daftar Anggota</a>
</div>

    </div>

</body>
</html>
