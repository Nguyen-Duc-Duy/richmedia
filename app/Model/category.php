<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $table = 'tbl_category';
    protected $fillable = [
    	'name','descript','status','created_at','updated_at'
    ];
    public function services(){
    	 return $this->hasMany('App\Model\service','id_cat','id');
    }
}
