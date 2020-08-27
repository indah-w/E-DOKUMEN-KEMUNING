<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';

    protected $fillable = [
        'nama_kartu_keluarga', 'alamat', 'no_telepon', 'status_rumah', 'jumlah_anak', 'memiliki_tempat_sampah'
    ];
}
