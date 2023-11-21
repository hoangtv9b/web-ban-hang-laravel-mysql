@extends('admin.app')
@section('content')
    <div class="content-admin col-md-10 p-0 d-flex flex-column">
        <div class="content-admin-nav d-block p-3">
            <div class="app-title d-flex justify-content-between p-2">
                <span>Danh sách sản phẩm / sửa thông tin sản phẩm</span>
                <span id="time"></span>
            </div>
            <div class="table-product mt-3 mb-3 p-2 d-flex flex-column">
                <div class="title-table-add-product">
                    <span>sửa thông tin sản phẩm</span>
                </div>
                <div class="row element-button d-flex p-3 m-1">
                    <div class="btn-element"><button data-toggle="modal" data-target="#addSupplier" class="btn btn-success btn-sm"><i class="fa-solid fa-folder-plus"></i>Thêm nhà cung cấp</button></div>
                    <div class="btn-element"><button data-toggle="modal" data-target="#addCategoryForm" class="btn btn-primary btn-sm"><i class="fa-solid fa-folder-plus"></i>Thêm danh mục</button></div>
                </div>
                <!-- form add category -->
                <div id="addCategoryForm" class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title">Thêm danh mục sản phẩm</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="/admin/add-category" method="post">
                                @csrf
                                    <div class="form-group">
                                        <input type="text" name="input-category" placeholder="Thêm danh mục sản phẩm" class="form-control">
                                    </div>
                                    <div class="form-group">
                                       <button type="submit" class="btn btn-primary">Tải lên</button>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- form add supplier -->
                <div class="modal" id="addSupplier">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Thêm nhà cung cấp</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="/admin/add-supplier" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="input-add-supplier" placeholder="Thêm nhà cung cấp" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary">Tải lên</button>
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <form enctype="multipart/form-data" method="post" onsubmit="return checkAddProduct()">
                    <div class="add-product-form d-flex mt-2">
                    @csrf
                    @method('PUT')
                        <div class="column-add-product col-md-3 d-flex flex-column">
                            <span>Mã sản phẩm</span>
                            <input type="number" name="code-product" id="code-product-add" value="{{ $products->codeProduct }}" required>
                            <span>Danh mục sản phẩm</span>
                            <select name="category-product" id="">
                                @foreach ($categoryProduct as $categoryProducts)
                                    <option value="{{ $categoryProducts->category }}">{{ $categoryProducts->category }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="column-add-product col-md-3 d-flex flex-column">
                            <span>Tên sản phẩm</span>
                            <input type="text" name="name-product" id="name-product-add" value="{{ $products->nameProduct }}" required>
                            <span>Nhà cung cấp</span>
                            <select name="supplier" id="">
                                @foreach ($supplierProduct as $supplierProducts)
                                    <option value="{{ $supplierProducts->supplier }}">{{ $supplierProducts->supplier }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="column-add-product col-md-3 d-flex flex-column">
                            <span>Số lượng</span>
                            <input type="text" name="quantity-product" id="quantity-product-add" value="{{ $products->quantity }}" required>
                            <span>Giá bán</span>
                            <input type="text" name="price-product" id="price-product-add" value="{{ $products->prmPrice }}" required>
                        </div>
                        <div class="column-add-product col-md-3 d-flex flex-column">
                            <span>Tình trạng</span>
                            <select name="status-product" id="">
                                <option value="còn hàng">Còn hàng</option>
                                <option value="hết hàng">Hết hàng</option>
                            </select>
                            <span>Giá vốn</span>
                            <input type="text" name="prm-product" id="cost-product-add" value="{{ $products->price }}" required>
                        </div>
                    </div>
                    <div class="add-image-product mt-2 d-flex flex-column">
                        <span class="mb-2">Ảnh đại diện sản phẩm</span>
                        <input type="file" name="file-image" id="product-avatar" onchange="previewImage(event)" accept="image/jpeg,image/png,image/gif" required>
                        <div id="preview" class="image-preview"><img src="{{ $products->avtProduct }}" class="preview-image" alt=""></div>
                        <span class="mb-2 mt-4">Ảnh chi tiết sản phẩm <br> (Ấn giữ Shift để chọn nhiều ảnh)</span>
                        <input type="file" name="file-images[]" multiple onchange="previewImages(event)" id="image-product-add" accept="image/jpeg,image/png,image/gif" required>
                        <div id="preview-container" class="preview-container"></div>
                        <span class="my-5">Ảnh sản phẩm đã tải lên</span>
                        <div class="preview-container">
                        @foreach ($imageProduct as $imgProduct)
                            <img src="{{ $imgProduct->linkImage }}" class="preview-image" alt="">
                        @endforeach
                        </div>
                    </div>
                    <div class="image-product-edit container d-flex flex-wrap mt-3">
                    </div>
                    <div class="add-detail-product col mt-2 d-flex flex-column">
                        <span class="mb-2">Mô tả sản phẩm</span>
                        <textarea name="detail-product" id="detail-product-add" cols="100%" rows="5">{{ $products->detailProduct }}</textarea>
                    </div>
                    <div class="directional col-md-12 d-flex justify-content-end">
                        <input type="submit" name="submit-add-product" value="Lưu lại" class="save-add-product">
                        <a href="product-admin/" class="exit-add-product">Hủy bỏ</a>
                    </div>
                </form>
                <style>
                    .preview-image {
                        max-height: 150px;
                        {{-- object-fit: cover;
                        object-position: center; --}}
                        margin: 5px;
                    }
                </style>
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
                    //check du lieu dc them vao
                    /* function checkAddProduct(){
                    var nameProduct = document.getElementById("name-product-add").value;
                    var codeProduct = document.getElementById("code-product-add").value;
                    var priceProduct = document.getElementById("price-product-add").value;
                    var costProduct = document.getElementById("cost-product-add").value;
                    var quantityProduct = document.getElementById("quantity-product-add").value;
                    var detailProduct = document.getElementById("detail-product-add").value;
                    var avtProduct = document.getElementById("product-avatar").value;
                    var imageProduct = document.getElementById("image-product-add").value;
                    if(nameProduct == "" || codeProduct == "" || priceProduct == "" || costProduct == ""
                    || detailProduct == "" || quantityProduct == "" || imageProduct == "" || avtProduct == ""){
                        alert('Vui lòng nhập đủ thông tin!');
                        return false;
                        }
                    return true;
                    } */
                </script>
            </div>
        </div>
    </div>
@endsection
