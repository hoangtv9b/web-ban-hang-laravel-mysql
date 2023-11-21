<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use App\Models\imageProduct;
use App\Models\categoryProduct;
use App\Models\suppilerProduct;
class productController extends Controller
{
    public function index(){
        $allProduct = Products::paginate(7);
        return view('LayoutAdmin.product', ['title' => 'Quản lý sản phẩm', 'allProducts' => $allProduct]);
    }
    public function create(){
        return view('LayoutAdmin.addProduct', ['title' => 'Thêm sản phẩm']);
    }
    public function addCategory(Request $request){
        $addCategoryProduct = categoryProduct::create([
            'category' => $request->input('input-category')
        ]);
        Session()->flash('success', 'Tải lên danh mục sản phẩm thành công');
        return redirect()->back();
    }
    public function addSupplier(Request $request){
        $addSupplier = suppilerProduct::create([
            'supplier' => $request->input('input-add-supplier')
        ]);
        Session()->flash('success', 'Tải lên nhà cung cấp sản phẩm thành công');
        return redirect()->back();
    }
    public function store(Request $request){
        // lưu ảnh đại diện sản phẩm thư muc
        if($request->hasFile('file-image')){
            $image = $request->file('file-image');
            if ($image->isValid()){
                $path = $image->move(public_path('Images/product'), $image->getClientOriginalName());
                $url = asset('Images/product/' . $image->getClientOriginalName());
            }
        }
        // lưu thông tin sản phẩm vào database
        $product = Products::create([
            'codeProduct' => $request->input('code-product'),
            'nameProduct' => $request->input('name-product'),
            'slug' => Str::slug($request->input('name-product')),
            'category' => $request->input('category-product'),
            'supplier' => $request->input('supplier'),
            'quantity' => $request->input('quantity-product'),
            'status' => $request->input('status-product'),
            'price' => $request->input('price-product'),
            'prmPrice' => $request->input('prm-product'),
            'detailProduct' => $request->input('detail-product'),
            'avtProduct' => $url
        ]);
        // lưu ảnh chi tiết sản phẩm vào thư mục
                $images = $request->file('file-images');
                foreach ($images as $image) {
                    $imageName = $image->getClientOriginalName();
                    $image->move(public_path('Images/product'), $imageName);
                    $linkImage = asset('Images/product/'.$imageName);
                    $product->images()->create([
                        'linkImage' => $linkImage
                    ]);
                }
        Session()->flash('success', 'Tải lên sản phẩm thành công');
        return redirect()->back();
    }
    public function show(){

    }
    public function update($id){
        $product = Products::find($id);
        $categoryProduct = categoryProduct::all();
        $supplierProduct = suppilerProduct::all();
        $imageProducts = $product->images;
        return view('LayoutAdmin.editProduct', ['title' => 'Cập nhật thông tin sản phẩm', 'products' => $product,
        'imageProduct' => $imageProducts, 'categoryProduct' => $categoryProduct, 'supplierProduct' => $supplierProduct]);
    }
    public function edit(Request $request, $id){
        $product = Products::find($id);
        $oldImages = $product->images()->pluck('linkImage')->all();
        foreach($oldImages as $oldImage){
            $path = parse_url($oldImage, PHP_URL_PATH);

        }
        //lưu ảnh đại diện sản phẩm
        if($request->hasFile('file-image')){
            $image = $request->file('file-image');
            if ($image->isValid()){
                $path = $image->move(public_path('Images/product'), $image->getClientOriginalName());
                $url = asset('Images/product/' . $image->getClientOriginalName());
            }
        }
        $product->update([
            'codeProduct' => $request->input('code-product'),
            'nameProduct' => $request->input('name-product'),
            'slug' => Str::slug($request->input('name-product')),
            'category' => $request->input('category-product'),
            'supplier' => $request->input('supplier'),
            'quantity' => $request->input('quantity-product'),
            'status' => $request->input('status-product'),
            'price' => $request->input('price-product'),
            'prmPrice' => $request->input('prm-product'),
            'detailProduct' => $request->input('detail-product'),
            'avtProduct' => $url
        ]);
        //cập nhật lại toàn bộ ảnh sản phẩm
        $images = $request->file('file-images');
            foreach ($images as $image) {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path('Images/product'), $imageName);
                $linkImage = asset('Images/product/'.$imageName);
                $product->images()->create([
                    'linkImage' => $linkImage
                ]);
            }
        Session()->flash('success', 'Cập nhật thông tin sản phẩm thành công');
        return redirect()->back();
    }
    public function deleteProduct($id){
        $product = Products::find($id);
        $product->delete();
        Session()->flash('error', 'Xóa sản phẩm thành công');
        return redirect()->back();
    }
    public function destroy(){

    }
}
