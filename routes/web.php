<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
// route for customer
Route::group(['namespace'=>'Customer','prefix'=>''], function(){
	Route::get('','HomeController@showBanner')->name('Trang_chu');
	Route::get('/Gioi_thieu','HomeController@introduct')->name('Gioi_thieu');
	Route::get('/Tin_tuc','HomeController@news')->name('Tin_tuc');
	Route::get('/Tin_tuc/tintuc1/{id}-{slug}','HomeController@newDetail')->name('tintuc1');
	Route::get('/Lien_he','HomeController@contact')->name('Lien_he');
	Route::get('/Tuyen_dung','HomeController@careers')->name('Tuyen_dung');
	Route::get('/Tuyen_dung/tuyendung1','HomeController@careerDetail')->name('tuyendung1');
	Route::get('/Bao_gia','HomeController@quote')->name('Bao_gia');
	Route::get('/Bao_gia/{id?}','HomeController@quote');
});
Route::group(['namespace'=>'admin','prefix'=>'admin','middleware'=>'auth'],function(){
	Route::get('/','HomeController@dashboard')->name('admin');
	Route::get('/Thong_ke','HomeController@dashboard')->name('dashboard');
	// thống kê nav-left
	// danh mục
	Route::group(['prefix'=>'Danh_muc'],function(){
		// thêm mới
		Route::get('/Danh_sach_danh_muc','CategoryController@create')->name('createCat');
		Route::post('/Danh_sach_danh_muc','CategoryController@store');
		// hiển thị 
		Route::get('/Danh_sach_danh_muc','CategoryController@showCats')->name('listCat');
		//thay đổi trạng thái kích hoạt/gỡ bỏ
		Route::get('/changeSTT/{id}.{status}','CategoryController@changeSTT');
		// sửa
			// show modal
			Route::post('/modalCat','CategoryController@showModal')->name('modalCat');
		Route::post('/Sua_danh_muc','CategoryController@editCat')->name('editeCat');
		// xóa
		Route::post('/Xoa_danh_muc','CategoryController@delete')->name('deleteCat');
	});
	// dịch vụ
	Route::group(['prefix'=>'Dich_vu'],function(){
		// hiển thị danh sách
		Route::get('/Danh_sach_dich_vu','ServiceController@showSers')->name('listSer');
		// thêm mới
		Route::post('/Danh_sach_dich_vu','ServiceController@store')->name('craeteSer');
		// cập nhật
		Route::post('/modal_Ser','ServiceController@showModal')->name('modalSer');
		Route::post('/Sua_dich_vu','ServiceController@change')->name('updateSer');
		// thuy đổi trạng thái 
		Route::get('/Thay_doi_STT/{id}.{stt}','ServiceController@changeSTT')->name('changeSTT');
		// xóa
		Route::post('/Xoa_dich_vu','ServiceController@deleteSer')->name('deleteSer');
	});
	// item
	Route::group(['prefix'=>'Muc'],function(){
		// danh sách
		Route::get('/Danh_sach_muc','ItemController@showItems')->name('listItem');
		// cập nhật
			// hiển thị modal
			Route::post('/show_item','ItemController@showModal')->name('modalItem');
		Route::post('/updateItem','ItemController@update')->name('updateItem');
		// thêm mới
		Route::post('/Danh_sach_muc','ItemController@store')->name('createItem');
		// thay đổi trạng thái
		Route::get('/Thay_doi_STT/{id}.{stt}','ItemController@changeSTT')->name('changeSTT');
		// xóa
		Route::post('/Xoa_muc','ItemController@deleteItem')->name('deleteItem');
	});
	// banner
	Route::group(['prefix'=>'Banner'],function(){
		Route::get('/Danh_sach_banner','BannerController@showBanner')->name('showBanner');
		// thêm
		Route::post('/Them_moi_banner','BannerController@addBanner')->name('addBanner');
		// cập nhật
			//showModel
			Route::post('show_banner','BannerController@showModelBanner')->name('showModelBanner');
		Route::post('/Cap_nhat_banner','BannerController@updateBanner')->name('updateBanner');
		// /thay đổi trạng thái
		Route::get('/Thay_doi_STT/{id}.{stt}','BannerController@changeSTT')->name('changeSTT');
		// xóa
		Route::post('Xoa_banner','BannerController@deleteBan')->name('deleteBan');
		// active
		Route::get('Active_banner/{id}','BannerController@activeBan')->name('activeBan');

		
	});

	// Giới thiệu
	Route::group(['prefix'=>'GioiThieu'],function(){
		Route::get('/Danh_sach','GioiThieuController@showGioiThieu')->name('showGioiThieu');
		Route::match(['get', 'post'], '/Them_moi', [
		    'as' => 'insertGioiThieu',
		    'uses' => Request::isMethod('post') ? 'GioiThieuController@insertGioiThieu':'GioiThieuController@formGioiThieu'
		]);
		Route::match(['get', 'post'], '/Cap_nhap/{id?}', [
		    'as' => 'updateGioiThieu',
		    'uses' => Request::isMethod('post') ? 'GioiThieuController@updateGioiThieu':'GioiThieuController@formUpdateGioiThieu'
		]);
		// ajax
		Route::post('Delete','GioiThieuController@deleteGioiThieu')->name('deleteGioiThieu');
	});
	// Tin tức
	Route::group(['prefix'=>'TinTuc'],function(){
		Route::get('/Danh_sach','TinTucController@showTintuc')->name('showTintuc');
		Route::match(['get', 'post'], '/Them_moi', [
		    'as' => 'insertTintuc',
		    'uses' => Request::isMethod('post') ? 'TinTucController@insertTintuc':'TinTucController@formTintuc'
		]);
		Route::match(['get', 'post'], '/Cap_nhap/{id?}', [
		    'as' => 'updateTinTuc',
		    'uses' => Request::isMethod('post') ? 'TinTucController@updateTinTuc':'TinTucController@formUpdateTinTuc'
		]);
		// ajax
		Route::post('Delete','TinTucController@deleteTinTuc')->name('deleteTinTuc');
	});
	// Contact
	Route::group(['prefix'=>'Contact'],function(){
		Route::get('/Danh_sach','ContactController@showContact')->name('showContact');

		Route::post('insertContact','ContactController@insertContact')->name('insertContact');

		Route::post('Delete','ContactController@deleteContact')->name('deleteContact');
	});
	// User
	Route::group(['prefix'=>'User'],function(){
		Route::get('/Danh_sach','UserController@showUser')->name('showUser');
		Route::match(['get', 'post'], '/Them_moi', [
		    'as' => 'insertUser',
		    'uses' => Request::isMethod('post') ? 'UserController@insertUser':'UserController@formUser'
		]);
		// ajax
		Route::post('Delete','UserController@deleteUser')->name('deleteUser');
	});
	// Setting
	Route::group(['prefix'=>'Setting'],function(){
		Route::get('/Danh_sach','SettingController@showSetting')->name('showSetting');
		Route::match(['get', 'post'], '/Them_moi', [
		    'as' => 'insertSetting',
		    'uses' => Request::isMethod('post') ? 'SettingController@insertSetting':'SettingController@formSetting'
		]);

		Route::match(['get', 'post'], '/Cap_nhap/{id?}', [
		    'as' => 'updateSetting',
		    'uses' => Request::isMethod('post') ? 'SettingController@updateSetting':'SettingController@formUpdateSetting'
		]);
		// ajax
		Route::post('Delete','SettingController@deleteSetting')->name('deleteSetting');
	});
});
// Login Auth
Route::match(['get', 'post'], 'admin/Backend-Login', [
    'as' => 'login',
    'uses' => Request::isMethod('post') ? 'Admin\UserController@loginUser':'Admin\UserController@formLogin'
]);
