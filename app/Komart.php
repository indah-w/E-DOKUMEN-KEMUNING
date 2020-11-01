<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komart extends Model
{
    protected $table = 'komart';

    protected $fillable = ['artikel_id', 'komentar'];

    public function artikel(){
    	return $this->belongsTo('App\Artikel');
    }
}
