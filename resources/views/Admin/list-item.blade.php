@extends('Admin.masterview')
@section('content')
<style>
	.status_item{
		width: 100px;
	}
	.name_service,.theme_item{
		width: 200px;
	}
	.date_created_item{
		width: 100px;
	}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Mục báo giá - Item
			<small>Xử lý mục báo giá</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('dashboard')}}"><i class="fa fa-dashboard"></i>Thống kê</a></li>
			<li class="active">Mục báo giá</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- modal Add item -->
		<div class="modal fade" id="modal-default">
			<div class="modal-dialog">
				<div class="modal-content">
					<form role="form" method="POST" enctype="multipart/form-data">
						<div class="modal-header bg-green">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Thêm mới mục báo giá</h4>
						</div>
						<div class="modal-body p-0">
							<!-- thêm mới -->
							<section class="content pb-0">
								<div class="row">
									<div class="col-md-12">
										@csrf
										<div class="box-body pb-0">
											<div class="form-group">
												<label for="theme">Chủ đề</label>
												<input type="text" class="form-control" id="theme" name="theme" required>
											</div>
											<div class="form-group">
												<label for="idSer">Dịch vụ</label>
												<select class="form-control" name="idSer" id="idSer">
													@foreach($service as $ser)
													<option value="{{$ser->id}}">{{ $ser->name}}</option>
													@endforeach
												</select>
											</div>
											<div class="form-group">
												<label for="webLink">Link Website</label>
												<input type="text" class="form-control" id="webLink" name="webLink" required>
											</div>
											<div class="form-group">
												<label for="quote">File(báo giá)</label>
												<input type="file" id="quote" name="quote" required>
												<p class="help-block">Tài liệu mô tả về báo giá</p>
											</div>
											<div class="checkbox">
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
							<button type="submit" class="btn btn-success" name="addItem">Thêm</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /modal Add item -->
		<!-- modal edite item -->
		<div class="modal fade" id="modal-editeItem">
			<div class="modal-dialog" style="width: 500px;">
				<div class="modal-content">
					<form role="form" method="POST" action="{{route('updateItem')}}" enctype="multipart/form-data">
						<div class="modal-header bg-green">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Sửa mục báo giá</h4>
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

											<div class="hide">
												<input type="hidden" name="idItem" id="idItem" value="">
											</div>
											<div class="form-group">
												<label for="editeItem-theme">Chủ đề</label>
												<input type="text" class="form-control" id="editeItem-theme" value="" name="editeItem-theme" required>
											</div>
											<div class="form-group">
												<label for="idSer">Dịch vụ</label>
												<select class="form-control" name="idSer" id="idSer">
													@foreach($service as $ser)
													<option value="{{$ser->id}}">{{ $ser->name}}</option>
													@endforeach
												</select>
											</div>
											<div class="form-group">
												<label for="editeItem-webLink">Link Website</label>
												<input type="text" class="form-control" id="editeItem-webLink" name="editeItem-webLink" required>
											</div>
											<div class="form-group">
												<label for="quote">File(báo giá)</label>
												<input type="file" id="quote" name="quote" >
												<p class="help-block">Tài liệu mô tả về báo giá(nếu không chọn file mới hệ thống sẽ sử dụng file cũ)</p>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="editeItem-status" id="editeItem-status" value="1" checked> Trạng thái (Ẩn/Hiện) 
												</label>
											</div>
											<input type="hidden" id="id-item-edite">
										</div>
										<!-- /.box -->
									</div>
								</div>
							</section>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
							<button type="submit" class="btn btn-success" name="updateItem" id="updateItem">Cập nhật</button>
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /moda edite cat -->
		<!-- list item -->
		<section class="content list mt-0 py-0">
			<div class="row">
				<div class="col-md-12">
					<div class="d-flow-root box-interact-list">
						<div class="d-inline-block">
							<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">Thêm mới</button>
						</div>
						<form class="form-inline float-right">
							<div class="form-group mx-sm-3 mb-2">
								<input type="text" class="form-control" id="searchCat">
							</div>
							<button type="button" class="btn btn-primary mb-2">Tìm</button>
						</form>
					</div>
					<!-- modal thêm mới -->
					<div class="box" id="cc">
						<div class="box-header">
							<h3 class="box-title">Danh sách Danh mục</h3>
						</div>
						<div class="box-body box-list">
							<table class="table table-condensed">
								<tr>
									<th class="id_item text-center">#</th>
									<th class="name_service text-center">Dịch vụ</th>
									<th class="theme_item text-center">Chủ đề</th>
									<th class="web_item text-center">Web</th>
									<th class="file_item text-center">File</th>
									<th class="date_created_item text-center">Ngày tạo</th>
									<th class="status_item text-center">Trạng thái</th>
									<th class="handle_item text-center" style="width: 170px;">Thao tác</th>
								</tr>
								<tbody id="filterTable">
									@foreach($data as $item)
									<tr class="@if($item->status == 0)stop-cat @elseif($item->status == 1) @endif text-center">
										<td class="align-middle">{{ $loop->iteration }}.</td>
										<td class="align-middle">{{$item->services->name}}</td>
										<td class="align-middle">{{$item->theme}}</td>
										<td class="align-middle"><a href="{{$item->web}}">{{$item->web}}</a></td>
										<td class="align-middle"><a href="{{ asset('public/Commons/quote')}}/{{$item->file}}">{{$item->file}}</a></td>
										<td class="text-center">{{$item->created_at }}</td>
										<td class="text-center align-middle" >@if($item->status == 1) Hiện @elseif($item->status == 0) Ẩn @endif</td>
										<td class="text-center align-middle d-flex">
											<!-- button edite -->
											<button type="button" class="btn btn-info mx-3" onclick="showItem({{$item->id}})" @if($item->status == 0)disabled @elseif($item->status == 1) @endif  data-toggle="modal" data-target="#modal-editeItem" >Sửa</button>
											<input type="hidden" id="cat-{{ $item->id}}" value="{{ $item->id}}">
											<!-- change status -->
											<a href="Thay_doi_STT/{{ $item->id }}.{{ $item->status }}" class="btn btn-warning mx-3">
												@if($item->status == 1)Gỡ bỏ @elseif($item->status == 0) kích hoạt @endif
											</a>
											<button type="button" class="btn btn-danger mx-3" id="deleteCat" onclick="deleteItem({{$item->id}})">Xóa</button>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
						</div>
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