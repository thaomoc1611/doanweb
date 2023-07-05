<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Service\ProductService;
use App\Models\Sanpham;
use App\Models\User;


class ProductController extends Controller
{

    protected $productService;
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }

    public function listProduct(){



        return view('HomePage',[
            'products'=>$this->productService->getAll(),
            'iphones'=>$this->productService->getIphone(),
        ]);
    }

    public function add(){
        return view('admin.themsanpham');
    }



    public function addPost(Request $request){
        //dd($request->input());
         $result = $this->productService->create($request);
         return redirect('/admin/index');
     }

     public function edit($product){
        $sp = Sanpham::where('maSP',$product)->first();
        return view('admin.editsp',[
            'title'=>'Chỉnh sửa thông tin san pham',
            'products'=>$sp
        ]);
    }
    public function postedit($product, Request $request){
        $manhom = Sanpham::where('maSP',$product)->first()->maNhom;

        $this->productService->edit($product, $request);
        switch($manhom){
            case 1: return redirect('/admin/iphone/');
            break;
            case 2: return redirect('/admin/ipad/');
            break;
            case 3: return redirect('/admin/mac/');
            break;
            case 4: return redirect('/admin/watch/');
            break;
            case 5: return redirect('/admin/amthanh/');
            break;
            case 6: return redirect('/admin/phukien/');
            break;
        }

    }

    public function delete($product)
    {
        // Tìm user cần xóa theo id
        $sanpham = Sanpham::where('maSP',$product);

        if (!$product) {
            // User không tồn tại, xử lý lỗi hoặc thông báo người dùng
            return redirect()->back()->with('error', 'San Pham not found');
        }

        // Thực hiện xóa product
        $sanpham->delete();

        // Xử lý thành công và chuyển hướng về trang danh sách users
        return redirect()->back()->with('success', 'Xoa san pham thanh cong');
    }

}
