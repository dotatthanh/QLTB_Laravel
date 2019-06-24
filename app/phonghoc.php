<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phonghoc extends Model
{
    protected $table = 'phonghoc';

    public function muontra()
    {
    	return $this->hasMany('App\muontra','id_phonghoc','id');
    }

    public function thietbi()
    {
    	return $this->hasMany('App\thietbi','id_phonghoc','id');
    }
}
