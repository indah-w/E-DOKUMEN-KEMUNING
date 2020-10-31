<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentar';

    protected $fillable = ['event_id', 'komentar'];

    public function event(){
    	return $this->belongsTo('App\Event');
    }
}
