@extends('Layouts.app')
@section('content')
<div class="container-fluid">
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="margin-top: 10px;">
        <ul class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="img-slide" src="{{ asset('Images/slide-1.jpg') }}" alt="Los Angeles" width="100%">
                <div class="carousel-caption">
                    <span>Chào mừng đến với ngôi nhà XSHOP</span>
                </div>
            </div>
            <div class="carousel-item">
                <img class="img-slide" src="{{ asset('Images/slide-2.jpg') }}" alt="Chicago" width="100%">
            </div>
            <div class="carousel-item">
                <img class="img-slide" src="{{ asset('Images/slide-5.jpg') }}" alt="New York" width="100%">
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row product-wrap">
            <div class="col-md-4 py-5 px-3 d-flex justify-content-center flex-wrap">
                <img src="{{ asset('Images/title_block_03.png') }}" alt="title block">
                <img src="{{ asset('Images/product/women-classic-5.jpg') }}" alt="title block" width="100%">
                <a href="#" class="btn-show-product">Xem sản phẩm</a>
            </div>
            <div class="col-md-4 py-5 px-3 d-flex justify-content-center flex-wrap">
                <img src="{{ asset('Images/title_block_03.png') }}" alt="title block">
                <img src="{{ asset('Images/product/women-classic-7.jpg') }}" alt="title block" width="100%">
                <a href="#" class="btn-show-product">Xem sản phẩm</a>
            </div>
            <div class="col-md-4 py-5 px-3 d-flex justify-content-center flex-wrap">
                <img src="{{ asset('Images/title_block_03.png') }}" alt="title block">
                <img src="{{ asset('Images/product/women-classic-8-1-300x225.jpg') }}" alt="title block" width="100%">
                <a href="#" class="btn-show-product">Xem sản phẩm</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="selling-products">
        <div class="container-fluid d-flex justify-content-center">
            <label for="" class="selling-products-label">SẢN PHẨM BÁN CHẠY</label>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row padding">
            @foreach ($allProduct as $allProducts)
                <div class="col-md-3 my-5 col-6 d-flex text-center justify-content-center flex-column block-product">
                    <a href="{{ route('detailProduct', $allProducts->slug) }}"><img class="img-product" src="{{ $allProducts->avtProduct }}" alt="title block" height="245px"></a>
                    <div class="image-thumbnail-wrap text-center mt-4">
                        <img src="{{ $allProducts->avtProduct }}" class="image-thumbnail" alt="">
                    </div>
                    <a href="{{ route('detailProduct', $allProducts->slug) }}" class="name-product-block">{{ $allProducts->nameProduct }}</a>
                    <div class="price-wrap">
                        <span class="price-product"><strike>{{ number_format($allProducts->price) }}₫</strike></span><span class="price-prm-product">{{ number_format($allProducts->prmPrice) }}₫</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="selling-products">
        <div class="container-fluid d-flex justify-content-center">
            <label for="" class="selling-products-label">PHỤ KIỆN KHÁC</label>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row padding">
            @foreach ($allProduct as $allProducts)
                <div class="col-md-3 my-5 col-6 d-flex text-center justify-content-center flex-column block-product">
                    <a href="{{ route('detailProduct', $allProducts->slug) }}"><img class="img-product" src="{{ $allProducts->avtProduct }}" alt="title block" height="245px"></a>
                    <div class="image-thumbnail-wrap text-center mt-4">
                        <img src="{{ $allProducts->avtProduct }}" class="image-thumbnail" alt="">
                    </div>
                    <a href="{{ route('detailProduct', $allProducts->slug) }}" class="name-product-block">{{ $allProducts->nameProduct }}</a>
                    <div class="price-wrap">
                        <span class="price-product"><strike>{{ number_format($allProducts->price) }}₫</strike></span><span class="price-prm-product">{{ number_format($allProducts->prmPrice) }}₫</span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center my-5">
            <a href="#" class="see-all">xem tất cả</a>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="banner-image d-flex justify-content-center">
        <div class="container-fluid d-flex justify-content-center">
            <div class="content-banner">
                <label for="">MONA SNEKER</label>
                <span class="mt-4">KHUYẾN MÃI GIẢM GIÁ 50%</span>
                <a href="#" class="mt-4">Xem sản phẩm</a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid mt-5">
    <div class="selling-products">
        <div class="container-fluid d-flex justify-content-center">
            <label for="" class="selling-products-label">SẢN PHẨM ĐANG HOT</label>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row padding">
            @foreach ($allProduct as $allProducts)
                <div class="col-md-3 my-5 col-6 d-flex text-center justify-content-center flex-column block-product">
                    <a href="{{ route('detailProduct', $allProducts->slug) }}"><img class="img-product" src="{{ $allProducts->avtProduct }}" alt="title block" height="245px"></a>
                    <div class="image-thumbnail-wrap text-center mt-4">
                        <img src="{{ $allProducts->avtProduct }}" class="image-thumbnail" alt="">
                    </div>
                    <a href="{{ route('detailProduct', $allProducts->slug) }}" class="name-product-block">{{ $allProducts->nameProduct }}</a>
                    <div class="price-wrap">
                        <span class="price-product"><strike>{{ number_format($allProducts->price) }}₫</strike></span><span class="price-prm-product">{{ number_format($allProducts->prmPrice) }}₫</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="selling-products">
        <div class="container-fluid d-flex justify-content-center">
            <label for="" class="selling-products-label">TẤT CẢ SẢN PHẨM</label>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row padding">
            @foreach ($allProduct as $allProducts)
                <div class="col-md-3 my-5 col-6 d-flex text-center justify-content-center flex-column block-product">
                    <a href="{{ route('detailProduct', $allProducts->slug) }}"><img class="img-product" src="{{ $allProducts->avtProduct }}" alt="title block" height="245px"></a>
                    <div class="image-thumbnail-wrap text-center mt-4">
                        <img src="{{ $allProducts->avtProduct }}" class="image-thumbnail" alt="">
                    </div>
                    <a href="{{ route('detailProduct', $allProducts->slug) }}" class="name-product-block">{{ $allProducts->nameProduct }}</a>
                    <div class="price-wrap">
                        <span class="price-product"><strike>{{ number_format($allProducts->price) }}₫</strike></span><span class="price-prm-product">{{ number_format($allProducts->prmPrice) }}₫</span>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center my-5">
            <a href="#" class="see-all">xem tất cả</a>
        </div>
    </div>
</div>
<div class="container-fluid detail-store">
    <div class="container">
        <div class="row">
            <div class="detail-block col-md-4 col-12">
                <div class="detail-text d-block">
                    <label for="">Hơn 10 năm phát triển, XSHOP luôn mang đến những mẫu giày chất lượng tốt nhất với giá
                        cả hợp lí nhất đến tay người tiêu dùng với hệ thống cửa hàng Số 1 Hà Nội và bán online khắp
                        Việt Nam.</label>
                </div>
                <div class="d-flex flex-column">
                    <span class="quantity-sell">1,324,224</span>
                    <span class="quantity-sell-text">Số Sản Phẩm Đã Bán</span>
                    <span class="quantity-buy">3,432,434</span>
                    <span class="quantity-buy-text">Khách Hàng Đã Mua</span>
                </div>
            </div>
            <div class="col-md-8 col-12">
                <div class="video-detail">
                    <iframe width="100%" height="450px"
                    src="https://www.youtube.com/embed/tgbNymZ7vqY?mute=1&autoplay=1">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row d-flex justify-content-center mt-5">
            <label for="" class="customer-reviews-title">KHÁCH HÀNG NÓI GÌ VỀ XSHOP</label>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-12 my-5">
                <div class="card" style="border: none;">
                    <span class="card-text p-3 customer-reviews-text">Giày bên shop có nhiều mẫu đẹp lắm , nhưng mà mình ưa mỗi van cá mập thôi ,
                        vừa mới mua bên shop , giày vừa , đẹp , sau ra mua ủng hộ shop tiếp</span>
                    <div class="d-flex mt-3 justify-content-center align-items-center">
                        <img src="{{ asset('Images/placeholder.png') }}" alt="avatar" class="avatar-customer mr-2">
                        <div class="info-customer d-flex flex-column">
                            <span class="name-customer">Đức Nguyễn</span>
                            <span class="job-customer">Nhân viên bán hàng</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 my-5">
                <div class="card" style="border: none;">
                    <span class="card-text p-3 customer-reviews-text">Giày bên shop có nhiều mẫu đẹp lắm , nhưng mà mình ưa mỗi van cá mập thôi ,
                        vừa mới mua bên shop , giày vừa , đẹp , sau ra mua ủng hộ shop tiếp</span>
                    <div class="d-flex mt-3 justify-content-center align-items-center">
                        <img src="{{ asset('Images/placeholder.png') }}" alt="avatar" class="avatar-customer mr-2">
                        <div class="info-customer d-flex flex-column">
                            <span class="name-customer">Đức Nguyễn</span>
                            <span class="job-customer">Nhân viên bán hàng</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-12 my-5">
                <div class="card" style="border: none;">
                    <span class="card-text p-3 customer-reviews-text">Giày bên shop có nhiều mẫu đẹp lắm , nhưng mà mình ưa mỗi van cá mập thôi ,
                        vừa mới mua bên shop , giày vừa , đẹp , sau ra mua ủng hộ shop tiếp</span>
                    <div class="d-flex mt-3 justify-content-center align-items-center">
                        <img src="{{ asset('Images/placeholder.png') }}" alt="avatar" class="avatar-customer mr-2">
                        <div class="info-customer d-flex flex-column">
                            <span class="name-customer">Đức Nguyễn</span>
                            <span class="job-customer">Nhân viên bán hàng</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid my-5">
    <div class="row">
        <div class="banner-xshop-wrap">
            <img class="banner-xshop-img" src="{{ asset('Images/IMG_1209.jpg') }}" alt="banner">
            <div class="shop-system-wrap text-center">
                <h4 class="xshop-system-title"><a href="#">Hệ thống cửa hàng XSHOP</a></h4>
                <div class="xshop-system-link"><a href="#">XEM NGAY HỆ THỐNG XSHOP</a></div>
                <a href="#" class="xshop-system-btn">Xem ngay<i class="fa-regular fa-circle-right"></i></a>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container-fluid d-flex justify-content-center" style="margin-top: 70px;">
        <label for="" class="selling-products-label">TIN TỨC MỚI NHẤT</label>
    </div>
</div>
<div class="container-fluid">
    <div class="container post-container">
        <a class="slider-prev"><i class="fa-solid fa-angle-left"></i></a>
        <div class="row my-5 slider-post">
            @foreach ($allPost as $allPosts)
                <div class="col-md-3 col-12">
                    <div class="card post-wrap">
                        <img class="img-product" style="object-fit: cover; object-position: center;" src="{{ $allPosts->images }}" alt="title block">
                        <div class="card-body">
                            <a href="{{ route('post', $allPosts->slug) }}"><h5 class="card-title">{{ $allPosts->title }}</h5></a>
                            <div class="card-text post-text">{{ $allPosts->content }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <a class="slider-next"><i class="fa-solid fa-angle-right"></i></a>
        <div class="d-flex justify-content-center my-5">
            <a href="tin-tuc" class="see-all">xem tất cả</a>
        </div>
    </div>
</div>
<script>
        $('.slider-post').slick({
            slidesToShow: 3,
            slidesToScroll: 2,
            prevArrow: '.slider-prev',
            nextArrow: '.slider-next',
            responsive: [
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        prevArrow: '.slider-prev',
                        nextArrow: '.slider-next'
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2,
                        prevArrow: '.slider-prev',
                        nextArrow: '.slider-next'
                    }
                },
                {
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        prevArrow: '.slider-prev',
                        nextArrow: '.slider-next'
                    }
                }
            ]
        });
</script>
@endsection
