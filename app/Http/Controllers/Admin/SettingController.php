<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\setting;

class SettingController extends Controller
{
    public function showSetting()
    {
        $setting = setting::all();
        return view("Admin/setting",[
            'setting'=>$setting
        ]);
    }

    public function insertSetting(Request $req)
    {
        if($req->status == null){
            $status = 0;
        }else{
            $status = 1;
        }
        setting::create([
            'content'=>$req->content,        
            'url_facebook'=>$req->url_facebook,        
            'meta_description'=>$req->meta_description,        
            'meta_keywords'=>$req->meta_keywords,        
            'status'=>$status        
        ]);
        return redirect()->route('showSetting');
    }
    public function updateSetting(Request $req,$id)
    {
        if($req->status == null){
            $status = 0;
        }else{
            $status = 1;
        }
        setting::where('id',$id)->update([
            'content'=>$req->content,        
            'url_facebook'=>$req->url_facebook,        
            'meta_description'=>$req->meta_description,        
            'meta_keywords'=>$req->meta_keywords,        
            'status'=>$status        
        ]);
        return redirect()->route('showSetting');
    }
    public function formUpdateSetting($id)
    {
        $setting = setting::where('id',$id)->first();
        return view("Admin/updateSetting");
    }
    public function deleteSetting(Request $req)
    {
        setting::where('id',$req->id)->delete();
        return response('Hello World', 200);
    }
    public function formSetting()
    {
        return view("Admin/insertSetting");
    }
}
