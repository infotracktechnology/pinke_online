<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer_master;
use Session;
use App\Models\Order_master;
//use Razorpay\Api\Api;

class CustomerMasterController extends Controller
{
    public function Addcustomer(Request $request)
    {

       if($request->all())
       {
        $customer = customer_master::create([
            'name'=>$request->name,
            'mail'=>$request->mail,
            'phone'=>$request->phone,
            'adderss1'=>$request->address1,
            'adderss2'=>$request->address2,
            'city'=>$request->city,
            'zipcode'=>$request->zipcode,
            'remark'=>$request->remark]);
        if($customer)
        {
           $shopping_order_id = Session::get('shopping_order_id');
           $Order = Order_master::where('order_id',$shopping_order_id)->update(['c_id'=>$customer->id]);
        }

         Session::put('profilename',$customer->name);
         Session::put('profilemail',$customer->mail);
         Session::put('profilephone',$customer->phone);
         Session::put('c_id',$customer->id);


        //  $api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));

        //   $amt = Session::get('amount');
        //   $orderData = [
        //     'receipt'         => $shopping_order_id,
        //     'amount'          => $amt,
        //     'currency'        => 'INR'
        // ];

        // $razorpayOrder = $api->order->create($orderData);
        // Session::put('payOrderid',$razorpayOrder['id']);
         
       }
    }
}
