
@extends('Admin.masterview')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<h1>
			Danh mục - Category
			<small>Xử lý danh mục</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="{{ route('dashboard')}}"><i class="fa fa-dashboard"></i>Thống kê</a></li>
			<li class="active">Danh mục</li>
		</ol>
	</section>

	<!-- Main content -->
	<section class="content">
		<!-- modal Add category -->
		<div class="modal fade" id="modal-default">
			<div class="modal-dialog">
				<div class="modal-content">
					<form role="form" method="POST" enctype="multipart/form-data">
						<div class="modal-header bg-green">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Thêm mới danh mục</h4>
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
		<!-- /modal Add category -->
		<!-- modal edite category -->
		<div class="modal fade" id="modal-editeCat">
			<div class="modal-dialog" style="width: 500px;">
				<div class="modal-content">
					<form role="form" method="POST" enctype="multipart/form-data">
						<div class="modal-header bg-green">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
							<h4 class="modal-title">Sửa danh mục</h4>
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
												<input type="hidden" name="" id="idsss" value="">
											</div>
											<div class="form-group">
												<label for="name">Tên danh mục</label>
												<input type="text" class="form-control" id="editeCat-name" value="" name="editeCat-name" required>
											</div>
											<div class="form-group">
												<label for="descript">Mô tả</label>
												<input type="text" class="form-control" id="editeCat-descript" name="editeCat-descript" required>
											</div>
											<div class="checkbox">
												<label>
													<input type="checkbox" name="editeCat-status" id="editeCat-status" value="1" checked> Trạng thái (Ẩn/Hiện) 
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
							<button type="button" class="btn btn-success" name="" id="updateCat" onclick="">Cập nhật</button>
						</div>
					</form>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /moda edite cat -->
		<!-- list category -->
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
							<table class="table table-condensed" id="table">
								<tr>
									<th class="id_item text-center">#</th>
									<th class="name_item text-center">Tên</th>
									<th class="descript_item text-center">Mô tả</th>
									<th class="date_created_item text-center">Ngày tạo</th>
									<th class="status_item text-center">Trạng thái</th>
									<th class="handle_item text-center" style="width: 170px;">Thao tác</th>
								</tr>
								<tbody id="filterTable">
									@foreach($data as $cat)
									<tr class="@if($cat->status == 0)stop-cat @elseif($cat->status == 1) @endif text-center">
										<td class="align-middle">{{ $loop->iteration }}.</td>
										<td class="align-middle">{{ $cat->name }}</td>
										<td class="text-center align-middle">{{ $cat->descript }}</td>
										<td class="text-center">{{$cat->created_at }}</td>
										<td class="text-center align-middle" >@if($cat->status == 1) Hiện @elseif($cat->status == 0) Ẩn @endif</td>
										<td class="text-center align-middle d-flex">
											<!-- button edite -->
											<button type="button" class="btn btn-info mx-3" onclick="showCat({{$cat->id}})" @if($cat->status == 0)disabled @elseif($cat->status == 1) @endif  data-toggle="modal" data-target="#modal-editeCat" >Sửa</button>
											<input type="hidden" id="cat-{{ $cat->id}}" value="{{ $cat->id}}">
											<!-- change status -->
											<a href="changeSTT/{{ $cat->id }}.{{ $cat->status }}" class="btn btn-warning mx-3">
												@if($cat->status == 1)Gỡ bỏ @elseif($cat->status == 0) kích hoạt @endif
											</a>
											<button type="button" class="btn btn-danger mx-3" id="deleteCat" onclick="deleteCat({{$cat->id}})">Xóa</button>
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
