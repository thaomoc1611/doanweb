<?php

namespace App\Http\Controllers\Service;

use App\Models\Client;
use App\Models\User;
use App\Models\Sanpham;
use PHPUnit\Exception;

class ProductService
{
    public function getAll(){
        return Sanpham::All();
    }
    public function getIphone(){
        return Sanpham::where('maNhom',1)->paginate(4) ;
    }
    public function getIpad(){
        return Sanpham::where('maNhom',2)->paginate(4);
    }
    public function getMac(){
        return Sanpham::where('maNhom',3)->paginate(4);
    }public function getWatch(){
        return Sanpham::where('maNhom',4)->paginate(4);
    }public function getAmthanh(){
        return Sanpham::where('maNhom',5)->paginate(4);
    }public function getPhukien(){
        return Sanpham::where('maNhom',6)->paginate(4);
    }



public function create($request){
        try {
            Sanpham::create([
                // 'maSP'=>$request->input('id'),
                'maNhom'=>$request->input('ma_nhom'),
                'tenSP'=>$request->input('ten_san_pham'),
                'thongtinSP'=>$request->input('thong_tin_san_pham'),
                'hinhAnh'=>$request->input('hinh_anh'),
                'mausac'=>$request->input('mau_sac'),
                'kichthuoc'=>$request->input('kich_thuoc'),
                'dung luong'=>$request->input('dung_luong'),
                'gia'=>$request->input('gia'),
                'soLuongBan'=>$request->input('so_luong_ban'),
                'soHienCo'=>$request->input('so_luong_hien_co'),
                'nhaSX'=>$request->input('nha_san_xuat'),
                'tinhtrang'=>$request->input('tinh_trang'),

            ]);
            Session()->flash('success','Thêm mới sản phẩm thành công');

        }
        catch (Exception $ex){
            Session()->flash('error',$ex->getMessage());
            return false;
        }
        return true;
    }
    public function edit($product, $request){
        try {


            Sanpham::where('maSP',$product)->update([
                'maNhom' => $request->input('ma_nhom'),
                'tenSP' => $request->input('ten_san_pham'),
               'thongtinSP' => $request->input('thong_tin_san_pham'),
               'hinhAnh' => $request->input('hinh_anh'),
               'mausac' => $request->input('mau_sac'),
                'kichthuoc' => $request->input('kich_thuoc'),
                'dung luong' => $request->input('dung_luong'),
                'gia' => $request->input('gia'),
                'soLuongBan' => $request->input('so_luong_ban'),
                'soHienCo' => $request->input('so_luong_hien_co'),
                'nhaSX' => $request->input('nha_san_xuat'),
                'tinhtrang' => $request->input('tinh_trang'),
            ]);
            Session()->flash('success','Chỉnh sửa san pham thành công');
            return true;
        }
        catch (Exception $ex){
            Session()->flash('error','Chỉnh sửa san pham KHÔNG thành công');
        }
        return false;
    }
}
