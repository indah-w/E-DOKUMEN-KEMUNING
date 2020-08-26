<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';

    protected $fillable = ['foto', 'nama_kegiatan', 'tanggal_kegiatan'];
}
