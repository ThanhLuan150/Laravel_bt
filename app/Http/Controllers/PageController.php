<?php

namespace App\Http\Controllers;
use App\Models\BillDetail;
use App\Models\bills;
use App\Models\Cart;
use App\Models\comments;
use App\Models\customers;
use App\Models\products;
use App\Models\slidesses;
use App\Models\type_products;
use App\Models\wishlists;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class PageController extends Controller
{
//     public function getIndex(){			
//     	return view('page.trangchu');		
//     }
//     public function getLoaiSP(){			
//     	return view('page.loai_sanpham');		
//     }
//     public function getChitiet(){			
//         return view('page.chitiet_sanpham');			
//         }			
                    
//     public function marter(){			
//             return view('master');			
//             }	
//     public function if(){			
//                 return view('if');			
//                 }	
//     public function for(){			
//             return view('vonglapfor');			
//     }				
//     public function lienhe(){			
//         return view('page.lienhe');			
// }    
//     public function about(){			
//     return view('page.about');			
//     }      
    public function getIndex(){							
        $slide =slidesses::all();						
    	//return view('page.trangchu',['slide'=>$slide]);						
        $new_product = products::where('new',1)->paginate(8);
        $sanpham_khuyenmai = products::where('promotion_price','<>',0)->paginate(4);						
        //dd($new_product);							
    	return view('page.trangchu',compact('slide','new_product','sanpham_khuyenmai'));						
    }							
    						
    public function getDetail(Request $request){							
    	$sanpham = products:: where('id',$request->id)->first();
        $splienquan = products::where('id','<>',$sanpham->id,'and','id_type','=',$sanpham->id_type)->paginate(3);						
        $comments =	comments::where('id_product',$request->id)->get();					
    	return view('page.chitiet_sanpham',compact('sanpham','splienquan','comments'));						
    }	
    public function getLoaiSp($type){			
        	$type_product =type_products::all();//Show ra tên loại sản phẩm
            $sp_theoloai = products::where('id_type',$type)->get();
            $sp_khac =products::where('id_type','<>',$type)->paginate(3);
            return view('page.loai_sanpham',compact('sp_theoloai','type_product','sp_khac'));


 }	  
 public function getIndexAdmin(){
    $products = products::all();
    return view('pageadmin.admin')->with([
        'products' => $products,
        'sumSold' => count(BillDetail::all())
    ]);
}
        public function getAdminAdd(){
            return view('pageadmin.admin-add-form');
}
public function postAdminAdd(Request $request) {
    $product = new products();
    
    if ($request->hasFile('inputImage')) {
        $file = $request->file('inputImage');
        $fileName = $file->getClientOriginalName('inputImage');
        $file->move('source/image/product', $fileName);
        $product->image = $fileName;
    }
    
    $product->name = $request->inputName;
    $product->description = $request->inputDescription; // Sửa đúng tên trường ở đây
    $product->unit_price = $request->inputunitPrice;
    $product->promotion_price = $request->inputPromotionPrice;
    $product->unit = $request->inputunit;
    $product->new = $request->inputNew;
    $product->id_type = $request->inputType;
    
    $product->save();
    
    return $this->getIndexAdmin();
}

							
public function getAdminEdit($id)	{
    $product =products::find($id);
    return view('pageadmin.admin-edit-form')->with('product',$product);
}										

public function postAdminEdit(Request $request)	{
    $id =$request ->editId;
    $product =products::find($id);
    if ($request->hasFile('editImage')) {
        $file = $request->file('editImage');
        $fileName = $file->getClientOriginalName('editImage');
        $file->move('source/image/product', $fileName);
        $product->image = $fileName;
    }
    
    $product->name = $request->editName;
    $product->description = $request->editDescription;
    $product->unit_price = $request->editunitPrice;
    $product->promotion_price = $request->editPromotionPrice;
    $product->unit = $request->inputeditunit;
    $product->new = $request->editNew;
    $product->id_type = $request->editType;
    
    $product->save();
    
    return $this->getIndexAdmin();
}										
														
// public function postAdminDelete($id){
//     $product = products::find($id);
//     $product->detele();
//     return $this->getIndexAdmin();
// }
public function  postAdminDelete($id)
{
    $product = products::find($id);
    $product->delete();
    return $this->getIndexAdmin();
}
public function getAddToCart(Request $req, $id)
{
    if (Session::has('users')) {   //Dùng Session để làm giỏ hàng $oldcart : là giỏ hàng hiện tạiNếu tồn tại giỏ hàng thi chúng ta gắm cho nó  , khong thì cho nó rỗng 
        if (products::find($id)) {  //lấy sản phẩm ra theo id
            $product = products::find($id);
            $oldCart = Session('cart') ? Session::get('cart') : null;  //$oldcart:là tình trạng giỏ hàng hiện tại
            $cart = new Cart($oldCart);  //$cart: là tình trạng giỏ hàng sau khi thêm mới sản phẩm 
            $cart->add($product, $id); //Đây là tên class mà chúng ta thực  hiện tạo ở model Cart với phuong thúc add()
            $req->session()->put('cart', $cart);
            return redirect()->back();
        } else {
            return '<script>alert("Không tìm thấy sản phẩm này.");window.location.assign("/");</script>';
        }
    } else {
        return '<script>alert("Vui lòng đăng nhập để sử dụng chức năng này.");window.location.assign("/login");</script>';
    }
}


public function getDelItemCart($id)
{
    $oldCart = Session::has('cart') ? Session::get('cart') : null;
    $cart = new Cart($oldCart);
    $cart->removeItem($id);

    if (count($cart->items) > 0) {
        Session::put('cart', $cart);
    } else {
        Session::forget('cart');
    }

    return redirect()->back();
}											
	



public function getCheckout()															
{															
if (Session::has('cart')) {															
$oldCart = Session::get('cart');															
$cart = new Cart($oldCart);															
return view('page.checkout')->with(['cart' => Session::get('cart'), 															
'product_cart' => $cart->items, 															
'totalPrice' => $cart->totalPrice, 															
'totalQty' => $cart->totalQty]);;															
} else {															
return redirect('/check-out');															
}															
}															
															
public function postCheckout(Request $req)															
{	

$cart = Session::get('cart');

if (!$cart || !count($cart->items)) {
        return redirect()->back()->with('error', 'Giỏ hàng trống. Vui lòng thêm sản phẩm vào giỏ hàng trước khi thanh toán.');
    }

$cart = Session::get('cart');															
$customer = new customers();															
$customer->name = $req->full_name;															
$customer->gender = $req->gender;															
$customer->email = $req->email;															
$customer->address = $req->address;															
$customer->phone_number = $req->phone;															
															
if (isset($req->notes)) {															
$customer->note = $req->notes;															
} else {															
$customer->note = "Không có ghi chú gì";															
}															
															
$customer->save();															
															
$bill = new bills();															
$bill->id_customer = $customer->id;															
$bill->date_order = date('Y-m-d');															
														
$bill->payment = $req->payment_method;															
if (isset($req->notes)) {															
$bill->note = $req->notes;															
} else {															
$bill->note = "Không có ghi chú gì";															
}															
$bill->save();															
															
foreach ($cart->items as $key => $value) {															
$bill_detail = new BillDetail;															
$bill_detail->id_bill = $bill->id;															
$bill_detail->id_product = $key; //$value['item']['id'];															
$bill_detail->quantity = $value['qty'];															
$bill_detail->unit_price = $value['price'] / $value['qty'];															
$bill_detail->save();															
}															
															
Session::forget('cart');															
$wishlists = wishlists::where('id_user', optional(Session::get('user'))->id)->get();

if ($wishlists) {
    foreach ($wishlists as $element) {
        $element->delete();
    }
}


return redirect('/luan/')->with('success', 'Thanh toán thành công');														
}															
}															

 
    

