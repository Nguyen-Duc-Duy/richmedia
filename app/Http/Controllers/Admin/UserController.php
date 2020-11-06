<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Model\user;

class UserController extends Controller
{
    public function showUser()
    {
        $user = user::all();
        return view("Admin/user",[
            'user'=>$user
        ]);
    }
    public function insertUser(Request $req)
    {
        user::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>Hash::make($req->password)
        ]);
        return redirect()->route('showUser');
    }
    public function formUser()
    {
        return view("Admin/insertUser");
    }
    public function loginUser(Request $req)
    {
        $credentials = $req->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->route('dashboard');
        }else{
            return back();
        }
    }
    public function deleteUser(Request $req)
    {
        user::where('id',$req->id)->delete();
        return response('Hello World', 200);
    }
    public function formLogin()
    {
        return view("Admin\login");
    }
}
