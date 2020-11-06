<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\contact;

class ContactController extends Controller
{
    public function showContact()
    {
    	$contact = contact::all();
        return view("Admin/contact",[
        	'contact'=>$contact
        ]);
    }
    public function insertContact(Request $req)
    {
    	contact::create([
    		'name'=>$req->name,
    		'phone'=>$req->phone,
    		'email'=>$req->email,
    		'company'=>$req->company,
    		'content'=>$req->content
    	]);
    	return redirect()->route('Trang_chu');
    }
    public function deleteContact(Request $req)
    {
        contact::where('id',$req->id)->delete();
        return response('Hello World', 200);
    }
}
