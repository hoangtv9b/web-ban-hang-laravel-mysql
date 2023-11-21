@extends('Layouts.app')
@section('content')
<div class="container-fluid">
    <div class="container">
        <div class="row p-3 justify-content-between">
            <h5>TIN TỨC</h5>
            <div class="filter-sort-wrap d-flex align-items-center">
                <a href="#"><i class="fa-solid fa-filter"></i><span class="mr-3">BỘ LỌC</span></a>
                <span>Sắp xếp theo: </span>
                <select name="soft-post" class="">
                    <option value="">Ngày gần nhất</option>
                    <option value="">Cũ nhất</option>
                    <option value="">Nhiều lượt xem nhất</option>
                </select>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">
    <div class="container">
        <div class="row">
            @foreach ($allPost as $allPosts)
                <div class="col-md-3 col-lg-3 col-6 my-3">
                    <div class="card post-wrap">
                        <img class="img-product" style="object-fit: cover; object-position: center;" src="{{ $allPosts->images }}" alt="title block">
                        <div class="card-body">
                            <a href="{{ route('post', $allPosts->slug) }}"><h5 class="card-title">{{ $allPosts->title }}</h5></a>
                            {!! $allPosts->content !!}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
