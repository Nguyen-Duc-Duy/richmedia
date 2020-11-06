<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tintuc extends Model
{
    protected $table = 'tin_tuc';
    protected $fillable = [
    	'id','title','image','content','summary','status'
    ];
}
