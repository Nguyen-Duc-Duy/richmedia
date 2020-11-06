@extends('Customer.masterview')
@section('content')
<title>Chi tiết bản tin - AKC</title>
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
			<li><a href="{{ route('Tin_tuc')}}">Tin tức</a></li>
			<li>//</li>
			<li class="active">​PHI THƯƠNG BẤT PHÚ, CHƯA LÀM SALES THÌ CHƯA GIÀU ĐƯỢC</li>
		</ol>
	</div>
</div>
<!-- /Breadcrumb -->

<!-- Content -->
<div class="container pages-wrap">

	<div class="news-detail">
		<h1>​{{$tintucDetail->title}}</h1>
		
		<div style="color:#666; font-weight:300; line-height:1;">Ngày đăng: 20/06/2018</div>
		<div style="margin:20px 0 30px 0; font-style:italic;">RICH MEDIA_ĐƠN VỊ TƯ VẤN TRUYỀN THÔNG HÀNG ĐẦU VIỆT NAM TUYỂN SALES</div>
		{!!$tintucDetail->content!!}

	</div>
</div>
<!-- /Content -->
@endsection()