<?php

namespace App\Http\Controllers;
use App\Models\Products;
use Illuminate\Http\Request;
class searchController extends Controller
{
    public function search(Request $request){
        $query = $request->input('search');
        $results = Products::where('nameProduct', 'like', '%'.$query.'%')->get();
        return view('search', ['title'=>'tìm kiếm', 'results'=> $results]);
    }
}
