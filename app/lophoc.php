<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class lophoc extends Model
{
    protected $table = 'lophoc';

    public function muontra()
    {
    	return $this->hasMany('App\muontra','id_lophoc','id');
    }
}
