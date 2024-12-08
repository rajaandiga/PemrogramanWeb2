<?php

namespace App\Models;

use CodeIgniter\Model;

class AnggotaModel extends Model
{
    protected $table = 'anggota';  // Nama tabel di database
    protected $primaryKey = 'id';  // Primary key tabel

    // Daftar field yang bisa diisi
    protected $allowedFields = ['nama', 'alamat', 'no_telepon'];

    // Auto time stamp untuk tanggal dibuat dan diubah
    protected $useTimestamps = true;
}
