<?php

class Orang {
    // Properti dengan akses private
    private string $nama;
    private string $tglLahir;
    private string $alamat;

    // Constructor
    public function __construct($nama) {
        $this->nama = $nama;
        echo "Object " . $this->nama . " dibuat <br>";
        $this->tampilkanPassword();
    }

    // Destructor
    public function __destruct() {
        echo "Object " . $this->nama . " dihapus <br>";
    }

    // Method
    public function ucapkanSalam() {
        echo "<h2>Halo, perkenalkan nama saya " . $this->nama . "</h2>";
    }

    private function tampilkanPassword() {
        echo "Rahasia1234";
    }

    // Setter dan getter untuk nama
    public function setNama($nama) {
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }

    // Setter dan getter untuk tanggal lahir
    public function setTglLahir($tglLahir) {
        $this->tglLahir = $tglLahir;
    }

    public function getTglLahir() {
        return $this->tglLahir;
    }

    // Setter dan getter untuk alamat
    public function setAlamat($alamat) {
        $this->alamat = $alamat;
    }

    public function getAlamat() {
        return $this->alamat;
    }
}
?>
