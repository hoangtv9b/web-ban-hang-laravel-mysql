<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use DB;

class dashboardController extends Controller
{
    public function index(){
        return view('LayoutAdmin.dashboard', ['title' => 'Dashboard']);
    }
}
