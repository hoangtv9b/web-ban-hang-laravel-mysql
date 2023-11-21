@extends('admin.app')
@section('content')
<div class="content-admin col-md-10 p-0 d-flex flex-column">
        <div class="content-admin-nav d-block p-3">
            <div class="app-title d-flex justify-content-between p-2">
                <span>Cài đặt hệ thống</span>
                <span id="time"></span>
            </div>
            <div class="table-product my-3 p-3">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="account-base my-5">
                                <label>Tài khoản người dùng hiện tại</label>
                                <div class="form-group">
                                    <input type="text" name="" id="" value="admin@gmail.com" class="form-control">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="" id="" value="*******" class="form-control">
                                </div>
                                <button class="btn btn-secondary">Sửa đổi</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="list-account my-5">
                                <label for="">Danh sách admin</label>
                                <table class="table table-bordered">
                                    <tr class="row-title">
                                        <td>STT</td>
                                        <td>Tên admin</td>
                                        <td>Tác vụ</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Nguyễn Hà Minh</td>
                                        <td><a href="#">Liên hệ</a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Nguyễn Hà Minh</td>
                                        <td><a href="#">Liên hệ</a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Nguyễn Hà Minh</td>
                                        <td><a href="#">Liên hệ</a></td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Nguyễn Hà Minh</td>
                                        <td><a href="#">Liên hệ</a></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label for="">Quản lý bài viết</label>
                        </div>
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
