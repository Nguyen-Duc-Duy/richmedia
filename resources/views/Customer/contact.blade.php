@extends('Customer.masterview') @section('content')
<title>Liên hệ - AKC</title>
<!-- Featured -->
<div class="pages-intro" style="background:url(http://richmedia.com.vn/upload/global/Lien-he.jpg) no-repeat top center; height:200px; line-height:200px;">
</div>
<!-- /Featured -->

<!-- Breadcrumb -->
<div class="my-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li><a href="{{ route('Trang_chu')}}">Home</a></li>
            <li>//</li>
            <li class="active">Liên hệ</li>
        </ol>
    </div>
</div>
<!-- /Breadcrumb -->

<!-- Content -->
<div class="container pages-wrap">

    <div class="row contact-block">
        <div class="col-md-8 col-md-offset-2">
            <div class="tit">Rich Media</div>
            <div class="desc"></div>
        </div>
    </div>

    <div class="row contact-form">
        <div class="col-md-5 left">
            <div class="tit">Liên hệ</div>
            {!! $setting->content !!}
        </div>
        <div class="col-md-7">
            <div class="right">
                <div class="tit">Gửi tin nhắn</div>

                <form  class="contact_form" method="post" action="{{route('insertContact')}}">
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="" placeholder="Họ tên...">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <input type="text" name="phone" oninput="this.value = this.value.replace(/[^0-9.]{10,12}/g, '').replace(/(\..*)\./g, '$1');" class="form-control" required="" placeholder="Điện thoại...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-6">
                            <div class="form-group">
                                <input type="text" name="email" class="form-control" required="" placeholder="Email...">
                            </div>
                        </div>
                        <div class="col-xs-6">
                            <div class="form-group">
                                <input type="text" name="company" class="form-control" required="" placeholder="Tên công ty/đơn vị...">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12">
                            <textarea name="content" class="form-control" rows="5" placeholder="Lời nhắn..."></textarea>
                        </div>
                    </div>
                    @csrf
                    <button type="submit" class="btn btn-primary btn-lg">Gửi</button>

                </form>
            </div>
        </div>
    </div>

    <div class="contact-divider"></div>

    <div class="row contact-maps">
        <div class="col-xs-12">
            <div class="box-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.6419028844207!2d105.79912771493909!3d21.00698688601024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135aca166c91fa7%3A0x216144e51f80907e!2zVG_DoCBuaMOgIDI1VDIsIE5ndXnhu4VuIFRo4buLIFRo4bqtcCwgVHJ1bmcgSMOyYSBOaMOibiBDaMOtbmgsIFRydW5nIEhvw6AsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpIDEwMDAwMCwgVmlldG5hbQ!5e0!3m2!1sen!2s!4v1498751581684" width="600" height="450" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen=""></iframe>
            </div>
        </div>
    </div>

</div>
<!-- /Content -->
@endsection()