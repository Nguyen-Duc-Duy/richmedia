<?php
namespace App\Http\Controllers\Admin;

use App\Model\category;
use App\Model\service;
use App\Model\item;
use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller as BaseController;
use Illuminate\Http\Request;


class CategoryController extends BaseController
{
	// thêm mới 
	public function create(){
		return view('Admin.list-cat');
	}
	public function store(Request $request){
		if($request->status == null){
			$status = 0;
		}else{
			$status = 1;
		}
		// dd($request);
		category::create([
		'name'=>$request->name,
		'status'=>$status,
		'descript'=>$request->descript
	]);
	return redirect()->route('listCat');
	}
	//hiển thị danh sách category
	public function showCats(){
		$data = category::all();
		return view('Admin.list-cat',['data'=>$data]);
	}
	//thay đổi trạng thái kích hoạt/gỡ bỏ
	public function changeSTT($id,$stt){
		$table = category::find($id);
		if($stt == 1){
			$status = 0;
		}else{
			$status = 1;
		}
		$table->status = $status;
		
		// thay đổi trạng thái service theo category
		$services  = DB::table('tbl_service')->where('id_cat',$id)->get();
		foreach($services as $ser){
			$service = service::find($ser->id);
			$service->status = $status;
			$service->save();
			// thay đổi trạng thái item theo service
			$items  = DB::table('tbl_item')->where('id_service',$ser->id)->get();
			foreach($items as $item){
				$item = item::find($item->id);
				$item->status = $status;
				$item->save();
			}
		}
		$table->save();
		return redirect()->route('listCat');
	}
	//cập nhật
		//hiển thị modal 
		public function showModal(Request $request){
			$cat = category::find($request->id);
			return $cat;
		}
	public function editCat(Request $request){
		$data = $request->data;
		$cat = category::find($data[0]);
		$cat->name = $data[1];
		$cat->descript = $data[2];
		$cat->status = $data[3];
		$cat->save();
		return response('Hoàn tất', 200);
	}
	// xóa
	public function delete(Request $request){
		$id = $request->id;
		// Xóa danh mục
		$data = service::where('id_cat',$id)->first();
		if ($data == null || $data == "") {
			category::where('id',$id)->delete();
			$alert = "Xóa bản ghi thành công";
		}else{
			$alert = "Không thể xóa mục này vì đang có bản ghi con liên quan .";
		}
		return response($alert, 200);
	}

}