<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\tintuc;

class TinTucController extends Controller
{
    public function showTintuc()
    {
        $tintuc = tintuc::orderBy('id','desc')->get();
        return view("Admin/tintuc",[
            'tintuc'=>$tintuc
        ]);
    }

    public function insertTintuc(Request $req)
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
            tintuc::create([
                'title'=>$req->title,
                'image'=>$nameFile,
                'content'=>$req->content,
                'status'=>$status,
                'summary'=>$req->summary
            ]);
        }
        return redirect()->route('showTintuc');
    }
    public function updateTinTuc(Request $req,$id)
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
            tintuc::where("id",$id)->update([
                'title'=>$req->title,
                'image'=>$nameFile,
                'content'=>$req->content,
                'status'=>$status,
                'summary'=>$req->summary
            ]);
        }else{
            $tintuc = tintuc::where("id",$id)->first();
            if($req->status == null){
                $status = 0;
            }else{
                $status = 1;
            }
            tintuc::where("id",$id)->update([
                'title'=>$req->title,
                'image'=>$tintuc->image,
                'content'=>$req->content,
                'status'=>$status,
                'summary'=>$req->summary
            ]);
        }
        return redirect()->route('showTintuc');
    }
    public function formUpdateTinTuc($id)
    {
        $tintuc = tintuc::where("id",$id)->first();
        return view("Admin/updateTinTuc",[
            'tintuc'=>$tintuc
        ]); 
    }
    public function formTintuc()
    {
        return view("Admin/insertTintuc");
    }
    public function deleteTinTuc(Request $req)
    {
        tintuc::where('id',$req->id)->delete();
        return response('Hello World', 200);
    }
}
