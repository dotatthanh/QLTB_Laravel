<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class muontra extends Model
{
    protected $table = 'muontra';

    public function giaovien()
    {
    	return $this->belongsTo('App\giaovien','id_gv','id');
    }

    public function phonghoc()
    {
    	return $this->belongsTo('App\phonghoc','id_phonghoc','id');
    }


    public function monhoc()
    {
    	return $this->belongsTo('App\monhoc','id_monhoc','id');
    }

    public function lophoc()
    {
        return $this->belongsTo('App\lophoc','id_lophoc','id');
    }

    public function thietbi()
    {
        return $this->hasManyThrough('App\thietbi','App\phonghoc','id_phonghoc','id_phonghoc','id');
    }
}
