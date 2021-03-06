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
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Quick Example</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form  action="{{route("insertTintuc")}}" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label >Title</label>
                  <input type="text" name="title" required="" class="form-control"  placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label >File Image</label>
                  <input type="file" required="" name="image" >

                  <p class="help-block">Ảnh đại diên bài viết</p>
                </div>
                <div class="form-group">
                  <label >Summary</label>
                  <textarea name="summary" required="" class="form-control"  required=""></textarea>
                  <p class="help-block">Nội dung tóm tắt bài viết</p>
                </div>
                <div class="form-group">
                  <label >Content</label>
                  <textarea name="content" id="editor" required=""></textarea>
                  <p class="help-block">Nội dung chi tiết bài viết</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status"> Status
                  </label>
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