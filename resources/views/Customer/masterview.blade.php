<html lang="en"><head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="{{$setting->meta_description}}" />
	<meta name="keywords" content="{{$setting->meta_keywords}}" />
	<link rel="shortcut icon" href="{{ asset('public/Customer/img/favicon.png')}}">
	<!-- Bootstrap -->
	<link href="{{ asset('public/Customer/css/bootstrap.min.css')}}" rel="stylesheet">
	<!-- datatable -->
	<link href="{{ asset('public/Customer/css/style.css')}}" rel="stylesheet" type="text/css">
	<!-- font awesome -->
	<link rel="stylesheet" href="{{ asset('public/Customer/fontawesome/css/all.css')}}">
	<script type="text/javascript" src="{{ asset('public/Customer/fontawesome/js/all.js')}}"></script>
	<!-- owl carousel css -->
	<link rel="stylesheet" href="{{asset('')}}public/Customer/owl/owl.carousel.min.css">
	<link rel="stylesheet" href="{{asset('')}}public/Customer/owl/owl.theme.default.min.css">
	<!-- my css -->
	<link rel="stylesheet" href="{{ asset('')}}/public/Customer/css/myCss.css">
	@yield('my_style')
</head>

<body cz-shortcut-listen="true">

	<div id="fb-root"></div>

	<!-- header -->
	@include('Customer.header')
	<!-- /header -->
	<!-- content -->
	@yield('content')
	<!-- /content -->
	<!-- Footer -->
	@include('Customer.footer')
	<!-- /Footer -->

	<!-- Core JavaScript -->
	<script src="{{ asset('public/Customer/js/jquery.min.js')}}"></script>
	<script src="{{ asset('public/Customer/js/bootstrap.min.js')}}"></script>
	<script src="{{ asset('public/Customer/js/jquery.cookie.js')}}"></script>
	<script src="{{ asset('public/Customer/js/isotope.pkgd.min.js')}}"></script>
	<script src="{{ asset('public/Customer/js/style.js')}}"></script>
	<!-- owl careousel js -->
	<script src="{{ asset('')}}public/Customer/owl/owl.carousel.js"></script>
	<script src="{{ asset('')}}public/Customer/js/handle-owl-carousel.js"></script>


	<iframe scrolling="no" frameborder="0" allowtransparency="true" src="https://platform.twitter.com/widgets/widget_iframe.69e02060c7c44baddf1b5629549acc0c.html?origin=http%3A%2F%2Frichmedia.com.vn" title="Twitter settings iframe" style="display: none;"></iframe></body></html>