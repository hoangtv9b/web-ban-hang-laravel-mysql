@extends('admin.app')
@section('content')
<div class="content-admin col-md-10 p-0">
        <div class="content-admin-nav d-block p-3">
            <div class="app-title d-flex justify-content-between p-2">
                <span>Thêm bài viết</span>
                <span id="time"></span>
            </div>
            @if (Session::has('success'))
                <script>alert('{{ Session::get("success") }}')</script>
            @endif
            <div class="table-product table-post my-3 px-4">
                <div class="col-md-8">
                    <h5 class="pt-3">Thêm tiêu đề</h5>
                    <form enctype="multipart/form-data" method="post" onsubmit="return checkAddPost()" action="/admin/apiPost">
                        @csrf
                        <input type="text" required class="form-control" name="title-post-add" placeholder="Thêm tiêu đề" id="title-post-add" required>
                        <hr>
                        <h5>Thêm ảnh</h5>
                        <input type="file" name="img-post-add" onchange="previewImage(event)" accept="image/jpeg,image/png,image/gif" required>
                        {{-- hien thi anh dc chon --}}
                        <div id="preview" class="image-preview"></div>
                        <style>
                            .preview-image {
                                max-height: 150px;
                                margin: 5px;
                            }
                        </style>
                        <hr>
                        <div ng-app="textAngularTest" ng-controller="wysiwygeditor" class="">
                            <button ng-click="disabled = !disabled" unselectable>Disable text-angular Toggle</button>
                            <div text-angular="text-angular" name="htmlcontent" ng-model="htmlcontent" ta-disabled='disabled'></div>
                            <textarea name="content-post-add" style="display: none;" id="content-post" class="my-3" ng-model="htmlcontent" style="width: 100%"></textarea>
                        </div>
                    <style>
                        .ta-editor {
                            min-height: 300px;
                            height: auto;
                            overflow: auto;
                            font-family: inherit;
                            font-size: 100%;
                            margin-bottom: 20px;
                            }
                    </style>
                    <script>
                        function previewImage(event) {
                        var input = event.target;
                        var preview = document.getElementById("preview");
                        preview.innerHTML = "";
                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            var img = new Image();
                            reader.onload = function(e) {
                                img.src = e.target.result;
                                img.classList.add("preview-image");
                                img.classList.add("overflow-hidden");
                                preview.appendChild(img);
                            }
                        reader.readAsDataURL(input.files[0]);
                        }
                    }
                    </script>
                </div>
                <div class="col-md-4">
                    <div class="establish-post-section">
                        <h5 class="pt-3">Đăng bài viết</h5>
                        <hr>
                        <div class="save-and-show-wrap py-2 d-flex justify-content-between">
                            <a href="#" class="btn btn-primary"><i class="fa-solid fa-floppy-disk mr-2"></i>Lưu bản nháp</a>
                            <a href="#" class="btn btn-success"><i class="fa-solid fa-eye mr-2"></i>Xem thử</a>
                        </div>
                        <div class="status-add-post py-2">
                            <span>Trạng thái: </span> <span>Đã hoàn thành</span>
                        </div>
                        <div class="security-level py-2">
                            <span>Hiển thị: </span> <span>Công khai</span>
                        </div>
                        <div class="py-2">
                            <span>Đăng: </span><span>ngay lập tức</span>
                        </div>
                        <div class="delete-or-post d-flex justify-content-between py-2">
                            <a href="#">Thêm vào thùng rác</a>
                            <button type="submit" class="btn btn-primary"><i class="fa-solid fa-upload mr-2"></i>Đăng bài</button>
                        </div>
                    </div>
                    <div class="catalog-management pt-3">
                        <h5 class="pt-3">Danh mục</h5>
                        <hr>
                        <div class="post-category-wrap">
                            <select name="category-post" id="" class="mb-3">
                                <option value="ăn uống">Ăn uống</option>
                                <option value="ăn uống">Ăn uống</option>
                                <option value="ăn uống">Ăn uống</option>
                                <option value="ăn uống">Ăn uống</option>
                                <option value="ăn uống">Ăn uống</option>
                                <option value="ăn uống">Ăn uống</option>
                                <option value="ăn uống">Ăn uống</option>
                            </select>
                            <a href="#" class="">Thêm danh mục</a>
                        </div>
                        <hr>
                        <h4>Thẻ</h4>
                        <div class="add-tag-wrap">
                            <input type="text" name="" id="" class="form-control my-2">
                            <p>Phân cách các thẻ bằng dấu phẩy</p>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function checkAddPost(){
        var contentPost = document.getElementById('content-post').value;
        if(contentPost == ""){
            alert('Vui lòng nhập đủ thông tin!');
            return false;
        }
        return true;
    }
</script>
@endsection
