<header id="header">
    <div class="header-wrapper">
        {{-- <div class="header-login">
            <div class="logo">
                <a href="" #>
                    <img src="{{url('public/images')}}/Logo-4.jpg" alt="main logo">
                </a>
            </div>
            <div class="acc-wrapper">
                <div class="acc-login acc-component">
                    <button class="button btn-login">Đăng nhập/Đăng kí</button>
                </div>
                
                <div class="acc-search acc-component">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
            </div>
        </div> --}}
        <div class="header-nav">
            <nav class="navigation">
                <ul class="nav-list">
                    <li class="nav-item active">
                        <a class="nav-link " href="{{ route('clientphong.index') }}">Trang chủ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Khám phá</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cộng đồng</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Dịch vụ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hướng dẫn</a>
                    </li>
                </ul>
                <!-- <a class="post" href="./pages/post.html">
                    <i class="fa-solid fa-pen-to-square"></i>
                    <span> Đăng tin </span>
                </a> -->
            </nav>
        </div>
    </div>
</header>