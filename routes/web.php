<?php

use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\OrderMasterController;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\CustomerMasterController;
use App\Http\Controllers\PaymentRequestController;


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

Route::get('/', function (Request $request) {
    return view('home');
})->name('home');


Route::get('/gents', function (Request $request) {
    return view('Gents');
})->name('gents');

Route::get('/admin', function (Request $request) {
    return view('Admin.adminlogin');
})->name('admin');

Route::get('/singleproduct/{id}/{barnd}', [ProductsController::class, 'singleproduct'])->name('singleproduct');


Route::get('/cart', function (Request $request) {
    return view('cart');
})->name('cart');


Route::get('/session', function (Request $request) {
    dd(Session::all());
});

Route::get('/checkout', [OrderMasterController::class, 'Billdetails']);

Route::post('/addcustomer', [CustomerMasterController::class, 'Addcustomer']);

Route::get('/payment', [PaymentRequestController::class, 'Paymentreq']);

Route::post('/verify', [PaymentRequestController::class, 'Paymentverify'])->name('verify');


Route::post('/paymentcheck', [PaymentRequestController::class, 'Paymentcheck']);

Route::get('/useregister', [AuthController::class, 'useregister'])->name('useregister');

Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/userlogin', [AuthController::class, 'userlogin'])->name('userlogin');

Route::post('/userlog', [AuthController::class, 'userlog'])->name('userlog');

Route::get('/userlogout', [AuthController::class, 'userlogout'])->name('userlogout');



Route::post('/addcart', function(Request $request){

        $item = array();
        $brands = DB::select("SELECT front_image,itemdesc,itemcode,MRP,id,stock,sizes FROM products where id='{$request->Proid}'");

        foreach ($brands as $key => $brand) {
            $item = ['front_image'=>$brand->front_image,'id'=>$brand->id,'itemdesc'=>$brand->itemdesc,'itemcode'=>$brand->itemcode,'MRP'=>$brand->MRP,'stock'=>$brand->stock,'size'=>$brand->sizes];
        }

        if(!empty(Session::get('cart')))
        {
        foreach(Session::get('cart') as $i => $carts)
        {
            foreach($carts as $k => $cart)
            {
                if($cart['id']!=$request->Proid)
                {
                    $request->session()->push('cart.'.$request->Proid.'', $item);
                }
            }
        }
       }
       else
       {
        $request->session()->push('cart.'.$request->Proid.'', $item);
       }
       
        return response()->json(array('msg'=>'Item Add Successful!'), 200);
});



Route::get('/cartdelete/{cid}', [ProductsController::class, 'cartdelete'])->name('cartdelete');

Route::post('/ConfrimOrder', [OrderMasterController::class, 'Order_Confrim']);

Route::post('/adminlogin', [AuthController::class, 'authenticate'])->name('adminlogin');

Route::get('/logout', [AuthController::class, 'authlogout'])->name('logout');


Route::middleware('auth')->group(function () {
    Route::get('/admindashboard', function () {
     return view('Admin.dashboard');
    })->name('admindashboard');


Route::get('/products', [ProductsController::class, 'show'])->name('products');
Route::get('/showproduct/{id}', [ProductsController::class, 'showproduct'])->name('showproduct');
Route::get('/productupload', [ProductsController::class, 'productupload'])->name('productupload');
Route::post('/addproduct', [ProductsController::class, 'productsave'])->name('addproduct');
Route::post('/productfileupload', [ProductsController::class, 'productfileupload'])->name('productfileupload');
Route::post('/updateproduct', [ProductsController::class, 'updateproduct'])->name('updateproduct');
Route::get('/deleteproduct/{id}', [ProductsController::class, 'productdelete'])->name('deleteproduct');
});

