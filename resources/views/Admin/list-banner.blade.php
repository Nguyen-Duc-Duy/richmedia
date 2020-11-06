@extends('Admin.masterview')
@section('content')
<style>
	.widget-user .widget-user-header{
		height: 200px !important;
		background-position: center !important;
		background-size: cover !important;
		background-repeat: no-repeat !important;
		position: relative;
	}
	.box-footer{
		text-align: center;
	}
	.box-footer div{
		display: inline-block;
	}
	.box-footer .description-block{
		float: left;
	}
	.box-active{
		position: absolute;
		top: -18px;
		right: 10px;
		overflow: hidden;
		z-index: 1;
		display: none;
	}
	.activeBanner{
		border-radius: 5px;
		border: solid 5px white;
		background-color: #fb2828;

	}
	.activeBanner h6{
		color: white;
		font-size: 16px;
		font-weight: 700;
		margin: 10px;
	}
	.showActive{
		display: block;
	}
	.hidden-btn-actice{
		display: none !important;
	}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Mục banner - Item
			<small>Xử lý mục banner</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('dashboard')}}"><i class="fa fa-dashboard"></i>Thống kê</a></li>
			<li class="active">Mục banner</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- modal Add banner -->
		<div class="modal fade" id="modal-default">
			<div class="modal-dialog">
				<div class="modal-content">
					<form role="form" action="{{route('addBanner')}}" method="POST" enctype="multipart/form-data">
						<div class="modal-header bg-green">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Thêm mới mục banner</h4>
						</div>
						<div class="modal-body p-0">
							<!-- thêm mới -->
							<section class="content pb-0">
								<div class="row">
									<div class="col-md-12">
										@csrf
										<div class="box-body pb-0">
											<div class="form-group">
												<label for="title">Title</label>
												<input type="text" class="form-control" name="title" placeholder="Enter title banner" required>
											</div>

											<div class="form-group">
												<label for="banner">File(banner)</label>
												<input type="file" id="banner" name="banner" required>
												<p class="help-block" style="font-weight: 300;">Ảnh banner hiển thị trên trang chủ</p>
											</div>
											<div class="form-group">
												<label for="linkBanner">Đường dẫn</label>
												<input type="text" class="form-control" name="linkBanner" placeholder="Enter link banner" required>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="activeBanner" id="activeBanner" value="0">Active
												</label>
												<p class="help-block" style="font-weight: 300;" >Chỉ một banner có thể active</p>
												<label>
													<input type="checkbox" name="status" id="status" value="1" checked> Trạng thái (Ẩn/Hiện) 
												</label>
											</div>
										</div>
									</div>
								</div>
							</section>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
							<button type="submit" class="btn btn-success" name="addBanner">Thêm</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /modal Add banner -->
		<!-- modal edite banner -->
		<div class="modal fade" id="modal-editeItem">
			<div class="modal-dialog" style="width: 500px;">
				<div class="modal-content">
					<form role="form" method="POST" action="{{route('updateBanner')}}" enctype="multipart/form-data">
						<div class="modal-header bg-green">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Sửa mục banner</h4>
						</div>
						<div class="modal-body p-0">
							<!-- thêm mới -->
							<section class="content pb-0">
								<div class="row">
									<!-- left column -->
									<div class="col-md-12">
										<!-- general form elements -->
										<!-- form start -->
										@csrf
										<div class="box-body pb-0">
											<div class="form-group">
												<label for="editTitle">Title</label>
												<input type="text" class="form-control" name="editTitle" placeholder="Enter title banner" required>
											</div>
											<div class="hide">
												<input type="hidden" name="idBanner" id="idBanner" value="">
											</div>
											<div class="form-group">
												<label for="banner">File(banner)</label>
												<input type="file" id="edit-banner" name="edit-banner" >
												<p class="help-block" style="font-weight: 300;" >Ảnh banner hiển thị trên trang chủ(nếu không chọn file mới hệ thống sẽ sử dụng file cũ)</p>
											</div>
											<div class="form-group">
												<label for="editLinkBanner">Đường dẫn</label>
												<input type="text" class="form-control" name="editLinkBanner" placeholder="Enter link banner" required>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="editActiveBanner" id="editActiveBanner" value="0" >Active
												</label>
												<p class="help-block" style="font-weight: 300;" >Chỉ một banner có thể active</p>
												<label>
													<input type="checkbox" name="editStatus" id="editStatus" value="1" checked> Trạng thái (Ẩn/Hiện) 
												</label>
											</div>
										</div>
										<!-- /.box -->
									</div>
								</div>
							</section>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
							<button type="submit" class="btn btn-success" name="updateBaner" id="updateBaner">Cập nhật</button>
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /moda edite cat -->
		<!-- list banner -->
		<section class="content list mt-0 py-0">
			<div class="row">
				<div class="col-md-12">
					<div class="d-flow-root box-interact-list">
						<div class="d-inline-block">
							<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">Thêm mới</button>
						</div>
					</div>
					<!-- modal thêm mới -->
					<div class="box" id="cc">
						<div class="box-header">
							<h3 class="box-title">Danh sách Danh mục</h3>
						</div>
						@foreach($banners as $ban)
						<div class="col-md-6 p-0 @if($ban->status == 0) stop-cat @endif">
							<div class="box-active @if($ban->active == 1) showActive @endif">
								<div class="activeBanner">
									<h6>Active</h6>
								</div>
							</div>
							<!-- Widget: user widget style 1 -->
							<div class="box box-widget widget-user">
								<!-- Add the bg color to the header using any of the bg-* classes -->
								<div class="widget-user-header bg-black" style="background: url('{{asset('')}}public/Commons/img/{{$ban->file}}') center center;">
									<span class="date_created">{{$ban->created_at}}</span>
									<span> = </span>
									<span class="date_created">{{$ban->title}}</span>
									<a href="{{$ban->link}}"><span>Đường dẫn :{{$ban->link}}</span></a>
								</div>
								<div class="box-footer p-0">
									<div class="">
										<div class="description-block">
											<button type="button" class="btn btn-info mx-3" onclick="showBanner({{$ban->id}})"  data-toggle="modal" data-target="#modal-editeItem" @if($ban->status == 0) disabled @endif >Sửa</button>
										</div>
										<!-- /.description-block -->

										<div class="description-block">
											<a href="Thay_doi_STT/{{$ban->id}}.{{$ban->status}}" class="btn btn-warning mx-3">
												@if($ban->status == 1) Gỡ @elseif($ban->status == 0) Kích hoạt
												@endif
											</a>
										</div>
										<!-- /.description-block -->
										<div class="description-block btn-activeBanner @if($ban->active == 1) hidden-btn-actice @endif">
											<a href="Active_banner/{{$ban->id}}" class="btn btn-warning mx-3">
												Active
											</a>
										</div>
										<!-- /.description-block -->
										<!-- /.col -->
										<div class="description-block">
											<button onclick="deleteBan({{$ban->id}})" class="btn btn-danger mx-3" @if($ban->status == 0) disabled @endif>Xóa</button>
										</div>
										<!-- /.description-block -->
									</div>
									<!-- /.row -->
								</div>
							</div>
							<!-- /.widget-user -->
						</div>
						@endforeach
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
			</div>
		</section>


	</section>
	<!-- /.content -->
</div>
@endsection()