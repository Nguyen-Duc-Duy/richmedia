@extends('Admin.masterview')
@section('content')


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Dịch vụ - Service
			<small>Xử lý dịch vụ</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('dashboard')}}"><i class="fa fa-dashboard"></i>Thống kê</a></li>
			<li class="active">Dịch vụ</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- modal Add service -->
		<div class="modal fade" id="modal-default">
			<div class="modal-dialog">
				<div class="modal-content">
					<form role="form" method="POST" enctype="multipart/form-data">
						<div class="modal-header bg-green">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Thêm mới dịch vụ</h4>
						</div>
						<div class="modal-body p-0">
							<!-- thêm mới -->
							<section class="content pb-0">
								<div class="row">
									<div class="col-md-12">
										@csrf
										<div class="box-body pb-0">
											<div class="form-group">
												<label for="name">Tên danh mục</label>
												<input type="text" class="form-control" id="name" name="name" required>
											</div>
											<div class="form-group">
												<label>Danh mục</label>
												<select class="form-control" name="idCat">
													@foreach($categorys as $cat)
													<option value="{{$cat->id}}">{{ $cat->name}}</option>
													@endforeach
												</select>
											</div>
											<div class="form-group">
												<label for="descript">Mô tả</label>
												<input type="text" class="form-control" id="descript" name="descript" required>
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
							<button type="submit" class="btn btn-success" name="addCat">Thêm</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<!-- /modal Add service -->
		<!-- modal edite service -->
		<div class="modal fade" id="modal-editeSer">
			<div class="modal-dialog" style="width: 500px;">
				<div class="modal-content">
					<form role="form" method="POST" enctype="multipart/form-data">
						<div class="modal-header bg-green">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Sửa dịch vụ</h4>
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
												<input type="hidden" name="" id="idSer" value="">
											</div>
											<div class="form-group">
												<label for="name">Tên dịch vụ</label>
												<input type="text" class="form-control" id="editeSer-name" value="" name="editeSer-name" required>
											</div>
											<div class="form-group">
												<label>Danh mục</label>
												<select class="form-control" name="idCat" id="idCat">
													@foreach($categorys as $cat)
													<option value="{{$cat->id}}">{{ $cat->name}}</option>
													@endforeach
												</select>
											</div>
											<div class="form-group">
												<label for="descript">Mô tả</label>
												<input type="text" class="form-control" id="editeSer-descript" name="editeSer-descript" required>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="editeSer-status" id="editeSer-status" value="1" checked> Trạng thái (Ẩn/Hiện) 
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
							<button type="button" class="btn btn-success" name="" id="updateSer">Cập nhật</button>
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /moda edite cat -->
		<!-- list service -->
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
									<th class="name_item text-center">Tên</th>
									<th class="name_cat text-center">Danh mục</th>
									<th class="descript_item text-center">Mô tả</th>
									<th class="date_created_item text-center">Ngày tạo</th>
									<th class="status_item text-center">Trạng thái</th>
									<th class="handle_item text-center" style="width: 170px;">Thao tác</th>
								</tr>
								<tbody id="filterTable">
									@foreach($data as $ser)
									<tr class="@if($ser->status == 0)stop-cat @elseif($ser->status == 1) @endif text-center">
										<td class="align-middle">{{ $loop->iteration }}.</td>
										<td class="align-middle">{{ $ser->name }}</td>
										<td class="align-middle">{{$ser->categorys->name}}</td>
										<td class="text-center align-middle">{{ $ser->descript }}</td>
										<td class="text-center">{{$ser->created_at }}</td>
										<td class="text-center align-middle" >@if($ser->status == 1) Hiện @elseif($ser->status == 0) Ẩn @endif</td>
										<td class="text-center align-middle d-flex">
											<!-- button edite -->
											<button type="button" class="btn btn-info mx-3" onclick="showSer({{$ser->id}})" @if($ser->status == 0)disabled @elseif($ser->status == 1) @endif  data-toggle="modal" data-target="#modal-editeSer" >Sửa</button>
											<input type="hidden" id="cat-{{ $ser->id}}" value="{{ $ser->id}}">
											<!-- change status -->
											<a href="Thay_doi_STT/{{ $ser->id }}.{{ $ser->status }}" class="btn btn-warning mx-3">
												@if($ser->status == 1)Gỡ bỏ @elseif($ser->status == 0) kích hoạt @endif
											</a>
											<button type="button" class="btn btn-danger mx-3" id="deleteCat" onclick="deleteSer({{$ser->id}})">Xóa</button>
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
