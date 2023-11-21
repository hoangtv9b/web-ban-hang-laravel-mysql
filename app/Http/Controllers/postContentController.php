<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use DaveJamesMiller\Breadcrumbs\Facades\Breadcrumbs;
class postContentController extends Controller
{
    public function index(){

    }
    public function show($slug2){
        $post = Post::where('slug', $slug2)->firstOrFail();
        $allPost = Post::paginate(3);
        return view('contentPost', ['title' => $post->title, 'post' => $post, 'allPost' => $allPost]);
    }
}
