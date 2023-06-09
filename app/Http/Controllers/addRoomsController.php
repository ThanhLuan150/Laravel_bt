<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class addRoomsController extends Controller
{
    public function index()
    {
        $rooms = Session::get('rooms', collect()); // Lấy dữ liệu rooms từ session, mặc định là một collection rỗng
        return view('addroom', compact('rooms'));
    }

    public function showrooms(Request $request)
    {
        $room = [
            'room_name' => $request->input('roomname'),
            'description' => $request->input('des'),
            'price' => $request->input('price'),
            'image' => $request->input('img')
        ];

        $rooms = Session::get('rooms', collect()); // Lấy dữ liệu rooms từ session, mặc định là một collection rỗng
        $rooms->push($room); // Thêm phần tử vào mảng

        Session::put('rooms', $rooms); // Lưu trữ dữ liệu rooms vào session

        return view('addroom', compact('rooms'));
    }
}



