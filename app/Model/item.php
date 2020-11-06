<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class item extends Model
{
    protected $table = 'tbl_item';
    protected $fillable = [
    	'id','id_service','theme','web','file','status','created_at','updated_at'
    ];
    public function services(){
    	return $this->belongsTo('App\Model\service','id_service','id');
    }

}
