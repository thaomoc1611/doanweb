<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Service\ClientService;
use App\Http\Controllers\Service\ProductService;
use App\Models\User;

class ListController extends Controller
{
    protected $productService;
    protected $lopService;
    public function __construct(ClientService $lopService,ProductService $productService)
    {
        $this->lopService = $lopService;
        $this->productService = $productService;
    }

    public function list(){
        return view('admin.list',[
            'title'=>'Danh sách client',
            'lops'=>$this->lopService->getAll()
        ]);
    }

    public function edit(User $user){

        return view('admin.edit',[
            'title'=>'Chỉnh sửa thông tin client',
            'users'=>$user
        ]);
    }
    public function postedit(User $user, Request $request){
        $result = $this->lopService->edit($user, $request);
        return redirect()->route('list');
    }

    public function delete($user)
    {
        // Tìm user cần xóa theo id
        $user = User::find($user);

        if (!$user) {
            // User không tồn tại, xử lý lỗi hoặc thông báo người dùng
            return redirect()->back()->with('error', 'User not found');
        }

        // Thực hiện xóa user
        $user->delete();

        // Xử lý thành công và chuyển hướng về trang danh sách users
        return redirect()->route('list')->with('success', 'Xoa tai khoan thanh cong');
    }



    public function getIphone(){
        return view('admin.product',[
            'products'=>$this->productService->getIphone(),
        ]);
    }

    public function getIpad(){
        return view('admin.product',[
            'products'=>$this->productService->getIpad(),
        ]);
    } public function getWatch(){
        return view('admin.product',[
            'products'=>$this->productService->getWatch(),
        ]);
    }
    public function getMac(){
        return view('admin.product',[
            'products'=>$this->productService->getMac(),
        ]);
    }
    public function getAmthanh(){
        return view('admin.product',[
            'products'=>$this->productService->getAmthanh(),
        ]);
    }
    public function getPhukien(){
        return view('admin.product',[
            'products'=>$this->productService->getPhukien(),
        ]);
    }
}
