<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    protected $table = 'report';

    protected $fillable = [
        'jumlah_rumah_tetap', 'jumlah_rumah_kontrak', 'jumlah_anak','jumlah_tempat_sampah','jumlah_biopori','jumlah_anggota_bs'
    ];
}
