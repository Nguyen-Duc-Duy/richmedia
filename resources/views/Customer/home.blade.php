<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from regaltheme.com/tf/multi/optimi/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Dec 2019 06:40:02 GMT -->
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="SEO & Digital Marketing Agency HTML Template">

  <title>AKCMEDIA</title>
  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="{{ asset('public/Customer/css/home/assets/img/favicon1.png')}}">
  <!-- Style CSS -->
  <link rel="stylesheet" href="{{ asset('public/Customer/css/home/assets/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public/Customer/css/home/assets/css/fontawesome.min.css')}}">
  <link rel="stylesheet" href="{{ asset('public/Customer/css/home/assets/css/plugins.css')}}">
  <link rel="stylesheet" href="{{ asset('public/Customer/css/home/assets/css/reset.css')}}">
  {{-- Style css --}}
  <link rel="stylesheet" href="{{ asset('public/Customer/css/home/assets/css/style.css')}}">

  <!-- Modernizer JS -->
  <script src="{{ asset('public/Customer/css/home/assets/js/vandor/modernizr-3.5.0.min.js')}}"></script>
</head>
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<body>
  <!-- Preloader Start -->
  <div id="fadeout" class="loader-wrap">
    <div class="d-flex justify-content-center align-items-center">
      <div class="loader">
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__bar"></div>
        <div class="loader__ball"></div>
      </div>
    </div>
  </div>
  <!-- Preloader End -->

  <!-- Header Start -->
  <header class="position-absolute w-100">
    <div class="topbar">
      <div class="container">
        <div class="row text-center text-sm-left">
          <div class="col-12 col-sm-6">
              <p>Welcome to AKCMEDIA</p>
          </div>
          <div class="col-12 col-sm-6">
            <div class="social-icon ml-4 float-sm-right">
                <ul class="list-group flex-row justify-content-center">
                  <li><a href="http://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="http://www.twitter.com/"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="http://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                  <li><a href="http://www.pinterest.com/"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>
            <div class="phone-call float-sm-right">
              <p>Phone: <a href="tel:+698-695-806">0977385835</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <nav id="active-sticky" class="navbar navbar-light navbar-expand-lg">
      <div class="container">
        <a class="navbar-brand" href="index.html"><img src="{{ asset('public/Customer/css/home/assets/img/logo.png')}}" alt="akcmedia"></a>
        <button class="navbar-toggler navber-toggler-right" data-toggle="collapse" data-target="#navbarToggler">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarToggler">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item {{ Route::is('Trang_chu') ? 'active' : '' }}" >
              <a href="{{ route('Trang_chu')}}" class="nav-link">Trang chủ</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('Gioi_thieu')}}" class="nav-link">Giới thiệu</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('Bao_gia')}}" class="nav-link">Báo giá</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('Tin_tuc')}}" class="nav-link">Tin tức</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('Lien_he')}}" class="nav-link">Liên hệ</a>
            </li>
            <li class="nav-item">
              <a href="{{ route('Tuyen_dung')}}" class="nav-link">Tuyển dụng</a>
            </li>
          </ul>
          <div class="search-icon">
            <i data-target="#searchBox" data-toggle="collapse" class="fa fa-search d-none d-lg-block"></i>
            <div class="collapse" id="searchBox">
              <form class="input-group" action="http://regaltheme.com/tf/multi/optimi/search">
                <input class="form-control" type="text" placeholder="Search..">
                <div class="input-group-append">
                  <button type="submit" class="input-group-text"><i class="fa fa-search"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </nav>
  </header>
  <!-- Header End -->
  <!-- Slider Section Start -->
  <div class="slider-area h-100 h-sm-auto bg-1">
    <div class="container h-100 h-sm-auto d-flex flex-row align-items-center flex-wrap flex-md-nowrap">
      <div class="caption" data-aos="fade-right">
        <h2 class="display-3 mb-5">Welcome to</h2>
        <h1 class="display-1">AKC<span class="text-primary">MEDIA</span></h1>
        <p class="mb-30">Chào mừng bạn đến với các dịch vụ quảng cáo của AkcMedia</p>
        <a href="{{ route('Bao_gia')}}" class="btn btn-primary">Xem ngay</a>
      </div>
      <div class="image-layer ml-md-auto align-self-md-center align-self-start" data-aos="fade-left">
        <img src="{{ asset('public/Customer/css/home/assets/img/slider/layer/1.png')}}" alt="Layer Image">
      </div>
    </div>
  </div>
  <!-- Slider Section End -->


  <!-- Icon Blocks Start -->
  <div class="icon-blocks bg-light section-ptb position-relative cloud-shape">
      <div class="container">
        <div class="row text-center">
          <div class="col-md-4 mb-sm-40" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-block">
              <div class="icon mb-20">
                <img src="{{ asset('public/Customer/css/home/assets/img/icons/1.png')}}" alt="Icon">
              </div>
              <h3>Quảng cáo </h3>
              <p>Hỗ trợ khách hàng quảng cáo sản phẩm của mình trên các phương tiện truyền thông</p>
              
            </div>
          </div>
          <div class="col-md-4 mb-sm-40" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-block">
              <div class="icon mb-20">
                <img src="{{ asset('public/Customer/css/home/assets/img/icons/2.png')}}" alt="Icon">
              </div>
              <h3>Sứ mệnh</h3>
              <p>Hỗ trợ khách hàng truyền thông bằng kế hoạch chiến lược</p>
            </div>
          </div>
          <div class="col-md-4 mb-sm-40" data-aos="zoom-in" data-aos-delay="600">
            <div class="icon-block">
              <div class="icon mb-20">
                <img src="{{ asset('public/Customer/css/home/assets/img/icons/3.png')}}" alt="Icon">
              </div>
              <h3>Gía trị cốt lõi</h3>
              <p>Tận tâm - sáng tạo - Bảo mật - Gía cả phù hợp </p>
             
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- Icon Blocks End -->
  <!-- Hero Block Start -->
  <div class="hero-block bg-white section-ptb">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-12 col-md-6 mb-sm-30" data-aos="fade-right">
          <div class="hero-text m-minus">
            <h1 class="mb-25">Tại sao chúng tôi tốt nhất<br class="d-none d-lg-block">Phù hợp với doanh nghiệp của bạn !!</h1>
            <p class="mb-40">Công ty truyền thông  AkcMedia được biết đến là đơn vị quảng cáo được nhiều đối tác truyền thông và khách hàng lựa chọn,với chi phí thấp nhất nhưng chất lượng tốt nhất.</p>
            <a href="{{ route('Gioi_thieu')}}" class="btn btn-primary">Xem thêm</a>
          </div>
        </div>
        <div class="col-12 col-md-6" data-aos="fade-left">
          <div class="hero-thumb text-left text-lg-right">
            <img src="{{ asset('public/Customer/css/home/assets/img/hero/1.png')}}" alt="Hero Thumbnail">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero Block End -->

  
  <!-- Hero Block Start -->
  <div class="hero-block bg-white section-ptb">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-12 col-md-6 mb-sm-30" data-aos="fade-right">
          <div class="hero-text">
            <h1 class="mb-25">Tin về AKCMEDIA</h1>
            <p class="mb-40">Các sự kiện và chương trình khuyến mãi </p>
            <a href="{{ route('Tin_tuc')}}" class="btn btn-primary">Xem chi tiết</a>
          </div>
        </div>
        <div class="col-12 col-md-6" data-aos="fade-left">
          <div class="hero-thumb text-left text-md-right">
            <img src="{{ asset('public/Customer/css/home/assets/img/hero/2.png')}}" alt="Hero Thumbnail">
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Hero Block End -->

  <!-- Footer Secion Start -->
  <footer>
    <div class="footer-widget-area bg-dark ptb-100">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-4 mb-sm-40">
            <div class="footer-widget">
              <h3 class="widget-title text-white mb-25">About Optimi</h3>
              <div class="widget-content">
                <p class="text-white">Phen an unknown printer took alley type and scrambled it tmake a type pecimen book. new aijek restorent. to match sure than.</p>
                <div class="social-icon text-white mt-20">
                    <ul class="list-group flex-row">
                      <li><a href="http://www.facebook.com/"><i class="fa fa-facebook-square"></i></a></li>
                      <li><a href="http://www.twitter.com/"><i class="fa fa-twitter-square"></i></a></li>
                      <li><a href="http://www.linkedin.com/"><i class="fa fa-linkedin-square"></i></a></li>
                      <li><a href="http://www.pinterest.com/"><i class="fa fa-pinterest-square"></i></a></li>
                    </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- Widget End -->
          <div class="col-12 col-md-4 mb-sm-40">
            <div class="footer-widget">
              <h3 class="widget-title text-white mb-25">Useful Links</h3>
              <div class="widget-content">
                <ul class="float-left">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Term & Policy</a></li>
                  <li><a href="#">FAQ’s</a></li>
                  <li><a href="#">Our Story</a></li>
                </ul>
                <ul class="float-left">
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Contact Us</a></li>
                  <li><a href="#">Case</a></li>
                  <li><a href="#">Our Project</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Widget End -->
          <div class="col-12 col-md-4">
            <div class="footer-widget">
              <h3 class="widget-title text-white mb-25">Contact Us</h3>
              <div class="widget-content">
                <div class="media mb-20">
                  <img class="align-self-center" src="{{ asset('public/Customer/css/home/assets/img/icons/phone.png')}}" alt="Icon Image">
                  <div class="media-body pl-25">
                    <span>Mon-Fri 9am-6pm</span>
                    <p><a href="tel:99-540-154-254">99 540 154 254</a></p>
                  </div>
                </div>
                <div class="media">
                  <img class="align-self-center" src="{{ asset('public/Customer/css/home/assets/img/icons/rocket.png')}}" alt="Icon Image">
                  <div class="media-body pl-25">
                    <span>online support</span>
                    <p><a href="mailto:info@Optimi.com">info@Optimi.com</a></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Widget End -->
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container d-flex">
        <p class="mb-0">Copyrights © 2019 All Rights Reserved by <span class="text-primary">Optimi</span></p>
        <p class="mb-0 ml-auto">Design by <span class="text-primary">Regal theme</span></p>
      </div>
    </div>
  </footer>
  <!-- Footer Secion End -->

  <!-- JS Files -->
  <script src="{{ asset('public/Customer/css/home/assets/js/vandor/jquery-3.2.1.min.js')}}"></script>
  <script src="{{ asset('public/Customer/css/home/assets/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('public/Customer/css/home/assets/js/popper.min.js')}}"></script>
  <script src="{{ asset('public/Customer/css/home/assets/js/plugins.js')}}"></script>
  <script src="{{ asset('public/Customer/css/home/assets/js/main.js')}}"></script>
</body>

<!-- Mirrored from regaltheme.com/tf/multi/optimi/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 31 Dec 2019 06:40:24 GMT -->
</html>
