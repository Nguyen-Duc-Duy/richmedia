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
            <form  action="{{route("updateSetting",['id'=>$setting->id])}}" method="post" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label>Meta description</label>
                  <input type="text" name="meta_description" value="{{$setting->meta_description}}" class="form-control" placeholder="Enter description">
                </div>
               <div class="form-group">
                  <label >Meta keywords</label>
                  <input type="text" name="meta_keywords" value="{{$setting->meta_keywords}}" class="form-control" placeholder="Enter keywords">
                </div>
                <div class="form-group">
                  <label>URL facebook</label>
                  <input type="text" name="url_facebook" value="{{$setting->url_facebook}}" class="form-control" placeholder="Enter facebook">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Content</label>
                  <textarea name="content" id="editor">{!!$setting->content!!}</textarea>
                  <p class="help-block">Example block-level help text here.</p>
                </div>
                <div class="checkbox">
                  <label>
                    <input type="checkbox" {{$setting->status == 1 ? 'checked':''}} name="status"> Status
                  </label>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                @csrf
                <button type="submit"  class="btn btn-primary">Submit</button>
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