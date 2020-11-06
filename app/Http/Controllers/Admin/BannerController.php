<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\banner;
use App\Model\category;
use App\Model\service;
use App\Model\item;

class BannerController extends Controller
{
    // hiển thị
    public function showBanner(){
    	$banners = banner::all();
    	$categorys = category::all();
		$services = service::all();
    	return view('Admin.list-banner',['banners'=>$banners,'categorys'=>$categorys,'services'=>$services]);
    }
    // thêm mới
    public function addBanner(Request $request){
    	if($request->hasFile('banner')){
    		$file = $request->file('banner');
			$nameFile = rand(11111,99999).'-'.$file->getClientOriginalName();
			$file->move('public/Commons/img',$nameFile);
    	}
    	if($request->status == null){
    		$status = 0;
    	}else{
    		$status = 1;
    	}
        $active = 0;
        if($request->activeBanner == null){
            $active = 0;
        }else{
            $listBanner = banner::all();
            foreach($listBanner as $ban){
                if ($ban->active == 1) {
                    $bannerChange = banner::find($ban->id);
                    $bannerChange->active = 0;
                    $bannerChange->save();
                }
            }
            $active = 1;
        }
    	banner::create([
    		'file'=>$nameFile,
    		'status'=>$status,
            'title'=>$request->title,
            'link'=>$request->linkBanner,
            'active'=>$active
    	]);
    	return redirect()->route('showBanner');
    }
    
    // cập nhật 
    public function showModelBanner(Request $request){
        $banner = banner::find($request->id);
        return $banner;
    }
    public function updateBanner(Request $request){
    	$banner = banner::find($request->idBanner);
        // nếu chọn file
        // dd($request);
    	if($request->hasFile('edit-banner')){
    		$file = $request->file('edit-banner');
    		$nameFile = rand(11111,99999).'-'.$file->getClientOriginalName();
    		$file->move('public/Commons/img',$nameFile);
            $active = 0;
            // thay đổi active
            if($request->editActiveBanner == null){
                $active = 0;
            }else{
                $listBanner = banner::all();
                foreach($listBanner as $ban){
                    if ($ban->active == 1) {
                        $bannerChange = banner::find($ban->id);
                        $bannerChange->active = 0;
                        $bannerChange->save();
                    }
                }
                $active = 1;
            }
            // thay đổi trạng thái
            if($request->editStatus == null){
                $status = 0;
            }else{
                $status = 1;
            }

            // các trường cần cập nhật
    		$banner->file = $nameFile;
            $banner->title = $request->editTitle;
            $banner->link = $request->editLinkBanner;
            $banner->active = $active;
            $banner->status = $status;
    		$banner->save();

    	}else{
            // nếu không chọn file
            // thay đổi active
            if($request->editActiveBanner == null){
                $active = 0;
            }else{
                $listBanner = banner::all();
                foreach($listBanner as $ban){
                    if ($ban->active == 1) {
                        $bannerChange = banner::find($ban->id);
                        $bannerChange->active = 0;
                        $bannerChange->save();
                    }
                }
                $active = 1;
            }
            // thay đổi trạng thái
            if($request->editStatus == null){
                $status = 0;
            }else{
                $status = 1;
            }

            // các trường cần cập nhật
            $banner->active = $active;
            $banner->title = $request->editTitle;
            $banner->link = $request->editLinkBanner;
            $banner->status = $status;
            $banner->save();
        }
    	return redirect()->route('showBanner');
    }
    // thay đổi trạng thái
    public function changeSTT($id,$stt){
    	$banner = banner::find($id);
    	if($stt == 1){
    		$newSTT = 0;
    	}else{
    		$newSTT = 1;
    	}
    	$banner->status = $newSTT;
    	$banner->save();
    	return redirect()->route('showBanner');
    }
    // xóa banner
    public function deleteBan(Request $request){
    	$banner = banner::find($request->id);
    	$banner->delete();
    	return "Xóa thành công !";
    }
    // active
    public function activeBan($id){
        $listBanner = banner::all();
        foreach($listBanner as $ban){
            if ($ban->active == 1) {
                $bannerChange = banner::find($ban->id);
                $bannerChange->active = 0;
                $bannerChange->save();
            }
        }
            
        $banner = banner::find($id);
        $banner->active = 1;
        $banner->save();
        return redirect()->route('showBanner');
    }

}
