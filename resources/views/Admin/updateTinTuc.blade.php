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
            <form  action="{{route("updateTinTuc",['id'=>$tintuc->id])}}" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Title</label>
                  <input type="text" name="title" class="form-control" value="{{$tintuc->title}}" id="exampleInputEmail1" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File Image</label>
                  <input type="file" name="image" id="exampleInputFile">

                  <p class="help-block">Ảnh đại diên bài viết</p>
                </div>
                <div class="form-group">
                  <label >Summary</label>
                  <textarea name="summary" required="" class="form-control"  required="">{{$tintuc->summary}}</textarea>
                  <p class="help-block">Nội dung tóm tắt bài viết</p>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Content</label>
                  <textarea name="content" id="editor">{{$tintuc->content}}</textarea>
                  <p class="help-block">Nội dung chi tiết bài viết</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" {{ $tintuc->status == 1 ? 'checked' : '' }} Status
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