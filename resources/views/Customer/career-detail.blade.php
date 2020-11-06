@extends('Customer.masterview')
@section('content')
<title>Chi tiết - AKC</title>
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
	<li><a href="{{ route('Tuyen_dung')}}">Tuyển dụng</a></li>
	<li>//</li>
	<li class="active">Rich Media đang cần tuyển vị trí BIÊN KỊCH KỊCH BẢN PHÁT THANH</li>
</ol>
</div>
</div>
<!-- /Breadcrumb -->

<!-- Content -->
<div class="container pages-wrap">

<div class="news-detail">
	<h1>Rich Media đang cần tuyển vị trí BIÊN KỊCH KỊCH BẢN PHÁT THANH</h1>
	
	<div style="color:#666; font-weight:300; line-height:1;">Ngày đăng: 02/05/2018</div>
	<div style="margin:20px 0 30px 0; font-style:italic;">Sống trong chính thế giới mà mình tạo nên &lt;3Bạn tự tin về khả năng ngôn ngữ “chém phím thành bão”Bạn đam mê bung lụa với ngôn từBạn thích chơi đùa với con chữ Bạn biết tin gì chưa?</div>
	<div class="editor-wrap">
		<p>Rich Media đang cần tuyển vị trí BIÊN KỊCH KỊCH BẢN PHÁT THANH</p><p>1. Yêu cầu công việc<br>- Có nhiều ý tưởng độc đáo, sáng tạo cho các chương trình quảng cáo trên kênh radio. Thoải mái phát triển ý tưởng riêng của bản thân.<br>- Có khả năng chuyển thể ý tưởng đó thành kịch bản chi tiết.<br>- Biên tập nội dung, chuẩn hóa các kịch bản phát thanh có sẵn. <br>- Phối hợp cùng team Rich Voice cho ra những sản phẩm phát thanh chất lượng, độc đáo. <br>- Tỉ mỉ, cẩn thận trong công việc, có tinh thần cầu tiến. <br>2. Ứng viên<br>- Hoan nghênh những bạn đã có kinh nghiệm trong lĩnh vực biên kịch.<br>- Những bạn mới vào nghề sẽ được training nhiệt tình.<br>3. Quyền lợi<br>- Được làm việc với các khách hàng “xịn” mỗi ngày. <br>- Được làm việc trong môi trường truyền thông chuyên nghiệp, đồng nghiệp trẻ trung.<br>- Được tham gia các hoạt động tập thể của công ty.<br>- Lương+thưởng: thỏa thuận khi phỏng vấn, bật mí là sẽ cực kì hấp dẫn<br>4. Ứng viên gửi hồ sơ về địa chỉ:<br><img height="16" role="presentation" src="https://static.xx.fbcdn.net/images/emoji.php/v9/ff7/1/16/1f48c.png" width="16" alt="" style="vertical-align: -3px;">
	</p></div>
	
	<div class="clearfix" style="height:40px;"></div>
</div>
<div class="tit-relative">Tin liên quan</div>
<div class="news-list">

	<div class="media">
		<div class="media-left">
			<a href="{{ route('tuyendung1')}}" title="Tuyển dụng Nhân viên Kinh doanh">
				<img src="{{ asset('public/Customer/img/recruit_3_370_277_90_c1.jpg')}}">
			</a>
		</div>
		<div class="media-body">
			<div class="tit"><a href="{{ route('tuyendung1')}}">Tuyển dụng Nhân viên Kinh doanh</a></div>
			<div class="date">Ngày đăng: 13/07/2017</div>
			<div class="desc">Rich Media cần tuyển nhân viên kinh doanh nhiệt tình, năng nổ, xông pha trong công việc với nhiều chế độ đãi ngộ hấp dẫn.</div>
			<a href="{{ route('tuyendung1')}}" class="btn btn-default">Chi tiết</a>
		</div>
	</div>

</div>

</div>
<!-- /Content -->
@endsection()