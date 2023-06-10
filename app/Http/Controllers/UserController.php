<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\products;
use App\Models\users;
use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class UserController extends Controller
{
    // public function Xinchao(){
    //     $title ="Đây là Tôi một người luôn vui vẻ,lạc quan";
    //     $haha ="Lê Trương Thành Luân";
    //     $list=['title'=>$title , 'haha'=> $haha];
    //     return  view('homepage') ->  with( 'tilte' , $list);
    // }

    // public function GetIndex(){
    //     $name ="Thành Luân";
    //     $age ="20";
    //     $class ="22A";
    //     $arr =['name'=>$name ,'age'=>$age ,'class'=>$class];
    //     return view('test') -> with('student', $arr);
    // }
    

    //bài sum
    public function tinhtong(Request $request)
    {
        $sum = $request ->soA +  $request ->soB;
        return view('sum',compact('sum'));
    }
        // bài areaOfShape
    function computeArea(Request $request)
    {
        $a= $request->input('a');
        $b= $request->input('b');
        $e1= $request->input('e1');
        $e2= $request->input('e2');
        $e3= $request->input('e3');
        $e4= $request->input('e4');
        return view('areaOfShape')->with(['areaTriangle'=>($a+$b)/2,'areaQuadrangle'=>($e1+$e2+$e3+$e4)]);
    }
    public function getData()
    {
        $client = new Client();
        $response = $client->request('GET', 'http://localhost:8000/api-data');
        $data = json_decode($response->getBody(), true);

        return view('api-data', ['data' => $data]);
    }


    public function Register (Request $request){
        $input = $request ->validate([
            'name' =>'required|string',
            'email' =>'required|email|unique:users',
            'password' => 'required',
            'c_password' => 'required|same:password',
        ]);

        $input['password'] = bcrypt($input['password']);
        users::create($input);

        echo '
        <script>
        alert("Đăng ký thành công. Vui lòng đăng nhập");
        window.location.assign("login");
        </script>
        ';
    }
    public function Login (Request $request){
        $login = [
            'email' => $request ->input('email'),
            'password' =>  $request ->input('pw'),
        ];

        if(Auth::attempt($login)){
            $user = Auth::user();
            Session::put('users', $user);
            echo '<script>alert("Đăng nhập thành công.");window.location.assign("luan");</script>';
        }else{
            echo '<script>alert("Đăng nhập thất bại.");window.location.assign("login");</script>';
        }
    }

    public function Logout(){
        Session::forget('users');
        Session::forget('cart');
        return redirect('/luan');
    }

   



}
