<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="http://127.0.0.1:8000/">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Style.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/js/all.min.js" integrity="sha512-2bMhOkE/ACz21dJT8zBOMgMecNxx0d37NND803ExktKiKdSzdwn+L7i9fdccw/3V06gM/DBWKbYmQvKMdAA9Nw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/fontawesome.min.css" integrity="sha512-cHxvm20nkjOUySu7jdwiUxgGy11vuVPE9YeK89geLMLMMEOcKFyS2i+8wo0FOwyQO/bL8Bvq1KMsqK4bbOsPnA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/v5-font-face.min.css" integrity="sha512-H2YXTLk5bs3DqvCfOEFsHmsjKW/qLp8SqsqVuPVwZzA5WFudPvPJisFKba2Km3sZNNBapYsZjSMTmRVcfxb5yw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/brands.min.css" integrity="sha512-L+sMmtHht2t5phORf0xXFdTC0rSlML1XcraLTrABli/0MMMylsJi3XA23ReVQkZ7jLkOEIMicWGItyK4CAt2Xw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.3/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <title>{{ $title }}</title>
</head>
<body>
    <div class="admin-UI container-fluid d-flex justify-content-center align-items-center p-0">
        <div class="col-md-3 d-flex flex-column">
            <div class="logo-shop-nav d-flex justify-content-center">
                <a href="/"><img src="{{ asset('Images/xshop-light.png') }}" alt="logo-shop" class="logo-shop"></a>
            </div>
            <form name="form-login" method="post" class="form-login-admin" onsubmit="return check()" action="/admin/verification-email/">
                @csrf
                <div class="form-group">
                    <h3>Đặt lại mật khẩu</h3>
                </div>
                <div class="form-group">
                    <label for="pwd">Nhập email xác thực</label>
                    <input type="email" class="form-control" placeholder="Email" name="emailReceived" id="email-received-admin">
                </div>
                <button type="submit" class="btn btn-primary" name="submit-login-form">Xác nhận</button>
                <div id="error" class="mt-3"></div>
            </form>
            <div class="support-pasword  ml-3 mt-2 d-flex flex-column">
                <a href="/admin" class="support-pasword-link">Quay lại đăng nhập</a>
                <a href="/" class="support-pasword-link">Quay lại XSHOP</a>
            </div>
        </div>
    </div>
    <script>
        function check(){
            var u = document.getElementById("email-admin").value;
            var a = document.getElementById("password-admin").value;
            if (u=="" || a=="") {
                document.getElementById("error").innerHTML="Vui lòng điền đầy đủ thông tin!";
                return false;
            }
            return true;
        }
    </script>
</body>
</html>
