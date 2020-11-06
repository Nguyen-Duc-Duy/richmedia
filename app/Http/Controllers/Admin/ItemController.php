<?php

namespace App\Http\Controllers\Admin;

use App\Model\service;
use App\Model\item;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
	//hiển thị danh sách
    public function showItems(){
    	$items = item::all();
    	$services = service::all();
    	return view('Admin.list-item',['data'=>$items,'service'=>$services]);
    }
    // cập nhật
    	// hiển thị modal
    	public function showModal(Request $request){
    		$item = item::find($request->id);
    		return $item;
    	}
    public function update(Request $request){
    	$item = item::find($request->idItem);
    	$item->theme = $request['editeItem-theme'];
    	$item->id_service = $request['idSer'];
    	$item->web = $request['editeItem-webLink'];
    	if($request['editeItem-status'] == null){
			$item->status = 0;
		}else{
			$item->status = 1;
		}
    	if($request->File()){
			$file = $request->file('quote');
			$nameFile = rand(11111, 99999).'-'.$file->getClientOriginalName();
			$file->move('public/Commons/quote/',$nameFile);
			$item->file = $nameFile;
			$item->save();
		}else{
			$item->save();
		}
		return redirect()->route('listItem');
    }
   	// thêm mới
	public function store(Request $request){
		if($request->status == null){
			$status = 0;
		}else{
			$status = 1;
		}
		if($request->File()){
			$file = $request->file('quote');
			$nameFile = rand(11111, 99999).'-'.$file->getClientOriginalName();
			$file->move('public/Commons/quote/',$nameFile);
		}else{
			echo "not file";
		}
		item::create([
			'id_service'=>$request->idSer,
			'theme'=>$request->theme,
			'web'=>$request->webLink,
			'file'=>$nameFile,
			'status'=>$request->status
		]);
		return redirect()->route('listItem');
	}
	// thay đổi trạng thái
	public function changeSTT($id,$stt){
		if($stt==1){
			$status = 0;
		}else{
			$status = 1;
		}
		DB::table('tbl_item')
            ->where('id', $id)
            ->update(['status' => $status]);
        return redirect()->route('listItem');
	}
	// xóa
	public function deleteItem(Request $request){
		$table = item::find($request->id);
		$table->delete();
		return "ok";
	}
}
