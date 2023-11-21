<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\homeController;
use App\Http\Controllers\detailProductController;
use App\Http\Controllers\postContentController;
use App\Http\Controllers\searchController;
use App\Http\Controllers\storeController;
use App\Http\Controllers\cartController;
use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\Admin\dashboardController;
use App\Http\Controllers\Admin\productController;
use App\Http\Controllers\Admin\staffController;
use App\Http\Controllers\Admin\postController;
use App\Http\Controllers\Admin\settingController;
use App\Http\Controllers\Admin\posController;
use App\Http\Controllers\Admin\customersController;
use App\Http\Controllers\Admin\orderController;
use App\Models\User;
use App\Models\Post;
use App\Models\Products;
//danh muc menu
Route::get('/',[homeController::class,'index'])->name('/');
Route::get('/gioi-thieu/', [homeController::class, 'introduce'])->name('gioi-thieu');
Route::get('/lien-he/', [homeController::class, 'contact'])->name('lien-he');
Route::get('/nu/', [homeController::class, 'woman'])->name('nu');
Route::get('/nam/', [homeController::class, 'man'])->name('nam');
Route::get('/tre-em/', [homeController::class, 'children'])->name('tre-em');
Route::get('/phu-kien/', [homeController::class, 'accessory'])->name('accessory');
Route::get('/tin-tuc/', [homeController::class, 'posts'])->name('posts');
//admin
Route::get('/admin', [adminController::class, 'login'])->name('loginAdmin');
Route::get('/admin/verification-email/', [adminController::class, 'resetPassword'])->name('resetPasswordAdmin');
Route::post('/admin/verification-email/', [adminController::class, 'verificationEmail']);
Route::get('/admin/log-out/', [adminController::class, 'destroy'])->middleware('auth');
Route::post('/admin/login', [adminController::class, 'store']);
Route::get('/admin/dashboard', [dashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/admin/cap-nhat-thong-tin-san-pham/{id}', [productController::class, 'update'])->name('editProduct')->middleware('auth');
Route::put('/admin/cap-nhat-thong-tin-san-pham/{id}', [productController::class, 'edit'])->middleware('auth');
Route::get('/admin/them-san-pham', [productController::class, 'create'])->name('addProduct')->middleware('auth');
Route::post('/admin/addProduct', [productController::class, 'store']);
Route::delete('admin/delete/{id}', [productController::class, 'deleteProduct'])->name('deleteProduct');
Route::get('/admin/POS', [posController::class, 'index'])->name('pos')->middleware('auth');
Route::get('/admin/quan-ly-khach-hang', [customersController::class, 'index'])->name('customers')->middleware('auth');
Route::get('/admin/quan-ly-nhan-vien', [staffController::class, 'index'])->name('employManager')->middleware('auth');
Route::get('/admin/quan-ly-bai-viet', [postController::class, 'index'])->name('managerPosts')->middleware('auth');
Route::get('/admin/them-bai-viet', [postController::class, 'create'])->name('addPost')->middleware('auth');
Route::post('/admin/apiPost', [postController::class, 'processForm'])->name('processFormAddPost')->middleware('auth');
Route::get('/admin/quan-ly-san-pham', [productController::class, 'index'])->name('products')->middleware('auth');
Route::get('/admin/cài-dat-he-thong', [settingController::class, 'index'])->name('setting')->middleware('auth');
Route::get('/admin/POS', [posController::class, 'index'])->name('pos')->middleware('auth');
Route::get('/admin/quan-ly-don-hang', [orderController::class, 'index'])->name('order')->middleware('auth');
// them danh muc va nha cung cap
Route::post('/admin/add-category', [productController::class, 'addCategory'])->name('addCategory')->middleware('auth');
Route::post('/admin/add-supplier', [productController::class, 'addSupplier'])->name('addSupplier')->middleware('auth');
//thong tin san pham
Route::get('/{slug}', [App\Http\Controllers\detailProductController::class, 'show'])->name('detailProduct');
// Auth::routes();
//mo trang gio hang
Route::get('/cart-product', [cartController::class, 'index'])->name('cart');
//them san pham vao gio hang
Route::get('/cart/{id}', [cartController::class, 'addToCart'])->name('addToCart');
//xoa san pham khoi gio hang
Route::get('/cart/delete/{id}', [cartController::class, 'deleteToCart'])->name('deleteToCart');
//tim kiem
Route::post('/tim-kiem', [searchController::class, 'search'])->name('search');
//cua hang
Route::get('/cua-hang', [storeController::class, 'index'])->name('store');
//nọi dung tin tức
Route::get('/tin-tuc/{slug2}', [App\Http\Controllers\postContentController::class, 'show'])->name('post');
