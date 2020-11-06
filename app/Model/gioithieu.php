<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class gioithieu extends Model
{
    protected $table = 'gioithieu';
    protected $fillable = [
    	'id','title','image','content','status'
    ];
}
