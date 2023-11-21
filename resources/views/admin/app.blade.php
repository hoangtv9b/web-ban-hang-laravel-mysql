<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Admin.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/v5-font-face.min.css" integrity="sha512-H2YXTLk5bs3DqvCfOEFsHmsjKW/qLp8SqsqVuPVwZzA5WFudPvPJisFKba2Km3sZNNBapYsZjSMTmRVcfxb5yw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/brands.min.css" integrity="sha512-L+sMmtHht2t5phORf0xXFdTC0rSlML1XcraLTrABli/0MMMylsJi3XA23ReVQkZ7jLkOEIMicWGItyK4CAt2Xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <!--angular-->
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/bootstrap/3.0.1/css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='https://netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.min.css'>
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular.min.js'></script>
    <script src='https://ajax.googleapis.com/ajax/libs/angularjs/1.2.4/angular-sanitize.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/textAngular/1.1.2/textAngular.min.js'></script>
    <title>{{ $title }}</title>
</head>
<body onload="getTime()">
    <div class="Admin container-fluid p-0 d-flex">
        <div class="navbar-admin col-md-2 p-0 m-0">
            <div class="account-admin p-4 m-0">
                <img src="{{ asset(session()->get('avatar')) }}" alt="avatar-admin" class="avatar-admin">
                <div class="info-admin d-flex flex-column">
                    <span class="name-admin mt-1">
                        {{ session()->get('nameAdmin') }}
                    </span>
                    <a href="/admin/log-out/" class="log-out">Đăng xuất</a>
                </div>
            </div>
            <ul class="nav-menu-admin m-0">
                <li><a href="/admin/trang-chu"><i class="app-menu-icon fa-solid fa-cart-shopping"></i><span>POS bán hàng</span></a></li>
                <li><a href="/admin/dashboard"><i class="app-menu-icon fa-solid fa-chart-line"></i><span>Bảng điều khiển</span></a></li>
                <li><a href="/admin/quan-ly-nhan-vien"><i class="app-menu-icon fa-solid fa-clipboard-user"></i><span>Quản lý nhân viên</span></a></li>
                <li><a href="/admin/quan-ly-khach-hang"><i class="app-menu-icon fa-solid fa-person"></i><span>Quản lý khách hàng</span></a></li>
                <li><a href="/admin/quan-ly-san-pham"><i class="app-menu-icon fa-brands fa-product-hunt"></i><span>Quản lý sản phẩm</span></a></li>
                <li><a href="/admin/quan-ly-don-hang"><i class="app-menu-icon fa-solid fa-file-signature"></i><span>Quản lý đơn hàng</span></a></li>
                <li><a href="/admin/quan-ly-bai-viet"><i class="app-menu-icon fa-solid fa-person-walking"></i><span>Quản lý bài viết</span></a></li>
                <li><a href="#"><i class="app-menu-icon fa-solid fa-magnifying-glass-dollar"></i><span>Bảng kê lương</span></a></li>
                <li><a href="#"><i class="app-menu-icon fa-solid fa-money-check-dollar"></i><span>Báo cáo doanh thu</span></a></li>
                <li><a href="#"><i class="app-menu-icon fa-solid fa-file-circle-check"></i><span>Lịch công tác</span></a></li>
                <li><a href="/admin/cài-dat-he-thong"><i class="app-menu-icon fa-solid fa-gear"></i><span>Cài đặt hệ thống</span></a></li>
            </ul>
        </div>
    @yield('content')
    @include('admin.footer')
