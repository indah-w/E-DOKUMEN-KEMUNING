<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';

    protected $fillable = [
        'nama__event', 'tanggal_event', 'harga_event', 'lokasi', 'keterangan'];
}
