<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    protected $table = 'contact';
    protected $fillable = [
    	'id','name','email','company','content','phone'
    ];
}
