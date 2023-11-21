    <footer class="footer-bav">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-12 mt-5 mb-3">
                        <label for="" class="title-footer">
                            GIỚI THIỆU
                        </label><br>
                        <span class="text-introduce">Chào mừng bạn đến với ngôi nhà Converse! Tại đây, mỗi một dòng chữ, mỗi chi tiết và hình ảnh đều là những bằng chứng mang dấu ấn lịch sử Converse 100 năm, và đang không ngừng phát triển lớn mạnh.</span>
                    </div>
                    <div class="introduce-link col-md-3 col-12 mt-5 mb-3">
                        <label for="" class="title-footer">
                            ĐỊA CHỈ
                        </label><br>
                        <i class="fa-solid fa-location-dot" style="color: #FFF; margin-right: 10px;"></i>
                        <span class="address-text">319 C16 Lý Thường Kiệt, Phường 15, Quận 11, Tp.HCM</span><br>
                        <i class="fa-solid fa-square-phone" style="color: #FFF; margin-right: 10px;"></i>
                        <a href="#" class="info-link">076922192</a><br>
                        <i class="fa-regular fa-envelope-open" style="color: #FFF; margin-right: 10px;"></i>
                        <a href="#" class="info-link">demonhunters@gmail.com</a><br>
                        <i class="fa-brands fa-skype" style="color: #FFF; margin-right: 10px;"></i>
                        <a href="#" class="info-link">demonhunterp</a>
                    </div>
                    <div class="col-md-3 col-12 mt-5 mb-3">
                        <label for="" class="title-footer">
                            MENU
                        </label><br>
                        <style>
                            .active{
                                color: red;
                            }
                            .no-active{
                                color: #eeb4b4;
                            }
                        </style>
                        <ul class="menu-footer">
                            <li><a class="{{ request()->is('/') ? 'active' : 'no-active' }}" href="/">Trang chủ</a></li>
                            <li><a class="{{ request()->is('gioi-thieu') ? 'active' : 'no-active' }}" href="gioi-thieu">Giới thiệu</a></li>
                            <li><a class="{{ request()->is('cua-hang') ? 'active' : 'no-active' }}" href="cua-hang">Cửa hàng</a></li>
                            <li><a class="{{ request()->is('tin-tuc') ? 'active' : 'no-active' }}" href="tin-tuc">Tin tức</a></li>
                            <li><a class="{{ request()->is('lien-he') ? 'active' : 'no-active' }}" href="lien-he">Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-12 mt-5 mb-3">
                        <label for="" class="title-footer">
                            MẠNG XÃ HỘI
                        </label><br>
                        <div class="list-icon">
                            <a href="#" data-toggle="tooltip" title="Follow on facebook"><i class="fa-brands fa-facebook" style="color: #a992e6; margin-right: 10px; font-size: 30px;"></i></a>
                            <a href="#" data-toggle="tooltip" title="Follow on instagram"><i class="fa-brands fa-instagram" style="color: #a992e6; margin-right: 10px; font-size: 30px;"></i></a>
                            <a href="#" data-toggle="tooltip" title="Follow on twitter><i class="fa-brands fa-twitter" style="color: #a992e6; margin-right: 10px; font-size: 30px;"></i></a>
                            <a href="#" data-toggle="tooltip" title="Follow on pinterest"><i class="fa-brands fa-square-pinterest" style="color: red; margin-right: 10px; font-size: 30px;"></i></a>
                            <a href="#" data-toggle="tooltip" title="Subscribe To RSS"><i class="fa-solid fa-square-rss" style="color: #95a538; margin-right: 10px; font-size: 30px;"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <hr size="5px" color="#FFF" style="margin-top: 40px;">
            </div>
        </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="submit-div col-lg-4 col-md-6 col-12 d-flex align-items-center mb-3">
                        <span style="font-weight: 450; color: #FFF;">ĐĂNG KÝ NHẬN THÔNG TIN</span>
                    </div>
                    <div class="email-form-div col-lg-4 col-md-6 col-12 d-flex align-items-center mb-3">
                        <form action="#" method="get" class="email-form">
                            <input type="email" name="email" id="email" placeholder="Email...">
                            <input type="submit" id="submit-form-email" value="Đăng ký">
                        </form>
                    </div>
                    <div class="payment-icon col-lg-4 col-md-12 col-12 align-items-center mb-3">
                        <img src="{{asset('Images/payment1.png')}}" alt="payment">
                        <img src="{{asset('Images/payment2.png')}}" alt="payment">
                        <img src="{{asset('Images/payment3.png')}}" alt="payment">
                        <img src="{{asset('Images/payment4.png')}}" alt="payment">
                        <img src="{{asset('Images/payment5.png')}}" alt="payment">
                    </div>
                </div>
            </div>
        </div>
        <div class="license">
            <span>© Bản quyền thuộc về Thiết kế website MonaMedia Mona Media</span>
        </div>
        <script>
                $(document).ready(function(){
                    $("#btn-login").click(function(){
                        $("#login-form").modal();
                    });
                });
        </script>
        <!-- bootstrap & jquery, font-awesome -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="{{ asset('JS/index.js') }}"></script>
    </footer>
</body>
</html>

