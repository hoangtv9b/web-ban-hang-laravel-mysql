<body>
<div class="space-header"></div>
<header>
    <div class="navbar-header">
        <div class="ollapse navbar-collapse">
            <div class="navbar" style="background: #000;">
                <div class="login-register col-inline" style="margin-left: 30px;">
                    <button style="text-decoration: none; font-weight: 600;" data-toggle="modal" data-target="#loginForm">ĐĂNG NHẬP/</button>
                    <button style="text-decoration: none; font-weight: 600;" data-toggle="modal" data-target="#registerForm">ĐĂNG KÝ</button>
                </div>
                <style>
                    .active-menu{
                        border-bottom: 3px solid #30291d;
                    }
                </style>
                <a href="/"><img src="{{asset('Images/xshop-light.png')}}" width="240px" alt="anh-trang-chu" class="mx-auto d-block" width="70%"></a>
                <div class="col-inline d-flex " style="margin-right: 30px;">
                    <form class="form-inline" action="{{ route('search') }}" method="post" style="margin-right: 30px;">
                        @csrf
                        <input class="form-control mr-sm-2" type="search" name="search" placeholder="Bạn cần tìm gì?" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm Kiếm</button>
                    </form>
                    <div class="cart nav align-self-center">
                        <a href="#" title="Không có sản phẩm nào trong giỏ hàng!"
                        data-toggle="modal" data-target="#cart-form">GIỎ HÀNG<i class="cart-icon fa-solid fa-cart-shopping"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu navbar header -->
        <ul class="navbar-menu-wrap py-2">
            <li class=" {{ request()->is('/') ? 'active-menu' : '' }}"><a href="/" class="nav-link">TRANG CHỦ</a></li>
            <li class=" {{ request()->is('gioi-thieu') ? 'active-menu' : '' }}"><a href="/gioi-thieu" class="nav-link">GIỚI THIỆU</a></li>
            <li class=" {{ request()->is('nu') ? 'active-menu' : '' }}"><a href="/nu" class="nav-link">NỮ<i class="fa-solid fa-sort-down" style="margin: 0px 0px 3px 5px;"></i></a>
                <ul class="menu-dropdown">
                    <li class=""><a href="#">Classic</a></li>
                    <li class=""><a href="#">Sunbaked</a></li>
                    <li class=""><a href="#">Chuck 07s</a></li>
                    <li class=""><a href="#">One Star</a></li>
                    <li class=""><a href="#">PSY-Kicks</a></li>
                </ul>
            </li>
            <li class=" {{ request()->is('nam') ? 'active-menu' : '' }}"><a href="/nam" class="nav-link">NAM<i class="fa-solid fa-sort-down" style="margin: 0px 0px 3px 5px;"></i></a>
                <ul class="menu-dropdown">
                    <li class=""><a href="#">Classic</a></li>
                    <li class=""><a href="#">Sunbaked</a></li>
                    <li class=""><a href="#">Chuck 07s</a></li>
                    <li class=""><a href="#">One Star</a></li>
                    <li class=""><a href="#">PSY-Kicks</a></li>
                </ul>
            </li>
            <li class=" {{ request()->is('tre-em') ? 'active-menu' : '' }}"><a href="/tre-em" class="nav-link">TRẺ EM</a></li>
            <li class=" {{ request()->is('phu-kien') ? 'active-menu' : '' }}"><a href="/phu-kien" class="nav-link">PHỤ KIỆN</a></li>
            <li class=" {{ request()->is('tin-tuc') ? 'active-menu' : '' }}"><a href="/tin-tuc" class="nav-link">TIN TỨC</a></li>
            <li class=" {{ request()->is('lien-he') ? 'active-menu' : '' }}"><a href="/lien-he" class="nav-link">LIÊN HỆ</a></li>
        </ul>
    </div>
    <!-- header responsive -->
    <div class="navbar-header-responsive">
        <nav class="navbar-header-mobile navbar navbar-expand-md d-flex justify-content-between">
            <div class="btn-show-menu"><i class="fa-solid fa-bars"></i></div>
            <a class="navbar-branch" href="#">
                <img src="{{asset('Images/xshop-light.png')}}" alt="home-image" height="50">
            </a>
            <div class="search-cart-wrap d-flex">
                <a href="#"><i class="fa-solid fa-magnifying-glass"></i></a>
                <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
        </nav>
    </div>
    <!-- menu responsive -->
    <ul class="menu-responsive">
        <li><a href="#">Đăng nhập</a> / <a href="#">Đăng ký</a></li>
        <div class="btn-hidden-menu"><i class="fa-solid fa-xmark"></i></div>
        <hr>
        <li><a href="/">Trang chủ</a></li>
        <li><a href="/gioi-thieu">Giới thiệu</a></li>
        <li><a href="/nu">Nữ<i class="fa-solid fa-sort-down" style="margin: 0px 0px 3px 5px;"></i></a></li>
        <li><a href="/nam">Nam<i class="fa-solid fa-sort-down" style="margin: 0px 0px 3px 5px;"></i></a></li>
        <li><a href="/tre-em">Trẻ em</a></li>
        <li><a href="/phu-kien">Phụ kiện</a></li>
        <li><a href="/tin-tuc">Tin tức</a></li>
        <li><a href="/lien-he">Liên hệ</a></li>
    </ul>
    <div class="hidden-menu"></div>
    <script>
        var height = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
        var width = window.innerWidth;
        document.querySelector('.menu-responsive').style.height = height + 'px';
        document.querySelector('.hidden-menu').style.width = width + 'px';
        document.querySelector('.hidden-menu').style.height = height + 'px';
    </script>
    <!--login form-->
    <div id="loginForm" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <label for="" style="width: 100%; text-align: center; font-size: 25px; font-weight: 700;">Đăng nhập</label>
                    <button type="button" class="close" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                <form action="#" method="get" style="display: block;">
                    <label for="email">Nhập tài khoản:</label>
                    <input type="text" class="form-control" id="email"><br>
                    <label for="pwd">Nhập mật khẩu:</label>
                    <input type="password" class="form-control" id="pwd"><br>
                    <label><input type="checkbox"> Ghi nhớ mật khẩu</label>
                    <input type="submit" value="Đăng nhập" class="btn btn-primary btn-block">
                    <label for="" style="margin-left: 150px; margin-top: 20px; margin-bottom: 20px;">Hoặc đăng nhập bằng </label>
                    <div class="icon-login d-flex justify-content-center">
                        <a href="#"><i class="fa-brands fa-facebook" style="font-size: 40px; margin-right: 10px;"></i></a>
                        <a href="#"><i class="fa-brands fa-google-plus" style="font-size: 40px; color: red;"></i></a>
                    </div>
                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--register-->
    <div id="registerForm" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <label for="" style="width: 100%; text-align: center; font-size: 25px; font-weight: 700;">Đăng ký</label>
                    <button type="button" class="close" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                <form action="#" method="get" style="display: block;">
                    <label for="email">Nhập tài khoản:</label>
                    <input type="text" class="form-control" id="email"><br>
                    <label for="pwd">Nhập mật khẩu:</label>
                    <input type="password" class="form-control" id="pwd"><br>
                    <label for="pwd">Xác nhận lại mật khẩu:</label>
                    <input type="password" class="form-control" id="pwd"><br>
                    <input type="submit" value="Đăng ký" class="btn btn-primary btn-block">
                    <label for="" style="margin-left: 150px; margin-top: 20px; margin-bottom: 20px;">Hoặc đăng nhập bằng </label>
                    <div class="icon-login d-flex justify-content-center">
                        <a href="#"><i class="fa-brands fa-facebook" style="font-size: 40px; margin-right: 10px;"></i></a>
                        <a href="#"><i class="fa-brands fa-google-plus" style="font-size: 40px; color: red;"></i></a>
                    </div>
                </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <!--cart form-->
    <style>
       .row-product .column-product{
            vertical-align: middle;
        }
    </style>
    <div id="cart-form" class="modal fade" role="dialog">
        <div class="modal-dialog modal-lg">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <label for="" style="width: 100%; text-align: center; font-size: 25px; font-weight: 700;">Giỏ hàng</label>
                    <button type="button" class="close" data-dismiss="modal">X</button>
                </div>
                <div class="modal-body">
                    <div class="cart-product-container">
                    @if (!empty(Session::get('cart')))
                        <table class="table">
                            <tr>
                                <th><span class="title-avt-product">Ảnh sản phẩm</span></th>
                                <th><span class="title-name-product">Tên sản phẩm</span></th>
                                <th><span class="title-price">Giá</span></th>
                                <th><span class="title-quantity">Số lượng</span></th>
                                <th><span class="title-total">Tổng</span></th>
                                <th><span class="cancel">Xóa bỏ</span></th>
                            </tr>
                            @foreach (Session::get('cart') as $productId => $item)
                                <tr class="row-product">
                                    <td class="column-product"><img class="img-product-cart" src="{{ $item['product']['avtProduct'] }}" alt="img-product"></td>
                                    <td class="column-product"><a href="#" class="name-product-cart">{{ $item['product']['nameProduct'] }}</a></td>
                                    <td class="column-product"><span class="price-product-cart">{{ $item['product']['price'] }}đ</span></td>
                                    <td class="column-product">
                                        <div class="quantity-wrap">
                                            <input type="button" class="minus-quantity" value="-">
                                            <input type="number" step="1" min="1" max="" name="input-text-quantity-product" disabled="" value="1" class="input-text-quantity text-center" pattern="" inputmode="">
                                            <input type="button" class="plus-quantity" value="+">
                                        </div>
                                    </td>
                                    <td class="column-product">230302đ</td>
                                    <!-- <td class="column-product text-center"><a href="{{ route('deleteToCart', ['id'=> $item['product']['id']]) }}">X</a></td> -->
                                </tr>
                            @endforeach
                        </table>
                        <div class="pay-wap text-center">
                            <a href="{{ route('cart') }}" class="pay-btn btn btn-primary">Thanh toán</a>
                        </div>
                    @else
                        <div class="cart-empty-wrap text-center">
                            <span class="cart-empty-text" style="width: 100%;">Không có sản phẩm nào trong giỏ hàng!</span>
                        </div>
                    @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</header>

