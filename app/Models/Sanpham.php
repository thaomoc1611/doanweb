<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
    use HasFactory;
    protected $table = 'sanphams';
    protected $fillable=[
        'maNhom ',
        'tenSP',
        'thongtinSP',
        'hinhAnh',
        'mausac',
        'kichthuoc',
        'dung luong',
        'gia',
        'soLuongBan',
        'soHienCo',
        'nhaSX',
        'tinhtrang',
      ];
}
