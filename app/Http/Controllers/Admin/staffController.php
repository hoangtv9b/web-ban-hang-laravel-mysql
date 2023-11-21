<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class staffController extends Controller
{
    public function index(){
        return view('LayoutAdmin.manager', ['title' => 'Quản lý nhân viên']);
    }
}
