<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller as BaseController;

class HomeController extends BaseController
{
	public function dashboard()
	{
		return view('Admin.dashboard');
	}
}
?>