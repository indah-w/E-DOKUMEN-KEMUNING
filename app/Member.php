<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';

    protected $fillable = [
        'no_kk', 'no_ktp', 'nama_kartu_keluarga', 'alamat', 'no_telepon', 'status_rumah', 'jumlah_anak', 'memiliki_tempat_sampah', 'jumlah_biopori','anggota_bank_sampah'
    ];
}
