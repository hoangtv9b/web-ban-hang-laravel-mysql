<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class posController extends Controller
{
    public function index(){
        return view('LayoutAdmin.pos', ['title' => 'POS bán hàng']);
    }
}
