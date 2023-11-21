<?php

namespace App\Http\Controllers;
use App\Models\Products;
use App\Models\Post;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $allProduct = Products::all();
        $allPost = Post::all();
        return view('home', ['title'=>'Chào mừng đến với Xshop, shop bán lẻ giày uy tín, chất lượng', 'allProduct' => $allProduct, 'allPost' => $allPost]);
    }
    public function introduce(){
        return view('introduce', ['title'=>'Về chúng tôi']);
    }
    public function contact(){
        return view('contact', ['title'=>'Liên hệ với chúng tôi']);
    }
    public function woman(){
        $woman = Products::where('category', '=', 'Giày nữ')->get();
        $allProduct = Products::all();
        return view('woman', ['title'=>'Khám phá những mẫu giày dép, phụ kiện dành cho nữ', 'woman' => $woman, 'allProduct' => $allProduct]);
    }
    public function man(){
        $man = Products::where('category', '=', 'Giày nam')->get();
        return view('man', ['title'=>'Khám phá những mẫu giày dép, phụ kiện dành cho nam', 'man' => $man]);
    }
    public function children(){
        $children = Products::where('category', '=', 'Giày trẻ em')->get();
        return view('children', ['title'=>'Khám phá những mẫu giày dép, phụ kiện dành cho trẻ em', 'children' => $children]);
    }
    public function accessory(){
        $accessory = Products::where('category', '=', 'Phụ kiện khác')->get();
        return view('accessory', ['title'=>'Phụ kiện khác', 'accessory' => $accessory]);
    }
    public function posts(){
        $allPost = Post::all();
        return view('posts', ['title' => 'Danh sách tin tức', 'allPost' => $allPost]);
    }
}
