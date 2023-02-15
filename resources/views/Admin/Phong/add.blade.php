@extends('Admin.back.master')
@section('content')
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        
  
        <!-- SidebarSearch Form -->
        <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
              <button class="btn btn-sidebar">
                <i class="fas fa-search fa-fw"></i>
              </button>
            </div>
          </div><div class="sidebar-search-results"><div class="list-group"><a href="#" class="list-group-item"><div class="search-title"><strong class="text-light"></strong>N<strong class="text-light"></strong>o<strong class="text-light"></strong> <strong class="text-light"></strong>e<strong class="text-light"></strong>l<strong class="text-light"></strong>e<strong class="text-light"></strong>m<strong class="text-light"></strong>e<strong class="text-light"></strong>n<strong class="text-light"></strong>t<strong class="text-light"></strong> <strong class="text-light"></strong>f<strong class="text-light"></strong>o<strong class="text-light"></strong>u<strong class="text-light"></strong>n<strong class="text-light"></strong>d<strong class="text-light"></strong>!<strong class="text-light"></strong></div><div class="search-path"></div></a></div></div>
        </div>
  
        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                 with font-awesome or any other icon font library -->
                 <li class="nav-item">
                  <a href="{{ route('adminadmin.home') }}" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                      <p>
                          Trang Chủ
                      </p>
                  </a>
              </li>
            <li class="nav-item menu-open">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-table"></i>
                
                <p>
                  Bảng
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="{{ route('adminphong.index') }}" class="nav-link">
                      <i class="material-icons"style="font-size:15px" >radio_button_checked</i>
                    <p>Phòng</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('admininfor.index') }}" class="nav-link">
                      <i class="material-icons"style="font-size:15px" >radio_button_checked</i>
                    <p>Thông tin đặt phòng</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="{{ route('adminkhachhang.index') }}" class="nav-link">
                      <i class="material-icons"style="font-size:15px" >radio_button_checked</i>
                    <p>Khách hàng</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="nav-icon fas fa-edit"></i>
                <p>
                  Chỉnh Sửa
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Sửa thông tin Phòng</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link  active">
                <i class="nav-icon far fa-plus-square"></i>
                <p>
                  Thêm
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview" style="display: none;">
                <li class="nav-item">
                  <a href="{{ route('adminphong.create') }}" class="nav-link active">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Thêm Phòng</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{ route('logout') }}" class="nav-link">
                <i style="font-size:24px" class="fa">&#xf08b;</i>
                <p>
                  Đăng Xuất
                </p>
              </a>
            </li>                                                 
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper" style="min-height: 1345.6px;">
      <!-- Content Header (Page header) -->
      <section class="content">
          <div class="container-fluid">
              <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">Điền thông tin phòng cần thêm</h3>
                  </div>
                  @include('error.error')
                  <div class="card-body">
                      <form action="{{ route('adminphong.store') }}" method="post" enctype="multipart/form-data">
                          @csrf
                          <div  class="mb-3 mt-3">
                            <label  for="IntroCar">Tên Khách Sạn:</label>
                            <input type="text"  class="form-control" placeholder='Nhập tên Khách Sạn' name="txtTenKS">
                          </div>
                          
                          <div class="mb-3">
                              <label for="PriceSale">Giá Phòng:</label>
                              <input type="text" class="form-control" id="new" placeholder="Nhập giá Phòng" name="txtGiaPhong">
                          </div>
                          <div class="mb-3">
                              <label for="PriceSale">Khu Vực:</label>
                              <select id="khuvuc" name="sltKhuVuc">
                                <option value="hanoi">Hà Nội</option>
                                <option value="danang">Đà Nẵng</option>
                                <option value="hochiminh">Hồ chí Minh</option>
                              </select>
                          </div>
                          <div class="mb-3">
                            <label  for="PriceOld">Địa Chỉ:</label>
                            <input type="text" class="form-control" id="diachi" placeholder="Nhập Loại Phòng" name="txtDiachi">
                          </div>
                          <div class="mb-3">
                              <label for="PriceSale">Số Điện Thoại:</label>
                              <input type="text" class="form-control" id="new" placeholder="Nhập Số Điện Thoại" name="txtSoDT">
                          </div>
                          <div class="mb-3">
                              <label  for="Image">Image:</label>
                              <input type="file" name="txtImage" id="txtImage">
                          </div>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
    
                  </div>
                  <!-- /.card-body -->
              </div>
          </div>
      </section>        
      <!-- Main content -->
      
      <!-- /.content -->
    </div>
   
@endsection