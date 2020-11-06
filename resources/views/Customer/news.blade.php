@extends('Customer.masterview')
@section('content')
<title>Bản tin - AKC</title>
<!-- Featured -->
<div class="pages-intro" style="background:url(http://richmedia.com.vn/upload/global/Tin-tuc.jpg) no-repeat top center; height:200px; line-height:200px;">
</div>
<!-- /Featured -->

<!-- Breadcrumb -->
<div class="my-breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="{{ route('Trang_chu')}}">Home</a></li>
			<li>//</li>
			<li class="active">Tin tức</li>	
		</ol>
	</div>
</div>
<!-- /Breadcrumb -->

<!-- Content -->
<div class="container pages-wrap">

	<div class="news-list">
		@foreach($tintuc as $val)
		<div class="media">
			<div class="media-left">
				<a href="{{ route('tintuc1',['id'=>$val->id,'slug'=>Str::slug($val->title, '-')])}}" title="​{{$val->title}}">
					<img src="{{asset('public/Commons/img')}}/{{$val->image}}">
				</a>
			</div>
			<div class="media-body">
				<div class="tit"><a href="{{ route('tintuc1',['id'=>$val->id,'slug'=>Str::slug($val->title, '-')])}}">​{{$val->title}}</a></div>
				<div class="date">Ngày đăng: {{ \Carbon\Carbon::parse($val->created_at)->format('d/m/Y')}}</div>
				<div class="desc">{{$val->summary}}</div>
				<a href="{{ route('tintuc1',['id'=>$val->id,'slug'=>Str::slug($val->title, '-')])}}" class="btn btn-default">Chi tiết</a>
			</div>
		</div>
		@endforeach
		{{ $tintuc->links() }}
	</div>
</div>
<!-- /Content -->
@endsection()