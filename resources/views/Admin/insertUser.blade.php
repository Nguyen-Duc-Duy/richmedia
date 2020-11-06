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
      <div class="row">
        <!-- left column -->
        <div class="col-md-6 ">
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  action="{{route("insertUser")}}" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label >Name</label>
                  <input type="text" name="name" class="form-control" required=""  placeholder="Enter name">
                </div>
                <div class="form-group">
                  <label >Email</label>
                  <input type="text" name="email" class="form-control" required="" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label >Password</label>
                  <input type="password" name="password" class="form-control" placeholder="Enter password" required="" >
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                @csrf
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->


        </div>
        <!--/.col (left) -->
        
      </div>
      <!-- /.row -->
    </section>
</div>
@stop()