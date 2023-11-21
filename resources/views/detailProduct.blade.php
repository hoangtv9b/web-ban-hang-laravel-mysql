@extends('Layouts.app')
@section('content')
<div class="container-fluid">
    <div class="col-md-12 col-12">
        {{ Breadcrumbs::render('product', $detailProduct) }}
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="img-detail-product col-lg-6 col-md-6 col-sm-6 col-12 px-5">
            <div class="slider-for my-3">
                <img class="img-product-for" src="{{ $detailProduct->avtProduct }}" alt="anh-san-pham">
                @foreach ($imageProduct as $imgProduct)
                    <img class="img-product-for" src="{{ $imgProduct->linkImage }}" class="preview-image" alt="">
                @endforeach
            </div>
            <div class="image-slider">
                <img class="img-product-nav" src="{{ $detailProduct->avtProduct }}" alt="anh-san-pham">
                @foreach ($imageProduct as $imgProduct)
                    <img class="img-product-nav" src="{{ $imgProduct->linkImage }}" class="preview-image" alt="">
                @endforeach
            </div>
        </div>
        <div class="product-attribute col-lg-6 col-md-6 col-sm-6 col-12 px-5">
            <h5 class="pa-code-product">Mã số: {{ $detailProduct->id }}</h5>
            <h4 class="pa-name-product">{{ $detailProduct->nameProduct }}</h4>
            <div class="rating-meta d-flex">
                <div class="rating-star">
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                    <i class="fa-solid fa-star"></i>
                </div>
                <span class="rate">(5.0)</span>
                <span> | </span>
                <span>127 đánh giá</span>
                <span> | </span>
                <span>502 đã bán</span>
            </div>
            <div class="pa-price-product-wrapper my-1">
                <span class="pa-sale-product">{{ number_format($detailProduct->prmPrice, '0', '.', '.') }}đ</span>
                <span class="pa-price-product"><del>{{ number_format($detailProduct->price, '0', '.', '.') }}đ</del></span>
            </div>
            <p class="pa-trademark">Thương hiệu: ADIDAS</p>
            <p class="pa-code-product">Mã sản phẩm: {{ $detailProduct->codeProduct }}</p>
            <p class="pa-status-product">Tình trạng: {{ $detailProduct->status }}</p>
            <p class="pa-product-color">Chọn màu: </p>
                <div class="list-color-product">
                    <div class="yellow-product"></div>
                    <div class="red-product"></div>
                    <div class="red-product"></div>
                </div>
            <div class="cart-pay-wrapper my-5">
                <a href="{{ route('addToCart', ['id' => $detailProduct->id]) }}" class="add-to-cart"><i class="fa-solid fa-cart-plus pr-2"></i>Thêm vào giỏ hàng</a>
                <a href="#" class="pay-product"><i class="fa-solid fa-file-invoice-dollar pr-2"></i>Thanh toán</a>
            </div>
        </div>
        <script>
            $('.slider-for').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.image-slider'
            });
            $('.image-slider').slick({
                slidesToShow: 4,
                slidesToScroll: 3,
                asNavFor: '.slider-for',
                infinite: true,
                arrows: false,
                focusOnSelect: true
            });
        </script>
    </div>
</div>
<div class="container-fluid">
    <div class="row padding">
        <div class="col-lg-12 col-md-12 p-5">
            <h4 class="text-center my-3">Mô tả sản phẩm</h4>
            <span class="detail-product-text">
                {{ $detailProduct->detailProduct }}
            </span>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row padding">
        <div class="container">
            <div class="col-lg-12 col-md-12 col-12 px-5 py-3">
                <h4 class="text-center my-3">Thông tin sản phẩm</h4>
                <table class="table table-bordered table-hover my-4">
                    <tr>
                        <th>Tên sản phẩm:</th>
                        <td>{{ $detailProduct->nameProduct }}</td>
                    </tr>
                    <tr>
                        <th>Mã sản phẩm:</th>
                        <td>{{ $detailProduct->codeProduct }}</td>
                    </tr>
                    <tr>
                        <th>Chất liệu:</th>
                        <td>Da bò</td>
                    </tr>
                    <tr>
                        <th>Màu:</th>
                        <td>Đen</td>
                    </tr>
                    <tr>
                        <th>Chính sách bán hàng:</th>
                        <td>1 đổi 1 trong 14 ngày</td>
                    </tr>
                    <tr>
                        <th>Bảo hành:</th>
                        <td>12 tháng</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="col-lg-12 col-md-12 col-12 px-5 py-3">
            <h4 class="text-center my-3">Đánh giá sản phẩm(4.5/5)</h4>
            <div class="rating-wrapper my-3">
                <div class="rating-block d-flex">
                    <img src="{{ asset('Images/placeholder.png') }}" alt="" class="avt-customers">
                    <div class="info-customer-block mx-2">
                        <span class="name-customers-rating-product">Trần Nhật Công</span>
                        <span>-</span>
                        <span>02923xxxxxxx</span>
                        <div class="rating-star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora odit quasi obcaecati corporis vel alias numquam debitis, velit fugiat magni quam qui inventore doloremque dolores? Quibusdam voluptatum eaque laudantium! Tenetur?</span>
            </div>
            <div class="rating-wrapper my-3">
                <div class="rating-block d-flex">
                    <img src="{{ asset('Images/placeholder.png') }}" alt="" class="avt-customers">
                    <div class="info-customer-block mx-2">
                        <span class="name-customers-rating-product">Trần Nhật Công</span>
                        <span>-</span>
                        <span>02923xxxxxxx</span>
                        <div class="rating-star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora odit quasi obcaecati corporis vel alias numquam debitis, velit fugiat magni quam qui inventore doloremque dolores? Quibusdam voluptatum eaque laudantium! Tenetur?</span>
            </div>
            <div class="rating-wrapper my-3">
                <div class="rating-block d-flex">
                    <img src="{{ asset('Images/placeholder.png') }}" alt="" class="avt-customers">
                    <div class="info-customer-block mx-2">
                        <span class="name-customers-rating-product">Trần Nhật Công</span>
                        <span>-</span>
                        <span>02923xxxxxxx</span>
                        <div class="rating-star">
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                            <i class="fa-solid fa-star"></i>
                        </div>
                    </div>
                </div>
                <span>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempora odit quasi obcaecati corporis vel alias numquam debitis, velit fugiat magni quam qui inventore doloremque dolores? Quibusdam voluptatum eaque laudantium! Tenetur?</span>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="rating-form text-center my-5">
            <div class="row padding">
                <div class="col-md-6 col-12"><input type="text" class="rating-input" name="name-customers-rating" id="" placeholder="Họ và tên"></div>
                <div class="col-md-6 col-12"><input type="text" class="rating-input" name="phone-number-customers-rating" id="" placeholder="Số điện thoại"></div>
                <div class="col-md-12 col-12"><textarea name="rating-content" class="rating-input" id="" cols="30" rows="2" placeholder="Đánh giá của bạn"></textarea></div>
            </div>
            <button class="btn btn-dark">Viết đánh giá</button>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="col-md-12 col-12">
            <h4 class="text-center my-3">Các sản phẩm khác</h4>
        </div>
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
@endsection
