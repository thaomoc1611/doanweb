<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\admin\ListController;
use App\Http\Controllers\user\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


// Route::get('/login', function () {

//     return view('/login/login');
// });
Route::get('/admin/login',[LoginController::class,'index']);
Route::post('/admin/login/postlogin',[LoginController::class,'postlogin']);

// Route::get('/', function () {
//     return view('HomePage');
// });
Route::get('/products',[ProductController::class,'listProduct']);
Route::get('/',[ProductController::class,'listProduct']);


Route::get('/iphone', function () {
    return view('Iphone');
});
Route::get('/am-thanh', function () {
    return view('AmThanh');
});
Route::get('/ipad', function () {
    return view('IPad');
});
Route::get('/mac', function () {
    return view('Mac');
});
Route::get('/phu-kien', function () {
    return view('PhuKien');
});
Route::get('/product', function () {
    return view('Product');
});
Route::get('/apple-watch', function () {
    return view('Watch');
});
Route::post('/register', function () {
    return view('HomePage');
});
Route::get('/product1', function () {
    return view('product1');
});

Route::get('/admin', function () {
    return view('/admin/index');
});
// Route::get('/admin/client', function () {
//     return view('/admin/list');
// });



Route::post('/cart/add', 'CartController@addToCart')->name('cart.add');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('/home');
Route::get('/admin/client', [App\Http\Controllers\admin\ListController::class, 'list'])->name('list');

Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register'])->name('actionRegister');
Route::get('/admin/client/addclient',[ClientController::class,'create']);
Route::post('/admin/client/addclient',[ClientController::class,'postcreate']);

Route::get('edit/{user}',[ListController::class,'edit']);
Route::post('edit/{user}',[ListController::class,'postedit']);
Route::get('/editsp/{product}',[ProductController::class,'edit']);
Route::post('/editsp/{product}',[ProductController::class,'postedit']);
Route::get('delete/{user}',[ListController::class,'delete']);
Route::get('deletesp/{product}',[ProductController::class,'delete']);
Route::get('/admin/iphone',[ListController::class,'getIphone']);
Route::get('/admin/ipad',[ListController::class,'getIpad']);
Route::get('/admin/watch',[ListController::class,'getWatch']);
Route::get('/admin/mac',[ListController::class,'getMac']);
Route::get('/admin/amthanh',[ListController::class,'getAmthanh']);
Route::get('/admin/phukien',[ListController::class,'getPhukien']);



Route::get('/admin/add',[ProductController::class,'add']);
Route::post('/admin/add',[ProductController::class,'addPost']);
