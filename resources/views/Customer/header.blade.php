<style>
	.sprite {
		background:url("{{ asset('public/Customer/img/sprites.png')}}") no-repeat top left;
		background-position: -40px 0;
	}
</style>
<!-- Header -->
<div class="header">
	<div class="container">
		<div class="logo">
			<a href="{{ route('Gioi_thieu')}}"><div class="logo-image"></div></a>
			<!-- <img src="{{ asset('public/Customer/img/logo.png')}}" alt=""> -->
		</div>
		<div class="menu-wrap">
			<div class="overlay"></div>
			<ul class="list">
				<li  class="{{ Route::is('Trang_chu') ? 'active' : '' }}"><a href="{{ route('Trang_chu')}}">Trang chủ</a></li>
				<li  class="{{ Route::is('Gioi_thieu') ? 'active' : '' }}"><a href="{{ route('Gioi_thieu')}}">Giới thiệu</a></li>
				<li  class="{{ Route::is('Bao_gia') ? 'active' : '' }}"><a href="{{ route('Bao_gia')}}">Báo giá</a></li>
				
				<li  class="{{ Route::is('Tin_tuc') ? 'active' : '' }}"><a href="{{ route('Tin_tuc')}}">Tin tức</a></li>
				<li  class="{{ Route::is('Lien_he') ? 'active' : '' }}"><a href="{{ route('Lien_he')}}">Liên hệ </a></li>
				<li  class="{{ Route::is('Tuyen_dung') ? 'active' : '' }} end"><a href="{{ route('Tuyen_dung')}}">Tuyển dụng</a></li>
				
			</ul>
		</div>
	</div>
</div>
<!-- /Header -->

<!-- Header Mobile -->
<div class="header-mobile">
	<div class="overlay"></div>
	<div class="logo">
		<a href="/"><div class="logo-image"></div></a>
	</div>
	<div class="dropdown drop-menu">
		<div class="dropdown-toggle hamburger hamburger--squeeze" id="drop-menu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			<span class="hamburger-box">
				<span class="hamburger-inner"></span>
			</span>
		</div>
		<ul id="menu" class="dropdown-menu stop-click" aria-labelledby="drop-menu">		
			<div class="wrap-box">
				<div class="panel panel-primary box {{ Route::is('Trang_chu') ? 'active' : '' }}">
					<div class="panel-heading">
						<h3 class="panel-title"><a href="{{ route('Trang_chu')}}">Trang chủ</a></h3>
					</div>
				</div>
				<div class="panel panel-primary box {{ Route::is('Gioi_thieu') ? 'active' : '' }}">
					<div class="panel-heading">
						<h3 class="panel-title"><a href="{{ route('Gioi_thieu')}}">Giới thiệu</a></h3>
					</div>
				</div>
				<div class="panel panel-primary box {{ Route::is('Bao_gia') ? 'active' : '' }}">
					<div class="panel-heading">
						<h3 class="panel-title"><a href="{{ route('Bao_gia')}}">Báo giá</a></h3>
					</div>
				</div>
				<div class="panel panel-primary box {{ Route::is('Tin_tuc') ? 'active' : '' }}">
					<div class="panel-heading">
						<h3 class="panel-title"><a href="{{ route('Tin_tuc')}}">Tin tức</a></h3>
					</div>
				</div>
				<div class="panel panel-primary box {{ Route::is('Lien_he') ? 'active' : '' }}">
					<div class="panel-heading">
						<h3 class="panel-title"><a href="{{ route('Lien_he')}}">Liên hệ</a></h3>
					</div>
				</div>
				<div class="btn-menu">
					<a href="{{ route('Tuyen_dung')}}" class="btn btn-primary">Tuyển dụng</a>
				</div>
			</div>		
		</ul>
	</div>
</div>
<!-- /Header Mobile -->

<div class="header-fixed"></div>