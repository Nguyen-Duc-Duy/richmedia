  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
            </button>
          </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="">
          <a href="{{ route('dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Thống kê</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Báo giá</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="{{ route('listCat')}}">
                <i class="fa fa-circle-o"></i>
                <span>Danh mục</span>
              </a>
            </li>
            <li>
              <a href="{{ route('listSer') }}">
                <i class="fa fa-circle-o"></i>
                <span>Dịch vụ</span>
              </a>
            </li>
            <li><a href="{{ route('listItem')}}">
              <i class="fa fa-circle-o"></i>
              <span>Thành phần báo giá</span>
            </a>
          </li>
        </ul>
      </li>
      <li>
        <a href="{{ route('showBanner')}}">
          <i class="fa fa-th"></i> <span>Banner</span>
        </a>
      </li>
      <li>
        <a href="{{ route('showGioiThieu')}}">
          <i class="fa fa-th"></i> <span>Giới thiệu</span>
        </a>
      </li>
     <li>
        <a href="{{ route('showTintuc')}}">
          <i class="fa fa-th"></i> <span>Tin Tức</span>
        </a>
      </li>
      <li>
        <a href="{{ route('showContact')}}">
          <i class="fa fa-th"></i> <span>Khách hàng</span>
        </a>
      </li>
      
      {{-- User --}}
      <li class="treeview">
          <a href="#">
            <i class="fa fa-files-o"></i>
            <span>Người dùng</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li>
              <a href="{{ route('insertUser')}}">
                <i class="fa fa-circle-o"></i>
                <span>Thêm mới người dùng</span>
              </a>
            </li>
            <li>
              <a href="{{ route('showUser') }}">
                <i class="fa fa-circle-o"></i>
                <span>Danh sách người dùng</span>
              </a>
            </li>
        </ul>
      </li>
      <li>
        <a href="{{ route('showSetting')}}">
          <i class="fa fa-th"></i> <span>Setiing</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>