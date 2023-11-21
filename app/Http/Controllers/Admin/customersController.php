<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class customersController extends Controller
{
    public function index(){
        return view('LayoutAdmin.customers', ['title' => 'Quản lý khách hàng']);
    }
}
