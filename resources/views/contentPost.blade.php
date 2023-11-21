@extends('Layouts.app')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="navbar-post-background d-flex justify-content-center align-items-center">
            <img class="navbar-image" src="{{ $post->images }}" alt="navbar-image">
            <div class="navbar-post-wrap text-center">
                <h2 class="title-post">{{ $post->title }}</h2>
                <hr height="3px" style="background: white;">
                <div class="info-post-wrap">
                    <span>Đăng ngày </span><span>{{ $post->created_at }}</span>. <span>Tác giả </span><span></span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="row mx-3 my-5">
        <div class="col-md-3 co-lg-3 col-12">
            <h4>Tin tức mới nhất</h4>
            <div class="list-post-suggest pt-3">
                @foreach ($allPost as $allPosts)
                    <div class="card my-3">
                        <img src="{{ $allPosts->images }}" alt="image-post" class="">
                        <div class="card-body">
                            <a href="#" class="title-post"><h5>{{ $allPosts->title }}</h5></a>
                            <div class="content-post">{!! $allPosts->content !!}</div>
                        </div>
                    </div>
                @endforeach
                <div class="d-flex justify-content-center my-5">
                    <a href="/tin-tuc" class="see-all">xem tất cả</a>
                </div>
            </div>
        </div>
        <div class="col-md-9 col-lg-9 col-12 content-post-text">
            {!! $post->content !!}
        </div>
    </div>
</div>
@endsection
