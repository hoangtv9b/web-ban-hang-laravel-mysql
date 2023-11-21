@extends('Layouts.app')
@section('content')
<div class="container-fluid">
    <div class="container introduce-head mt-5">
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-12 text-center">
                <p class="heading-title">VỀ XSHOP</p>
                <div class="line-white-section d-flex justify-content-center">
                    <p class="line-white"></p>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6 col-12 text-center">
                <span class="main-title">Hệ thống bán lẻ giày thể thao số 1 Hà Nội
                với mẫu mã đa dạng cùng phong cách phục vụ tận tình, chu đáo.</span>
                </span>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 d-flex flex-column">
                <span class="quantity-sell" style="color: #FFF;">
                    1,445,354
                </span>
                <span class="quantity-sell-text" style="color: #FFF;">Số sản phẩm đã bán</span>
            </div>
            <div class="col-md-6 d-flex flex-column">
                <span class="quantity-buy" style="color: #FFF;">
                    4,453,454
                </span>
                <span class="quantity-buy-text" style="color: #FFF;">Số khách hàng</span>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row my-4">
            <div class="col-md-12 col-12 text-center">
                <p class="story-title-span">Câu Chuyện</p>
                <i class="fa-solid fa-heart" style="color: #9f9fd1; font-size: 25px;"></i>
            </div>
        </div>
        <div class="row d-flex justify-content-center my-4">
            <div class="col-md-5 col-12">
                <label for="">Được thành lập từ năm 2012, XSHOP tự hào là đơn vị tiên phong
                chuyên cung cấp các mẫu giày Thể Thao với mẫu mã đa dạng và giá cả hợp lí.</label>
            </div>
            <div class="col-md-5 col-12">
                <label for="">Trong 6 năm phát triển, XSHOP luôn cố gắng mang đến những mẫu giày chất lượng
                tốt nhất với giá cả hợp lí nhất đến tay người tiêu dùng.</label>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="video-introduce container pl-0 pr-0">
        <div class="container d-flex justify-content-center">
            <iframe class="" src="https://youtu.be/a1ILAowCiOw?autoplay=1" frameborder="0" width="80%" height="500px"></iframe>
        </div>
        <span class="d-flex justify-content-center video-introduce-title">Video giới thiệu XSHOP</span>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-12">
            <iframe src="https://www.google.com/maps/d/embed?mid=1SbN6ahfx-uWQgDPKmQCm6uD1UOvanulP&ehbc=2E312F"
                width="100%" height="480"></iframe>
        </div>
        <div class="col-md-4 col-12 d-flex flex-column">
            <label for="" class="map-store-title">Hệ Thống Cửa Hàng XSHOP</label>
            <span class="map-store-address"><i class="fa-solid fa-check"></i>  57 Quan Hoa, Cầu Giấy, Hà Nội</span>
            <hr>
            <span class="map-store-address"><i class="fa-solid fa-check"></i>  29 Trần Đại Nghĩa, Hai Bà Trưng</span>
        </div>
    </div>
</div>
<div class="container-fluid">
    <hr color="#000" height="1px">
</div>
<div class="container-fluid my-5">
    <div class="container">
        <div class="row">
            <div class="time-work col-md-6 text-center">
                <i class="fa-regular fa-clock"  style="font-size: 40px;"></i>
                <p class="time-work-title">
                    Thời gian làm việc
                </p>
                <p class="time-work-span">
                    9:00 AM - 22.00 PM
                </p>
                <p class="time-work-span">
                    Thứ 2 - Chủ Nhật
                </p>
            </div>
            <div class="time-work col-md-6 text-center">
                <i class="fa-solid fa-phone" style="font-size: 40px;"></i>
                <p class="time-work-title text-center">
                    Liên hệ
                </p>
                <p class="time-work-span text-center">
                    Phone: 097 567 1080
                </p>
                <p class="time-work-span text-center">
                    Email: contact@giayxshop.vn
                </p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid my-5">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <i class="fa-brands fa-facebook icon-introduce" style="font-size: 40px; margin: 0px 20px;" title="facebook"></i>
                <i class="fa-brands fa-twitter icon-introduce" style="font-size: 40px; margin: 0px 20px;" title="twitter"></i>
                <i class="fa-brands fa-google-plus-g icon-introduce" style="font-size: 40px; margin: 0px 20px;" title="google"></i>
                <i class="fa-regular fa-envelope icon-introduce" style="font-size: 40px; margin: 0px 20px;" title="email"></i>
                <i class="fa-brands fa-youtube icon-introduce" style="font-size: 40px; margin: 0px 20px;" title="youtube"></i>
            </div>
        </div>
    </div>
</div>
@endsection
