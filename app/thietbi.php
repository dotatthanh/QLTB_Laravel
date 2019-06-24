<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thietbi extends Model
{
    protected $table = 'thietbi';

    public function phonghoc()
    {
    	return $this->belongsTo('App\phonghoc','id_phonghoc','id');
    }
}
