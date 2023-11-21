@extends('Layouts.app')
@section('content')
<div class="container-fluid">
    <div class="container contact">
        <div class="row">
            <div class="col-md-6 col-12">
                <p class="contact-title mt-4">
                    Liên hệ với chúng tôi
                </p>
                <p class="send-comments mt-2 mb-2">
                    Gửi một lưu ý cho chúng tôi và chúng tôi sẽ trả lời bạn nhanh nhất có thể.
                </p>
                <form action="#" method="get" class="">
                    <div class="form-group">
                        <label for="name">Tên *</label>
                    <input type="text" name="name-contact" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="email">Email *</label>
                    <input type="email" name="email-contact" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="phone number">Số điện thoại</label>
                    <input type="text" name="phone-number-contact" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="text">Bạn đang nghĩ gì? *</label>
                        <textarea name="comments-contact" id="" cols="30" rows="1" class="mb-3 form-control"></textarea>
                    </div>
                    <input type="submit" name="submit-contact" class="submit-contact btn btn-dark mb-5" value="Gửi">
                </form>
            </div
            <div class="col-md-6 col-12">

            </div>
        </div>
    </div>
</div>
<div class="container-fluid bg-light bg-gradient py-2">
    <div class="row">
        <div class="col-md-6 col-12 d-flex">
            <i class="mail-check fa-solid fa-envelope-circle-check d-flex align-self-center"></i>
            <div class="d-flex flex-column">
                <span class="sign-up-post">Đăng ký nhận bản tin</span>
                <span class="sign-up-post-2">Đừng bỏ lỡ hàng ngàn sản phẩm và các chương trình siêu hấp dẫn</span>
            </div>
        </div>
        <div class="col-md-6 col-12 d-flex justify-content-center align-items-center">
            <form action="#" method="get">
                <input type="email" name="email-contact-sign-up" id="" placeholder="Địa chỉ email của bạn" class="email-contact-sign-up">
                <input type="submit" name="submit-email-contact-sign-up" value="Đăng ký" class="submit-email-contact-sign-up">
            </form>
        </div>
    </div>
</div>
@endsection
