<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    protected $table = 'tbl_service';
    protected $fillable=[
    	'id','id_cat','name','descript','status','created_at','updated_at'
    ];
    public function categorys(){
    	 return $this->belongsTo('App\Model\category','id_cat','id');
    }
}
