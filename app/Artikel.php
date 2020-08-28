<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artikel extends Model
{
    protected $table = 'artikel';

    protected $fillable = ['foto','pembuat', 'nama_artikel', 'tanggal_artikel', 'keterangan'];
}
