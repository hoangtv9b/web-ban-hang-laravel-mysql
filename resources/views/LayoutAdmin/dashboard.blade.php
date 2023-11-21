@extends('admin.app')
@section('content')
<div class="content-admin col-md-10 p-0 d-flex flex-column">
    <div class="content-admin-nav d-block p-3">
        <div class="app-title d-flex justify-content-between p-2">
            <span>Bảng điều khiển</span>
            <span id="time"></span>
        </div>
        <div class="container-fluid table-product my-3 p-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="smail-box order-box p-3">
                        <div class="inner-box">
                            <h3 class="quantity-inner-box m-0">150</h3>
                            <p class="title-inner-box m-0">Đơn hàng mới</p>
                        </div>
                        <a href="#" class="add-info">Thêm thông tin<i class="fa-solid fa-right-long"></i></a>
                        <i class="fa-solid fa-bag-shopping"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="smail-box bounce-rate p-3">
                        <div class="inner-box">
                            <h3 class="quantity-inner-box m-0">53%</h3>
                            <p class="title-inner-box m-0">Tỷ lệ thoát</p>
                        </div>
                        <a href="#" class="add-info">Thêm thông tin<i class="fa-solid fa-right-long"></i></a>
                        <i class="fa-solid fa-chart-simple"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="smail-box user-sign-up p-3">
                        <div class="inner-box">
                            <h3 class="quantity-inner-box m-0">44</h3>
                            <p class="title-inner-box m-0">Đăng ký người dùng</p>
                        </div>
                        <a href="#" class="add-info">Thêm thông tin<i class="fa-solid fa-right-long"></i></a>
                        <i class="fa-solid fa-user-plus"></i>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="smail-box visitor p-3">
                        <div class="inner-box">
                            <h3 class="quantity-inner-box m-0">65</h3>
                            <p class="title-inner-box m-0">Khách truy cập</p>
                        </div>
                        <a href="#" class="add-info">Thêm thông tin<i class="fa-solid fa-right-long"></i></a>
                        <i class="fa-solid fa-universal-access"></i>
                    </div>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-md-7">
                    <canvas id="myChart"></canvas>
                </div>
                <div class="col-md-5">
                    <div class="complete">
                        <label class="my-3" for="">Tiến trình hoạt động</label>
                        <div class="text-complete d-flex justify-content-between my-2">
                            <span>Số lượng đơn hàng đang chờ xử lý</span><span>100/200</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 50%"></div>
                        </div>
                        <div class="text-complete d-flex justify-content-between my-2">
                            <span>Số lượng đơn hàng đã hoàn thành</span><span>140/200</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 70%"></div>
                        </div>
                        <div class="text-complete d-flex justify-content-between my-2">
                            <span>Số lượng sản phẩm đang chờ nhập về kho</span><span>60/200</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar" style="width: 40%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
