<?php

require_once "Model/DaftarBukuModel.php";

class BukuController{

    public function jalankan(){

        //menggunakan model
        $dataModel = new DaftarBukuModel();
        
        //mengirim DataModel ke BukuView dan menampilkannya
        include "View/BukuView.php";
    }

    public function editBuku(){
        $id = $_GET['id'];

        $daftar_buku = new DaftarBukuModel();
        $buku = $daftar_buku->getDataById ($id);

        include_once "View/EditBukuView.php";
    }
    
    public function updateBuku(){
        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);
        $buku->setId($_POST['id']);

        $daftar_buku = new DaftarBukuModel();

        $daftar_buku->update($buku);

        session_start();
        $_SESSION ['success'] = "Data berhasil diupdate!";

        //menampilkan view
        header ('Location: http://localhost/index.php');
        exit;
    }

    public function simpanBuku(){
        //menagkap data dari view
        $buku = new Buku($_POST['judul'], $_POST['pengarang'], $_POST['penerbit'], $_POST['tahun']);

        //menyimpan data ke model kemudian ke database
        $daftar_buku = new DaftarBukuModel();
        $daftar_buku->simpan($buku);

        session_start();
        $_SESSION ['success'] = "Data berhasi disimpan!";

        //menampilkan view
        header('Location: http://localhost/index.php');
        exit;
    }

    public function hapusBuku(){
        $id=$_POST['id'];

        $daftar_buku = new DaftarBukuModel();

        session_start();
        $_SESSION ['success'] = "Data berhasi dihapus!";

        $daftar_buku->delete($id);

        header('Location: http://localhost/index.php');
        exit;
    }

}