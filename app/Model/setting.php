<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    protected $table = 'setting';
    protected $fillable = [
    	'id','content','url_facebook','meta_description','meta_keywords','status'
    ];
}
