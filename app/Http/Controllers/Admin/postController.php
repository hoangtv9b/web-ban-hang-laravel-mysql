<?php
namespace App\Http\Controllers\Admin;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class postController extends Controller
{
    public function index(){
        $allPost = Post::all();
        return view('LayoutAdmin.posts', ['title' => 'Quản lý bài viết', 'allPost' => $allPost]);
    }
    public function create(){
        return view('LayoutAdmin.addPost', ['title' => 'Thêm bài viết']);
    }
    public function processForm(Request $request){
        //tải ảnh lên server
        $url = '';
        if($request->hasFile('img-post-add')){
            $image = $request->file('img-post-add');
            if ($image->isValid()){
                $path = $image->move(public_path('Images/posts'), $image->getClientOriginalName());
                $url = asset('Images/posts/'.$image->getClientOriginalName());
            }
        }
        //lấy thông tin về ngày hiện tại
        $currentDate = Carbon::now();
        $formattedDate = $currentDate->format('Y:m:d H:i:s');
        //thêm thông tin bài viết vào database
        $postAdd = Post::create([
            'title' => $request->input('title-post-add'),
            'content' => $request->input('content-post-add'),
            'slug' => Str::slug($request->input('title-post-add')),
            'datePost' => $formattedDate,
            'images' => $url,
            'likes' => 1,
            'categories' => $request->input('category-post')
        ]);
        Session()->flash('success', 'Tải thông tin bài viết thành công');
        return redirect()->route('addPost');
    }
}
