<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class settingController extends Controller
{
    public function index(){
        return view('LayoutAdmin.setting', ['title' => 'Cài đặt hệ thống']);
    }
}
