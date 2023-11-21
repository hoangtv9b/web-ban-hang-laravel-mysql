@extends('admin.app')
@section('content')
        <div class="content-admin col-md-10 p-0 d-flex flex-column">
            <div class="content-admin-nav d-block p-3">
                <div class="app-title d-flex justify-content-between p-2">
                    <span>Danh sách sản phẩm</span>
                    <span id="time"></span>
                </div>
                @if (Session::has('error'))
                    <script>alert('{{ Session::get("error") }}')</script>
                @endif
                <div class="table-product my-3 p-3">
                    <div class="row element-button d-flex m-1 p-3">
                        <div class="btn-element"><a href="{{ route('addProduct') }}" class="btn btn-warning btn-sm"><i class="icon-button fa-solid fa-plus"></i>Tạo mới sản phẩm</a></div>
                        <div class="btn-element"><a href="#" class="btn btn-primary btn-sm"><i class="icon-button fa-solid fa-file-circle-plus"></i>Tải từ file</a></div>
                        <div class="btn-element"><a href="#" class="btn btn-info btn-sm"><i class="icon-button fa-solid fa-print"></i>In dữ liệu</a></div>
                        <div class="btn-element"><a href="#" class="btn btn-dark btn-sm"><i class="icon-button fa-solid fa-trash-can"></i>Xóa tất cả</a></div>
                    </div>
                    <div class="row datatables-length p-3">
                        <div class="data-length m-3 d-flex justify-content-between align-items-center">
                            <div class="show-data-length">
                                <label for="" class="d-flex align-items-center">
                                    Hiện
                                    <select name="quantity-data-length" style="width: 70px; height: 40px; margin: 0px 5px;">
                                        <option value="">10</option>
                                        <option value="">25</option>
                                        <option value="">50</option>
                                        <option value="">100</option>
                                    </select>
                                    sản phẩm
                                </label>
                            </div>
                            <div class="search-product d-flex align-items-center">
                                <span class="title-search-product mr-2">Tìm kiếm: </span>
                                <form action="#" method="get" class="searchform-product">
                                    <input type="search" name="search-product" id="" placeholder="Tìm kiếm">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">
                        <table border="1px" class="table table-bordered">
                            <tr class="row-title">
                                <td><input type="checkbox" name="" id="checkAll"></td>
                                <td>Mã sản phẩm</td>
                                <td>Tên sản phẩm</td>
                                <td>Nhà cung cấp</td>
                                <td>Ảnh</td>
                                <td>Số lượng</td>
                                <td>Tình trạng</td>
                                <td>Giá tiền</td>
                                <td>Danh mục</td>
                                <td>Chức năng</td>
                            </tr>
                            <style>
                                .row-product .column-product{
                                    vertical-align: middle;
                                }
                            </style>
                            @foreach ($allProducts as $products)
                                <tr class="row-product">
                                    <td class="column-product"><input type="checkbox" name="" id=""></td>
                                    <td class="column-product">{{ $products->codeProduct}}</td>
                                    <td class="column-product">{{ $products->nameProduct }}</td>
                                    <td class="column-product">{{ $products->supplier }}</td>
                                    <td class="column-product"><img width="90px" height="auto" src="{{ $products->avtProduct }}" alt=""></td>
                                    <td class="column-product">{{ $products->quantity }}</td>
                                    <td class="column-product"><span class="status-product align-items-center">{{ $products->status }}</span></td>
                                    <td class="column-product">{{ $products->price }} đ</td>
                                    <td class="column-product">{{ $products->category }}</td>
                                    <td class="column-product"">
                                        <a href="{{ route('editProduct', ['id' => $products->id]) }}" class="icon-edit"><i class="fa-solid fa-pen-to-square"></i></a>
                                        <form id="delete-form" class="" action="{{ route('deleteProduct', ['id' => $products->id]) }}" style="display: inline-block" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button class="icon-delete" onclick="return deleteProduct()"><i class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            <script>
                                function deleteProduct(){
                                    let success = confirm('Bạn có muốn xóa sản phẩm này không?');
                                    if(success == true){
                                        return true;
                                    }else{
                                        return false;
                                    }
                                }
                                $(document).ready(function(){
                                    $("#checkAll").change(function () {
                                        $("input:checkbox").prop('checked', $(this).prop("checked"));
                                    });
                                });
                            </script>
                        </table>
                        <div class="paging d-flex justify-content-end">
                            {{ $allProducts->links('pagination::bootstrap-4') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
