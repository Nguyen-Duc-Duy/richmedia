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
	<section class="content">
      <!-- /.row -->
      <div class="row">
        <div class="col-xs-12">
          <div class="d-flow-root box-interact-list">
            <div class="d-inline-block">
              <a href="{{route("insertUser")}}" title="" class="btn btn-success">Thêm mới</a>
            </div>
          </div>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Responsive Hover Table</h3>

              <div class="box-tools">
                <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Search">

                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover" id="table">
                <tbody><tr>
                  <th>ID</th>
                  <th>User</th>
                  <th>Email</th>
                  <th>Password</th>
                  <th>Delete</th>
                </tr>
                @foreach($user as $val)
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{$val->name}}</td>
                  <td>{{$val->email}}</td>
                  <td>{{$val->password}}</td>
                  <td></a><a onclick="deleteUser({{$val->id}})" style="cursor: pointer;" title=""><span class="label label-success">Delete</span></a></td>
                </tr>
                @endforeach
              </tbody></table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
</div>
@stop()