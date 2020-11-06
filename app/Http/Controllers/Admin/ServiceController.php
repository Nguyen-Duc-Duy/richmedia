<?php

namespace App\Http\Controllers\Admin;

use App\Model\service;
use App\Model\category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class ServiceController extends Controller
{
	
    // thêm mới
    public function store(Request $request){
    	if($request->status == null){
    		$status = 0;
    	}else{
    		$status = 1;
    	}
    	service::create([
    		'id_cat'=>$request->idCat,
    		'name'=>$request->name,
    		'descript'=>$request->descript,
    		'status'=>$status
    	]);
    	return redirect()->route('listSer');
    }
    // cập nhật
    	// hiển thị modal
	    public function showModal(Request $request){
	    	$service = service::find($request->id);
	    	return $service;
	    }
    public function change(Request $request){
    	$data = $request->data;
    	$ser = service::find($data[0]);
    	$ser->id_cat = $data[1];
    	$ser->name = $data[2];
    	$ser->descript = $data[3];
    	$ser->status = $data[4];
    	$ser->save();
    	return response('Hoàn tất',200);
    }
    // hiển thị
    public function showSers(){
    	$service = service::all();
    	$category = Category::all();
    	return view('Admin.list-service',['data'=>$service,'categorys'=>$category]);
    }
    // thay đổi trạng thái 
    public function changeSTT($id,$stt){
    	if($stt == 1){
    		$status = 0;
    	}else{
    		$status = 1;
    	}
    	$table = service::find($id);
    	$table->status = $status;
    	$table->save();
    	return redirect()->route('listSer');
    }
    // xóa
    public function deleteSer(Request $request){
        $id_ser = $request->id;
        $items = DB::table('tbl_item')->where('id_service',$id_ser)->delete();

    	$service = service::find($id_ser);
    	$service->delete();
    	return "ok";
    }

}
