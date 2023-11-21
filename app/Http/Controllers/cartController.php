<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;
use Session;
class cartController extends Controller
{
    public function index(){
        return view('cart', ['title' => 'giỏ hàng của bạn']);
    }
    public function addToCart($id){
        $product = Products::find($id);
        $cart = Session::has('cart') ? Session::get('cart') : [];
        if (array_key_exists($id, $cart)) {
            $cart[$id]['quantity']++;
        }else{
            $cart[$id] = [
                'product' => $product,
                'quantity' => 1
            ];
        }
        Session::put('cart', $cart);
        return redirect()->back();
    }
    public function deleteToCart($id){
        $cart = Session::has('cart') ? Session::get('cart') : [];
        if (array_key_exists($id, $cart)) {
            // Nếu có, xóa sản phẩm khỏi giỏ hàng
            unset($cart[$id]);

            // Lưu giỏ hàng đã xóa từ session
            Session::put('cart', $cart);
        }
        return redirect()->back();
    }
}
