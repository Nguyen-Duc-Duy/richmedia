@extends('Customer.masterview')
@section('content')
<title>Báo giá - AKC</title>
<style type="text/css" media="screen">
	.text-center{
		text-align: center !important;
	}
</style>
<!-- Featured -->
<div class="pages-intro" style="background:url(http://richmedia.com.vn/upload/global/BAO-GIA.jpg) no-repeat top center; height:200px; line-height:200px;">
</div>
<!-- /Featured -->

<!-- Breadcrumb -->
<div class="my-breadcrumb">
	<div class="container">
		<ol class="breadcrumb">
			<li><a href="{{ route('Trang_chu')}}">Home</a></li>
			<li>//</li>
			<li><a href="{{ route('Bao_gia')}}">Báo giá</a></li>
			<li>//</li>
			@if($serSelected!=null)
				<li class="active">{{$serSelected->name}}</li>
			@endif
		</ol>
	</div>
</div>
<!-- /Breadcrumb -->
<!-- Content -->
<div class="container pages-wrap">
	<div class="row">
		<!-- Sidebar -->
		<div class="col-md-3 col-sm-12 col-xs-12 sidebar">
			<div class="hidden-sm hidden-xs">
				<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
					@foreach($categorys as $cat)
						@if ($cat->status == 1)
							<div class="tit truncate">{{$cat->name}}</div>
							<ul class="list">
								@foreach($cat->services as $ser)
								<li>
									<a class="nav-link active" id="" href="{{route('Bao_gia')}}/{{$ser->id}}"><span class="glyphicon glyphicon-menu-right"></span>{{$ser->name}}</a>
								</li>
								@endforeach
							</ul>
						@endif
					@endforeach
				</div>
			</div>
			<!-- Mobile -->
			<div class="chooser visible-sm visible-xs">
				<div class="dropdown">
					@foreach($categorys as $cat)
						@if ($cat->status == 1)
						<div class="dropdown-toggle" id="drop-lang-{{$cat->id}}" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							{{$cat->name}} <span class="sprite sp-drop"></span>
						</div>
						<ul class="dropdown-menu" aria-labelledby="drop-lang-{{$cat->id}}">
							@foreach($cat->services as $ser)
								<li class="tit-upper"><a href="{{route('Bao_gia')}}/{{$ser->id}}">{{$ser->name}}</a></li>
							@endforeach
						</ul>
						@endif
					@endforeach
				</div>
			</div>
			<!-- /Mobile -->
		</div>
		
		<!-- Content -->
		<div class="col-md-9 col-sm-12 col-xs-12 pages-content">
			<!-- /Sidebar -->
			@if($serSelected!=null)
				<div class="tit-orange">{{$serSelected->name}}</div>
				<div class="editor-wrap text-grey">
					<p>{{$serSelected->descript}}</p>
				</div>
			@endif
			<!-- Table -->
			<div class="row">
				<div class="col-xs-12">
					<table class="table">
						<thead class="thead-dark">
							<tr>
								<th scope="col">STT</th>
								<th scope="col" class="text-center" style="width: 150px;">Chủ đề</th>
								<th scope="col" class="text-center">Website</th>
								<th scope="col" class="text-center">Ngày tạo</th>
								<th scope="col" class="text-center" style="width: 125px;">Xem báo giá</th>
							</tr>
						</thead>
						<tbody>
							@foreach($items as $item)
							<tr>
								<th scope="row">{{ $loop->iteration }}</th>
								<td class="text-center">{{$item->theme}}</td>
								<td class="text-center"><a href="{{$item->web}}">{{$item->web}}</a></td>
								<td class="text-center">{{$item->created_at}}</td>
								<td class="text-center"><a href="{{ asset('public/Commons/quote')}}/{{$item->file}}">Tải về</a></td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
			<!-- /Table -->
		</div>
		<!-- /Content -->

	</div>
</div>
<!-- /Content -->
@endsection()