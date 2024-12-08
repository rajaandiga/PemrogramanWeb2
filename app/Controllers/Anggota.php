<?php

namespace App\Controllers;

use App\Models\AnggotaModel;

class Anggota extends BaseController
{
    // Menampilkan daftar anggota
    public function index()
    {
        $model = new AnggotaModel();
        $data['anggota'] = $model->findAll();

        return view('anggota_view', $data);
    }

    // Menampilkan form untuk menambah anggota
    public function add()
    {
        // Jika method adalah POST (form telah disubmit)
        if ($this->request->getMethod() === 'post') {
            $nama = $this->request->getPost('nama');
            $alamat = $this->request->getPost('alamat');
            $no_telepon = $this->request->getPost('no_telepon');

            // Masukkan data ke dalam model
            $model = new AnggotaModel();
            $data = [
                'nama' => $nama,
                'alamat' => $alamat,
                'no_telepon' => $no_telepon
            ];
            $model->insert($data);  // Menyimpan data anggota ke database

            // Setelah data disimpan, redirect ke halaman daftar anggota
            return redirect()->to('/anggota');
        }

        // Jika method GET (halaman form untuk tambah anggota)
        return view('tambah_anggota');  // Pastikan Anda memiliki tampilan untuk form ini
    }

    // Mencari anggota berdasarkan kata kunci
    public function search()
    {
        $keyword = $this->request->getPost('search');
        $model = new AnggotaModel();
        $data['anggota'] = $model->like('nama', $keyword)->findAll();

        return view('anggota_view', $data);
    }
}
