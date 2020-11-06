<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class banner extends Model
{
    protected $table = 'tbl_banner';
    protected $fillable = [
    	'id','file','active','link','created_at','updated_at','title'
    ];
}
