@extends('admin.app')
@section('content')
<div class="content-admin col-md-10 p-0 d-flex flex-column">
        <div class="content-admin-nav d-block p-3">
            @if (Session::has('success'))
                <script>alert('{{ Session::get("success") }}')</script>
            @endif
            <div class="app-title d-flex justify-content-between p-2">
                <span>Danh sách sản phẩm / Thêm sản phẩm</span>
                <span id="time"></span>
            </div>
            <div class="table-product mt-3 mb-3 p-2 d-flex flex-column">
                <div class="title-table-add-product">
                    <span>Tạo mới sản phẩm</span>
                </div>
                <div class="row element-button d-flex p-3 m-1">
                    <div class="btn-element"><a href="/admin/add-product/" class="btn btn-success btn-sm"><i class="fa-solid fa-folder-plus"></i>Thêm nhà cung cấp</a></div>
                    <div class="btn-element"><a href="#" class="btn btn-primary btn-sm"><i class="fa-solid fa-folder-plus"></i>Thêm danh mục</a></div>
                </div>
                <form enctype="multipart/form-data" method="post" onsubmit="return checkAddProduct()" action="/admin/addProduct">
                @csrf
                <div class="add-product-form d-flex mt-2">
                    <div class="column-add-product col-md-3 d-flex flex-column">
                        <span>Mã sản phẩm</span>
                        <input type="number" name="code-product" id="code-product-add" required>
                        <span>Danh mục</span>
                        <select name="category-product" id="">
                            <option value="Giày nam">Giày nam</option>
                            <option value="Giày nữ">Giày nữ</option>
                            <option value="Giày trẻ em">Giày trẻ em</option>
                        </select>
                    </div>
                    <div class="column-add-product col-md-3 d-flex flex-column">
                        <span>Tên sản phẩm</span>
                        <input type="text" name="name-product" id="name-product-add" required>
                        <span>Nhà cung cấp</span>
                        <select name="supplier" id="">
                            <option value="Nike">Nike</option>
                            <option value="Adidas">Adidas</option>
                            <option value="balenciaga">balenciaga</option>
                        </select>
                    </div>
                    <div class="column-add-product col-md-3 d-flex flex-column">
                        <span>Số lượng</span>
                        <input type="number" name="quantity-product" id="quantity-product-add" required>
                        <span>Giá bán</span>
                        <input type="number" name="price-product" id="price-product-add" required>
                    </div>
                    <div class="column-add-product col-md-3 d-flex flex-column">
                        <span>Tình trạng</span>
                        <select name="status-product" id="">
                            <option value="còn hàng">Còn hàng</option>
                            <option value="hết hàng">Hết hàng</option>
                        </select>
                        <span>Giá vốn</span>
                        <input type="number" name="prm-product" id="cost-product-add" required>
                    </div>
                </div>
                <div class="add-image-product mt-2 d-flex flex-column">
                    <span class="mb-2">Ảnh đại diện sản phẩm</span>
                    <input type="file" name="file-image" id="product-avatar" onchange="previewImage(event)" accept="image/jpeg,image/png,image/gif" required>
                    <div id="preview" class="image-preview"></div>
                    <span class="mb-2 mt-4">Ảnh chi tiết sản phẩm <br> (Ấn giữ Shift để chọn nhiều ảnh)</span>
                    <input type="file" name="file-images[]" multiple onchange="previewImages(event)" id="image-product-add" accept="image/jpeg,image/png,image/gif" required>
                    <div id="preview-container" class="preview-container"></div>
                </div>
                <style>
                    .preview-image {
                        max-height: 150px;
                        margin: 5px;
                    }
                </style>
                <div class="add-detail-product col mt-4 d-flex flex-column">
                    <span class="mb-2">Mô tả sản phẩm</span>
                    <textarea name="detail-product" id="detail-product-add" cols="100%" rows="5" required></textarea>
                </div>
                <div class="directional col-md-12 d-flex justify-content-end">
                    <input type="submit" name="submit-add-product" value="Lưu lại" class="save-add-product">
                    <a href="{{ route('products') }}" class="exit-add-product">Hủy bỏ</a>
                </div>
                </form>
                <script>
                    //hien thi anh dc chon
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
                    // hien thi loat hinh anh
                    function previewImages(event) {
                        var input = event.target;
                        var previewContainer = document.getElementById("preview-container");
                        previewContainer.innerHTML = ""; // Xóa nội dung hiện có của vùng hiển thị trước khi hiển thị ảnh mới
                        if (input.files && input.files.length > 0) {
                            for (var i = 0; i < input.files.length; i++) {
                                var reader = new FileReader();
                                reader.onload = function(e) {
                                    var img = document.createElement("img");
                                    img.src = e.target.result;
                                    img.classList.add("preview-image");
                                    img.classList.add("overflow-hidden");
                                    previewContainer.appendChild(img);
                                }
                                reader.readAsDataURL(input.files[i]);
                            }
                        }
                    }
                </script>
            </div>
        </div>
    </div>
</div>
@endsection
