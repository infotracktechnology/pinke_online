<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\payment_request;
use App\Models\payment_master;
use Session;
use Illuminate\Support\Facades\DB;
use Softon\Indipay\Facades\Indipay;

class PaymentRequestController extends Controller

{
    

    public function Paymentreq()
    {
         $amount = Session::get('amount');
         $shopping_order_id = Session::get('shopping_order_id');
         $profilename = Session::get('profilename');
         $profilemail = Session::get('profilemail');
         $profilephone = Session::get('profilephone');
         $c_id = Session::get('c_id');

         $paydata = [
          'cid'=>$c_id,
          'email'=>$profilemail,
          'amount'=>$amount,
          'shopping_order_id'=>$shopping_order_id,
          'mobile'=>$profilephone,
          'name'=>$profilename
         ];

       return view('payment',compact('paydata'));

    }

    public function Paymentcheck(Request $request)
    {


       $amount = Session::get('amount');
       
       $payment_req = payment_request::create([
            'receipt'=>$request->order_id,
            'order_id'=>$request->order_id,
            'c_id'=>$request->billing_address,
            'amount'=>$amount,
            'gatewayname'=>'ccavenue',
            'adate'=>date('Y-m-d'),
            'atime'=>date('H:i:s')
       ]);

       $parameters = [
        'merchant_id' => '1898259',
        'order_id' => $request->order_id,
        'amount' => $amount,
        'billing_address' => $request->billing_address,
        'billing_email' => $request->billing_email,
        'billing_name' => $request->billing_name,
        'billing_tel' => $request->billing_tel,
      ];

      $order = Indipay::gateway('ccavenue')->prepare($parameters);
      return Indipay::process($order);
    }


    public function Paymentverify(Request $request)
    {

        $response = Indipay::gateway('ccavenue')->response($request);
        //dd($response);
        if($response['order_status'] == "Success")
        {
          $html = "<td>{$response['order_id']}</td>
                   <td>{$response['tracking_id']}</td>
                   <td>{$response['billing_email']}</td>
                   <td>{$response['billing_tel']}</td>
                   <td>{$response['amount']}</td>
                  <td class='text-success'>Your Payment Successful</td>";

                $payment = payment_master::create([
                    'Payment_Status'=>'CAPTURED',
                    'order_id'=>$response['order_id'],
                    'Payment_ID'=>$response['tracking_id'],
                    'Paid_Amount'=>$response['amount'],
                    'email'=>$response['billing_email'],
                    'phone'=>$response['billing_tel'],
                    'PaymentGateWayName'=>'ccavenue',
                    'c_id'=>$response['billing_address'],
                    'ResponseString'=>$response['response_code'],
                    'adate'=>date('Y-m-d'),
                    'atime'=>date('H:i:s')
                ]);
        }
        else
        {
          $html = "<td>{$response['order_id']}</td>
                   <td>{$response['tracking_id']}</td>
                   <td>{$response['billing_email']}</td>
                   <td>{$response['billing_tel']}</td>
                   <td>{$response['amount']}</td>
                  <td class='text-danger'>{$response['order_status']}</td>";

                $payment = payment_master::create([
                    'Payment_Status'=>$response['order_status'],
                    'order_id'=>$response['order_id'],
                    'Payment_ID'=>$response['tracking_id'],
                    'Paid_Amount'=>$response['amount'],
                    'email'=>$response['billing_email'],
                    'phone'=>$response['billing_tel'],
                    'PaymentGateWayName'=>'ccavenue',
                    'c_id'=>$response['billing_address'],
                    'ResponseString'=>$response['response_code'],
                    'adate'=>date('Y-m-d'),
                    'atime'=>date('H:i:s')
                ]);

        }

        return view('verifyPayment',compact('html'));
    }
 

 


}
