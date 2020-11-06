@extends('Customer.masterview')
@section('content')
<title>Tuyển dụng - AKC</title>
<!-- Featured -->
<div class="pages-intro" style="background:url(http://richmedia.com.vn/upload/global/Tuyen-dung.jpg) no-repeat top center; height:200px; line-height:200px;">
</div>
<!-- /Featured -->

<!-- Breadcrumb -->
<div class="my-breadcrumb">
<div class="container">
<ol class="breadcrumb">
	<li><a href="{{ route('Trang_chu')}}">Home</a></li>
	<li>//</li>
	<li class="active">Tuyển dụng</li>	
</ol>
</div>
</div>
<!-- /Breadcrumb -->

<!-- Content -->
<div class="container pages-wrap">

<div class="news-list">

	<div class="media">
		<div class="media-left">
			<a href="{{ route('tuyendung1')}}" title="Rich Media đang cần tuyển vị trí BIÊN KỊCH KỊCH BẢN PHÁT THANH">
				<img src="{{ asset('public/Customer/img/quote-as-a-playwright-you-are-a-torturer-of-actors-and-of-the-audience-as-well-you-inflict-tony-kushner-16-46-74_370_277_90_c1.jpg')}}">
			</a>
		</div>
		<div class="media-body">
			<div class="tit"><a href="{{ route('tuyendung1')}}">Rich Media đang cần tuyển vị trí BIÊN KỊCH KỊCH BẢN PHÁT THANH</a></div>
			<div class="date">Ngày đăng: 02/05/2018</div>
			<div class="desc">Sống trong chính thế giới mà mình tạo nên &lt;3
	Bạn tự tin về khả năng ngôn ngữ “chém phím thành bão”
	Bạn đam mê bung lụa với ngôn từ
	Bạn thích chơi đùa với con chữ 
Bạn biết tin gì chưa? 
</div>
			<a href="{{ route('tuyendung1')}}" class="btn btn-default">Chi tiết</a>
		</div>
	</div><div class="media">
		<div class="media-left">
			<a href="/tuyen-dung/tuyen-dung-nhan-vien-kinh-doanh" title="Tuyển dụng Nhân viên Kinh doanh">
				<img src="{{ asset('public/Customer/img/recruit_3_370_277_90_c1.jpg')}}">
			</a>
		</div>
		<div class="media-body">
			<div class="tit"><a href="/tuyen-dung/tuyen-dung-nhan-vien-kinh-doanh">Tuyển dụng Nhân viên Kinh doanh</a></div>
			<div class="date">Ngày đăng: 13/07/2017</div>
			<div class="desc">Rich Media cần tuyển nhân viên kinh doanh nhiệt tình, năng nổ, xông pha trong công việc với nhiều chế độ đãi ngộ hấp dẫn.</div>
			<a href="/tuyen-dung/tuyen-dung-nhan-vien-kinh-doanh" class="btn btn-default">Chi tiết</a>
		</div>
	</div>

</div>

</div>
<!-- /Content -->
@endsection()