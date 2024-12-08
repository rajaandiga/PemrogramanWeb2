<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Peserta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>
<body>
    <div class="container">
    <?php
include "koneksi.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $NIK = htmlspecialchars($_POST["NIK"]);
    $vend_name = htmlspecialchars($_POST["vend_name"]);
    $vend_address = htmlspecialchars($_POST["vend_address"]);
    $Ket = htmlspecialchars($_POST["Ket"]);
    $nohp = htmlspecialchars($_POST["nohp"]);
    $Rt = htmlspecialchars($_POST["Rt"]);

    $sql = "INSERT INTO peserta (NIK, vend_name, vend_address, Ket, nohp, Rt) 
            VALUES ('$NIK', '$vend_name', '$vend_address', '$Ket', '$nohp', '$Rt')";
    
    if (mysqli_query($kon, $sql)) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($kon);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Form Pendaftaran Peserta</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h2>Input Data</h2>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <div class="form-group">
            <label for="NIK">NIK:</label>
            <input type="text" name="NIK" id="NIK" class="form-control" placeholder="Masukan NIK" required>
        </div>
        <div class="form-group">
            <label for="vend_name">Nama Anggota:</label>
            <input type="text" name="vend_name" id="vend_name" class="form-control" placeholder="Masukan Nama Anggota" required>
        </div>
        <div class="form-group">
            <label for="vend_address">Alamat:</label>
            <textarea name="vend_address" id="vend_address" class="form-control" rows="3" placeholder="Masukan Alamat" required></textarea>
        </div>
        <div class="form-group">
            <label for="Ket">Keterangan:</label>
            <input type="text" name="Ket" id="Ket" class="form-control" placeholder="Masukan Keterangan" required>
        </div>
        <div class="form-group">
            <label for="nohp">No. hp:</label>
            <input type="text" name="nohp" id="nohp" class="form-control" placeholder="Masukan No. hp" required>
        </div>
        <div class="form-group">
            <label for="Rt">Rt:</label>
            <input type="text" name="Rt" id="Rt" class="form-control" placeholder="Masukan Rt" required>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
