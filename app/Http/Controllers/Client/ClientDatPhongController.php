<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class ClientDatPhongController extends Controller
{
    
    public function store(Request $request, $sophong)
    {
        $params = [ 
            'tenkhachhang'=>$request->tenkhachhang, 
            'sodienthoaiKH'=>$request->sodienthoaiKH, 
            'email'=>$request->email            
        ];
        $result2 = DB::table('khachhang')->insertGetId($params);
        // dd($result);
        $params2 = [ 
            'maKH'=>$result2,
            'CheckIn'=>$request->txtCheckIn, 
            'CheckOut'=>$request->txtCheckOut, 
            'sophong'=>$sophong         
        ];

        DB::table('thongtindatphong')->insert($params2);

        // send mail
        $tenkhachhang = $request->tenkhachhang;
        $emailKH = $request->email;
        Mail::send('email.content', compact('tenkhachhang'), function($email) use($request) {
            $email->subject('ĐẶT PHÒNG KHÁCH SẠN');
            $email->to($request->email, $request->tenkhachhang);
        });

        return redirect()->route('clientphong.index');
        // DB::table('thongtindatphong')->insert('');
    }

   
}
