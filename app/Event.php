<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'event';

    protected $fillable = [
        'foto','nama_event', 'tanggal_event', 'harga_event', 'lokasi', 'link','keterangan'];
    
        public function komentars(){
            return $this->hasMany('App\Komentar');
        }
}
