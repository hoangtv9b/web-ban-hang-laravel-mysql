<?php
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Trang chủ', route('/'));
});
Breadcrumbs::for('product', function($trail, $detailProduct){
    $trail->parent('home');
    $trail->push($detailProduct->nameProduct, route('detailProduct', $detailProduct->slug));
});

