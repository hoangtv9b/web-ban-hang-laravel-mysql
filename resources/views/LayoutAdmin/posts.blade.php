@extends('admin.app')
@section('content')
<div class="content-admin col-md-10 p-0">
        <div class="content-admin-nav d-block p-3">
            <div class="app-title d-flex justify-content-between p-2">
                <span>Quản lý bài viết</span>
                <span id="time"></span>
            </div>
            <div class="table-product my-3 p-3">
                <div class="row element-button d-flex m-2 p-3">
                    <div class="btn-element"><a href="{{ route('addPost') }}" class="btn btn-warning btn-sm"><i class="icon-button fa-solid fa-plus"></i>Thêm bài viết</a></div>
                    <div class="btn-element"><button class="btn btn-primary btn-sm" data-toggle="modal" data-target="#addCategoryPost"><i class="icon-button fa-solid fa-file-circle-plus"></i>Thêm danh mục bài viết</a></div>
                    <div class="btn-element"><a href="#" class="btn btn-dark btn-sm"><i class="icon-button fa-solid fa-trash-can"></i>Xóa tất cả</a></div>
                </div>
                <!-- form add category post -->
                <div id="addCategoryPost" class="modal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4>Thêm danh mục bài viết</h4>
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>
                            <div class="modal-body">
                                <form action="#" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <input type="text" name="category-post" class="form-control" placeholder="Thêm danh mục bài biết">
                                    </div>
                                    <button class="btn btn-primary">Tải lên</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="my-3">
                    <form action="#" method="get">
                        <div class="form-group">
                            <input type="search" name="search-post" placeholder="Tìm kiếm liên quan đến bài viết" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="row mx-2 my-3">
                    <table class="table table-striped">
                        <tr>
                            <td width="5%"><input type="checkbox" name="" id="checkAll"></td>
                            <td width="35%">Tiêu đề</td>
                            <td width="10%">Tác giả</td>
                            <td width="15%">Chuyên mục</td>
                            <td width="15%">Thẻ</td>
                            <td width="5%"><i class="fa-solid fa-message"></i></td>
                            <td width="15%">Ngày đăng</td>
                        </tr>
                        @foreach ($allPost as $allPosts)
                            <tr>
                                <td><input type="checkbox" name="" id=""></td>
                                <td><a href="#">{{ $allPosts->title }}</a></td>
                                <td><a href="#">haidv</a></td>
                                <td><a href="#">{{ $allPosts->categories }}</a></td>
                                <td><a href="#">Hạ Long</a></td>
                                <td><a href="#"><i class="fa-solid fa-message"></i></a></td>
                                <td>{{ $allPosts->created_at }}. Sửa đổi lần cuối {{ $allPosts->updated_at }}</td>
                            </tr>
                        @endforeach
                        <script>
                            $(document).ready(function(){
                                $("#checkAll").change(function () {
                                    $("input:checkbox").prop('checked', $(this).prop("checked"));
                                });
                            });
                        </script>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
