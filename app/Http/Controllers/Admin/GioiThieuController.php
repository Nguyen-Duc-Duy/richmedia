<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\gioithieu;

class GioiThieuController extends Controller
{
    public function showGioiThieu()
    {
        $gioithieu = gioithieu::orderBy('id','desc')->get();
        return view("Admin/gioiThieu",[
            'gioithieu'=>$gioithieu
        ]);
    }

    public function insertGioiThieu(Request $req)
    {
        if($req->hasFile('image')){
            $file = $req->file('image');
            $nameFile = rand(11111,99999).'-'.$file->getClientOriginalName();
            $file->move('public/Commons/img',$nameFile);
            if($req->status == null){
                $status = 0;
            }else{
                $status = 1;
            }
            gioithieu::create([
                'title'=>$req->title,
                'image'=>$nameFile,
                'content'=>$req->content,
                'status'=>$status
            ]);
        }
        return redirect()->route('showGioiThieu');
    }
    public function updateGioiThieu(Request $req,$id)
    {
        if ($req->hasFile('image')) {
            $file = $req->file('image');
            $nameFile = rand(11111,99999).'-'.$file->getClientOriginalName();
            $file->move('public/Commons/img',$nameFile);
            if($req->status == null){
                $status = 0;
            }else{
                $status = 1;
            }
            gioithieu::where('id',$id)->update([
                'title'=>$req->title,
                'image'=>$nameFile,
                'content'=>$req->content,
                'status'=>$status
            ]);
        }else{
            $gioithieu = gioithieu::where('id',$id)->first();
            if($req->status == null){
                $status = 0;
            }else{
                $status = 1;
            }
            gioithieu::where('id',$id)->update([
                'title'=>$req->title,
                'image'=>$gioithieu->image,
                'content'=>$req->content,
                'status'=>$status
            ]);
        }
        return redirect()->route('showGioiThieu');
    }
    public function formUpdateGioiThieu($id)
    {
        $gioithieu = gioithieu::where('id',$id)->first();
        return view("Admin/updateGioiThieu",[
            'gioithieu'=>$gioithieu
        ]);   
    }
    public function deleteGioiThieu(Request $req)
    {
        gioithieu::where('id',$req->id)->delete();
        return response('Hello World', 200);
    }
    public function formGioiThieu()
    {
        return view("Admin/insertGioiThieu");
    }
}
