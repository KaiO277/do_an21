<?php

use App\Http\Controllers\Admin\AdminPhongController;
use App\Http\Controllers\Admin\OrderPhongController;
use App\Http\Controllers\Admin\KhachHangController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Client\ClientDatPhongController;
use App\Http\Controllers\Client\ClientPhongController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckLoginMiddleware;



Route::get('admin/login',[LoginController::class,'login'])
        ->name('login');
Route::post('admin/checklogin',[LoginController::class,'checklogin'])
        ->name('checklogin'); 
Route::get('logout',[LoginController::class,'logout'])
        ->name('logout');
        
Route::group(['middleware'=>CheckLoginMiddleware::class],
function(){
    Route::name('admin')->group(function(){
    Route::prefix('admin')->group(function(){
    Route::resources([
       'phong'=>AdminPhongController::class,
        'infor'=>OrderPhongController::class,
        'khachhang'=>KhachHangController::class 
    ]);
 });
 Route::get('/admin/home',[HomeController::class,'index'])->name('admin.home');
 Route::get('/admin/search',[HomeController::class,'search'])->name('admin.search');
});
}
);


Route::name('client')->group(function(){
    Route::prefix('client')->group(function(){
       Route::resources([
          'phong'=>ClientPhongController::class,
        //   'datphong'=>ClientDatPhongController::class,
       ]);
     
       Route::post('/datphong{sophong}',
    'App\Http\Controllers\Client\ClientDatPhongController@store')->name('datphong');


    Route::get('/index',
    'App\Http\Controllers\Client\ClientPhongController@index');
    });
    
});

Route::get('/test',function(){
        return view('hotel.index2');
   });


// Client

// // Phong
// Route::get('/index',
//     'App\Http\Controllers\Client\ClientPhongController@index' )->name('ClientIndex')
// ;

// Route::get('/khuvuc/{id}',
//     'App\Http\Controllers\Client\ClientPhongController@khuvuc')->name('ClientKhuvuc')
// ;
// Route::get('/datphong/{sophong}',
//     'App\Http\Controllers\Client\ClientPhongController@datphong')->name('ClientDatPhong')
// ;

// KhachHang
// Route::post('/hoantatdatphong{sophong}',
//     'App\Http\Controllers\Client\ClientKhachHangController@Store')->name('ClientKhachHang')
// ;
