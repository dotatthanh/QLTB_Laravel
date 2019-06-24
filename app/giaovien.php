<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class giaovien extends Model
{
    protected $table = 'giaovien';

    public function muontra()
    {
    	return $this->hasMany('App\muontra','id_gv','id');
    }
}
