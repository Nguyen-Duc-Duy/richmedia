<?php
namespace App\Http\Controllers\Customer;
use App\Http\Controllers\Controller as BaseController;
use App\Model\category;
use App\Model\service;
use App\Model\item;
use App\Model\banner;
use App\Model\gioithieu;
use App\Model\tintuc;
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
	// trang chủ
	// hiển thị banner
    public function showBanner(){
    	$banners = banner::all();
    	return view('Customer.home',['banners'=>$banners]);
    }
	// giới thiệu
	public function introduct()
	{
		$gioithieu = gioithieu::where('status',1)->orderBy('id','desc')->get();
		return view('customer.introduct',['gioithieu'=>$gioithieu]);
	}
	// tin tức
	public function news()
	{
		$tintuc = tintuc::where('status',1)->orderBy('id','desc')->paginate(5);
		return view('customer.news',['tintuc'=>$tintuc]);
	}
	// chi tiết tin tức
	public function newDetail($id)
	{
		$tintucDetail = tintuc::where('id',$id)->first();
		return view('customer.new-detail',['tintucDetail'=>$tintucDetail]);
	}
	// liên hệ
	public function contact()
	{
		return view('customer.contact');
	}
	// tuyển dụng
	public function careers()
	{
		return view('customer.careers');
	}
	// chi tiết tuyển dụng
	public function careerDetail()
	{
		return view('customer.career-detail');
	}
	// báo giá
	public function quote($id = null)
	{
		if(empty($id)){
			$items = DB::table('tbl_item')->get();
			$serSelected = null;
		}else{
			$items = DB::table('tbl_item')->where('id_service', $id)->where('status', 1)->get();
			$serSelected = DB::table('tbl_service')->where('id',$id)->get();
		}
		return view('customer.quote',['items'=>$items,'serSelected'=>$serSelected[0]]);
	}
}
?>
