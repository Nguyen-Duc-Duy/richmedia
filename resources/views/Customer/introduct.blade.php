@extends('Customer.masterview')
@section('content')
<title>Giới thiệu - AKC</title>
<!-- Featured -->
<div class="pages-intro" style="background:url(http://richmedia.com.vn/upload/global/about2.jpg) no-repeat top center; height:200px; line-height:200px;">
</div>
<!-- /Featured -->

<!-- Breadcrumb -->
<div class="my-breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="{{ route('Trang_chu')}}">Home</a></li>
			<li>//</li>
			<li class="active">Giới thiệu</li>	
		</ol>
	</div>
</div>
<!-- /Breadcrumb -->

<!-- Content -->
<div class="container pages-wrap">
	@foreach($gioithieu as $val)
	<div class="row about-block">
		<div class="col-md-5">
			<div class="tit">{{$val->title}}</div>
			<div class="date ">Ngày đăng: {{ \Carbon\Carbon::parse($val->created_at)->format('d/m/Y')}}</div>
			<br>
			{!! $val->content !!}
		</div>
		<div class="col-md-6 col-md-offset-1">
			<div class="rectangle">
				<div class="img"><img src="{{asset('public/Commons/img')}}/{{$val->image}}"></div>
			</div>
		</div>
	</div>
	@endforeach


</div>
<!-- /Content -->
@endsection()