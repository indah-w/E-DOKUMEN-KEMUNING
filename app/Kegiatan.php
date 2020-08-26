<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';

    protected $fillable = ['image', 'nama_kegiatan', 'tanggal_kegiatan'];
}
