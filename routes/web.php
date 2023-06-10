<?php
namespace App\Http\Controllers;


use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/welcome', function () {
    return 'Chào mừng cấc bạn đến với PNV
    <br>Mình là Lê Trương Thành Luân 
    <br> Lớp PNV24A
    <br>Mình là một người thân thiện';
});

Route::get('/xinchao',[UserController::class , 'Xinchao' ]);

Route::get('/user',[UserController::class , 'GetIndex']);

//bài sum 
Route::get('/tinhtong',[UserController::class,'tinhtong']);


Route::post('/tinhtong',[UserController::class,'tinhtong']);

//bài areaOfShape
Route::get('/computeArea', [UserController::class, 'computeArea']);

// GET: được sử dụng để lấy thông tin từ sever theo URI đã cung cấp.
Route::post('/computeArea', [UserController::class, 'computeArea']);

// POST: gửi thông tin tới sever thông qua các biểu mẫu http (đăng kí chả hạn ...);
Route::get('/signup',[SignupController::class ,'index']);

Route::post('/signup',[SignupController::class ,'displayInfor']);


// addRooms
Route::get('/addrooms', [addRoomsController::class, 'index']);
Route::post('/addrooms', [addRoomsController::class, 'showrooms']);

Route::get('/luan',[PageController::class,'getIndex']);
Route::get('/luan6',[PageController::class,'slide']);

Route::get('/luan1/{id}',[PageController::class,'getLoaiSp']);

Route::get('/luan2/{id}',[PageController::class,'getDetail']);


Route::get('/luan3/',[PageController::class,'getIndexAdmin']);

Route::get('/luan9', [PageController::class, 'getAdminAdd'])->name('add-product');														
Route::post('/luan9', [PageController::class, 'postAdminAdd'])->name('admin-add-form');										
Route::get('/luan10/{id}', [PageController::class, 'getAdminEdit']);												
Route::post('/luan10/{id}', [PageController::class, 'postAdminEdit']);													

Route::post('/luan11/{id}', [PageController::class, 'postAdminDelete']);															

Route::get('/register', function () {
    return view('users.register');
});
Route::post('/register',[UserController::class,'Register']);

Route::get('/login', function () {						
    return view('users.login');						
   });						
Route::post('/login',[UserController::class,'Login']);
Route::get('/logout',[UserController::class,'Logout']);


													
Route::get('add-to-cart/{id}', [PageController::class, 'getAddToCart'])->name('themgiohang');	

Route::get('del-cart/{id}', [PageController::class, 'getDelItemCart'])->name('xoagiohang');												
                                                
  	Route::get('check-out', [PageController::class, 'getCheckout'])->name('dathang');				
	Route::post('check-out', [PageController::class, 'postCheckout'])->name('dathang');				
					
                                              

Route::get('/luan4',[PageController::class,'marter']);


Route::get('/luan5',[PageController::class,'if']);

Route::get('/luan6',[PageController::class,'for']);

Route::get('/luan7',[PageController::class,'lienhe']);

Route::get('/luan8',[PageController::class,'about']);


Route::get('/products', [ProductController::class, 'index'])->name('products.index');














Route::get('/tinhtich/{a}/{b}', function ($a,$b) {
    echo $a*$b;exit;
    
})->whereNumber('a')->whereNumber('b');
Route::get('/tinhtong/{a}/{b}', function ($a,$b) {
    echo $a+$b;exit;
    
})->whereNumber('a')->whereNumber('b');
Route::get('/tinhhieu/{a}/{b}', function ($a,$b) {
    echo $a-$b;exit;
    
})->whereNumber('a')->whereNumber('b');
Route::get('/tinhthuong/{a}/{b}', function ($a,$b) {
    echo $a/$b;exit;
    
})->whereNumber('a')->whereNumber('b');