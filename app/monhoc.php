<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class monhoc extends Model
{
    protected $table = 'monhoc';
    
    public function muontra()
    {
    	return $this->hasMany('App\muontra','id_monhoc','id');
    }
}
