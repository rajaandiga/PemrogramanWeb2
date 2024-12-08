<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Anggota Pangkalan Gas</title>
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
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .add-btn {
            margin-bottom: 20px;
            text-align: center;
        }
        .add-btn a {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
        }
        .add-btn a:hover {
            background-color: #45a049;
        }
        table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        .hover-row:hover {
            background-color: #f0f0f0;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Daftar Anggota Pangkalan Gas</h1>

        <div class="add-btn">
            <a href="/anggota/tambah">Tambah Anggota</a>
        </div>

        <table>
    <thead>
        <tr>
            <th>Nama</th>
            <th>Alamat</th>
            <th>No. Telepon</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($anggota as $anggota): ?>
            <tr class="hover-row">
                <td><?php echo esc($anggota['nama']); ?></td>
                <td><?php echo esc($anggota['alamat']); ?></td>
                <td><?php echo esc($anggota['no_telepon']); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    </div>

</body>
</html>
