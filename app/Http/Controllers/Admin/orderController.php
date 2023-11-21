<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class orderController extends Controller
{
    public function index(){
        return view('LayoutAdmin.order', ['title'=>'quản lý đơn hàng']);
    }
}
