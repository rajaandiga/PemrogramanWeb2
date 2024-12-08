<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Anggota</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <?php
    // Include file koneksi, untuk koneksi ke database
    include "koneksi.php";

    // Fungsi untuk mencegah inputan karakter yang tidak sesuai
    function input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Cek apakah ada nilai yang dikirim menggunakan method GET dengan nama NIK
    if (isset($_GET['NIK'])) {
        $NIK = input($_GET["NIK"]);

        $sql = "select * from peserta where NIK='$NIK'";
        $hasil = mysqli_query($kon, $sql);
        $data = mysqli_fetch_assoc($hasil);
    }

    // Cek apakah ada kiriman form dari method POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $NIK = input($_POST["NIK"]);
        $vend_name = input($_POST["vend_name"]);
        $vend_address = input($_POST["vend_address"]);
        $Ket = input($_POST["Ket"]);
        $nohp = input($_POST["nohp"]);
        $Rt = input($_POST["Rt"]);

        // Query update data pada tabel peserta
        $sql = "update peserta set
            vend_name='$vend_name',
            vend_address='$vend_address',
            Ket='$Ket',
            nohp='$nohp',
            Rt='$Rt'
            where NIK='$NIK'";

        // Mengeksekusi atau menjalankan query di atas
        $hasil = mysqli_query($kon, $sql);

        // Kondisi apakah berhasil atau tidak dalam mengeksekusi query di atas
        if ($hasil) {
            header("Location: index.php");
        } else {
            echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
        }
    }
    ?>
    <h2>Update Data</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
        <div class="form-group">
            <label for="NIK">NIK:</label>
            <input type="text" name="NIK" id="NIK" class="form-control" value="<?php echo $data['NIK']; ?>" readonly />
        </div>
        <div class="form-group">
            <label for="vend_name">Nama Anggota:</label>
            <input type="text" name="vend_name" id="vend_name" class="form-control" placeholder="Masukan Nama Anggota" value="<?php echo $data['vend_name']; ?>" required/>
        </div>
        <div class="form-group">
            <label for="vend_address">Alamat:</label>
            <textarea name="vend_address" id="vend_address" class="form-control" rows="3" placeholder="Masukan Alamat" required><?php echo $data['vend_address']; ?></textarea>
        </div>
        <div class="form-group">
            <label for="Ket">Keterangan:</label>
            <input type="text" name="Ket" id="Ket" class="form-control" placeholder="Masukan Keterangan" value="<?php echo $data['Ket']; ?>" required/>
        </div>
        <div class="form-group">
            <label for="nohp">No. hp:</label>
            <input type="text" name="nohp" id="nohp" class="form-control" placeholder="Masukan No. hp" value="<?php echo $data['nohp']; ?>" required/>
        </div>
        <div class="form-group">
            <label for="Rt">Rt:</label>
            <input type="text" name="Rt" id="Rt" class="form-control" placeholder="Masukan Rt" value="<?php echo $data['Rt']; ?>" required/>
        </div>
        <button type="submit" name="submit" class="btn btn-success">Submit</button>
    </form>
</div>
</body>
</html>