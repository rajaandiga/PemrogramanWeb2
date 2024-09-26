<?php
include "Orang.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Hello Praktikum 2</h1>

    <div>
        <?php
        // Proses instansiasi
        $mahasiswa = new Orang('Mhd. Raja Habib Andiga');

        // Menggunakan setter dan getter
        $mahasiswa->setNama('Mhd. Raja Habib Andiga');
        $mahasiswa->setTglLahir('2005-08-05');
        $mahasiswa->setAlamat('Sungai Duren, Muaro Jambi');

        echo "<br>";
        echo "Data Mahasiswa: " . $mahasiswa->getNama() . "<br>";
        echo "Nama: " . $mahasiswa->getNama() . "<br>";
        echo "Tgl Lahir: " . $mahasiswa->getTglLahir() . "<br>";
        echo "Alamat: " . $mahasiswa->getAlamat() . "<br>";

        // Memanggil method
        $mahasiswa->ucapkanSalam();

        echo "<br>";

        $mahasiswa2 = new Orang('Emily');
        $mahasiswa2->setTglLahir("1990-04-12");
        $mahasiswa2->setAlamat("Pijoan, Muaro Jambi");

        $mahasiswa2->ucapkanSalam();

        ?>
    </div>
</body>
</html>
