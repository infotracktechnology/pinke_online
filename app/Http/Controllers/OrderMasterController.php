<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order_master;
use App\Models\products;
//use Razorpay\Api\Api;
use Session;
use Illuminate\Support\Facades\DB;


class OrderMasterController extends Controller
{
    public function Order_Confrim(Request $request)
    {
        $amt = 0;
        //$api = new Api(env('RAZORPAY_KEY'), env('RAZORPAY_SECRET'));
        $receipt = rand(pow(10, 6), pow(10,5));

        if(!empty($request->pid))
        {
        foreach ($request->pid as $key => $pid) {
            $product = products::where('id',$pid)->get();
            $product = $product->toArray();
            $qty = (int)$request->qty[$key];
            $amt = $amt+($qty*$product[0]['MRP']);
            $rate = $qty*$product[0]['MRP'];
            $Order = Order_master::create([
             'order_id'=>$receipt,
             'product_id'=>$pid,
             'amount'=>$rate,
             'qty'=>$request->qty[$key],
            ]);
        }
       }

        //Session::put('amount',$amt*100);
        Session::put('amount',$amt);
        Session::put('shopping_order_id',$receipt);


        if(!empty(Session::get('cart')))
        {
          Session::forget('cart');
          return response(array('msg' => 'Order Create Successfully!'),200);
        }
        else
        {

            return response(array('msg' => 'Order Not Create!'),200);
        }

        

       
        



    }


    public function Billdetails()
    {
        $shopping_order_id = Session::get('shopping_order_id');
        $shopping = DB::select("select ps.itemdesc,om.amount from products ps left join order_masters om on ps.id=om.product_id where om.order_id=$shopping_order_id");
        return view('checkout',compact('shopping'));
    }
}
