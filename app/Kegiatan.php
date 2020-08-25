<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    protected $table = 'kegiatan';

    protected $fillable = [
        'type_file', 'nama_kegiatan', 'tanggal_kegiatan'];
}
