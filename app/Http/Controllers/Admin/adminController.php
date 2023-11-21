<?php
namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Auth;
use DB;
class adminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $user;
    private $avatar;
    private $data;
    public function __construct(){

    }

    /**
     * Show the form for creating a new resource.
     */
    public function login()
    {
        return view('admin.login', ['title' => 'Đăng nhập Admin']);
    }
    public function resetPassword(){
        return view('admin.resetPassword', ['title' => 'Đặt lại mật khẩu']);
    }
    public function verificationEmail(Request $request){
        dd($request->all());
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->data = ['email' => $request->input('accountAdmin'), 'password' => $request->input('pwAdmin')];
        if(Auth::attempt($this->data)){
            $this->user = Auth::user()->name;
            $this->avatar = Auth::user()->avatar;
            Session::put('nameAdmin', $this->user);
            Session::put('avatar', $this->avatar);
            return redirect()->route('dashboard');
        }else{
            return redirect()->back();
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        Auth::logout();
        return redirect()->route('loginAdmin');
    }
}
