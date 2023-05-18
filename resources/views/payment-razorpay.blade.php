

<!DOCTYPE html>

<html lang="zxx">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="description" content="this is a demo meta description">

    <meta name="keywords" content="this is a demo meta keywords">

    <title>Pinke - eCommerce </title>



    <!-- Favicons -->

    <link rel="shortcut icon" href="{{ asset('resources/') }}/img/favicons.png">









    <!-- ************************* CSS ************************* -->



    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="{{ asset('resources/') }}/css/bootstrap.min.css">



    <!-- Font Awesome CSS -->

    <link rel="stylesheet" href="{{ asset('resources/') }}/css/font-awesome.min.css">



    <!-- All Plugins CSS css -->

    <link rel="stylesheet" href="{{ asset('resources/') }}/css/plugins.css">



    <!-- style css -->

    <link rel="stylesheet" href="{{ asset('resources/') }}/css/main.css">



    <!-- responsive css -->

    <link rel="stylesheet" href="{{ asset('resources/') }}/css/responsive.css">



    <!-- modernizr JS

    ============================================ -->

    <script src="{{ asset('resources/') }}/js/modernizr-2.8.3.min.js"></script>



<style type="text/css">

    .razorpay-payment-button {

         background-color:#2c2e3d;
         color: #fff;
         font-weight: 700;
         font-size: 1.6rem;
         padding: 1.7rem 2rem;
         border: none;

    }

</style>


</head>

<body>


   



    <div class="wrapper">



    @include('navbar')

    <!-- Breadcumb area Start -->
        <div class="breadcumb-area bg--black ptb--100">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcumb">
                            <li class="rabeya-breadcumb"><a class="rabeya-breadcumb-link" href="index.html">Home</a></li>
                            <li class="rabeya-breadcumb"><a class="rabeya-breadcumb-link current" href="checkout.html">Payment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->
 
@if(!empty($paydata))

{{-- @php  
print_r($razorpayOrder) 
@endphp --}}

        <div class="row " style="">
            <div class="col-md-12"><br>

                        <div class="checkout-area ptb--60">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="custom-title">
                                            <h2>Payment Details</h2>
                                        </div>
                                    </div>
                                </div>

<div class="row">
    <div class="col-lg-12">
         <div class="custom-title">
                                            <h2>Your Order</h2>
                                        </div>
                                        <div class="order-details mb--30">
                                          
                                            <table class="order-table">
                                                <thead>
                                                    <tr>
                                                         <th>S.No</th>
                                                         <th>Shopping orderid</th>
                                                         <th>Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                   
                                                    <tr>
                                                       
                                                        <td>1</td>
                                                        <td>{{ $paydata['shopping_order_id'] }}</td>
                                                        <td> &#x20B9;{{ $paydata['amount']/100 }}</td>
                                                    </tr>
                                                    
                                                </tbody>
                                                
                                            </table>
                                        </div>
</div>

    <div class="col-lg-12">
   <center>
    <form action="https://api.razorpay.com/v1/checkout/embedded" method="POST">
  


  @csrf

  {{-- <script

    src="https://checkout.razorpay.com/v1/checkout.js"

    data-key="{{  $paydata['key'] }}"

    data-amount="{{  $paydata['amount'] }}"

    data-currency="INR"

    data-name="{{  $paydata['name'] }}"

    data-image="{{  $paydata['image'] }}"

    data-description="{{  $paydata['description'] }}"

    data-prefill.name="{{  $paydata['prefill']['name'] }}"

    data-prefill.email="{{  $paydata['prefill']['email'] }}"

    data-prefill.contact="{{  $paydata['prefill']['contact'] }}"

    data-notes.shopping_order_id="{{  $paydata['shopping_order_id'] }}"

    data-order_id="{{  $paydata['order_id'] }}"

  >

  </script> --}}

  <!-- Any extra fields to be submitted with the form but not sent to Razorpay -->

  {{-- <input type="hidden" name="shopping_order_id" value="{{  $paydata['shopping_order_id'] }}">
  <input type="hidden" name="amount" value="{{  $paydata['amount'] }}">
  <input type="hidden" name="c_id" value="{{  $paydata['c_id'] }}">
  <input type="hidden" name="profilename" value="{{  $paydata['prefill']['name'] }}">
  <input type="hidden" name="profilemail" value="{{  $paydata['prefill']['email'] }}">
  <input type="hidden" name="profilephone" value="{{  $paydata['prefill']['contact'] }}"> --}}


<input type="hidden" name="key_id" value="{{  $paydata['key'] }}">
<input type="hidden" name="order_id" value="{{  $paydata['order_id'] }}">
<input type="hidden" name="amount" value="{{  $paydata['amount'] }}">
<input type="hidden" name="name" value="HDFC VAS">
<input type="hidden" name="description" value="{{  $paydata['description'] }}">
<input type="hidden" name="prefill[email]" value="{{  $paydata['prefill']['email'] }}">
<input type="hidden" name="prefill[contact]" value="{{  $paydata['prefill']['contact'] }}">
<input type="hidden" name="notes[transaction_id]" value="{{  $paydata['shopping_order_id'] }}">
<input type="hidden" name="callback_url" value="https://pinkeonline.com/verify">
<input type="hidden" name="amt" value="{{  $paydata['amount'] }}">
<button class="razorpay-payment-button" type="submit">Pay Now</button>

</form></center>

</div>

</div>
</div>
</div>

</div>
 @endif


        </div>
    @include('footer')

    <!-- Main Wrapper End -->



    <!-- Scroll To Top -->

    

    <a class="scroll-to-top" href="#"><i class="fa fa-angle-double-up"></i></a>





    





    <!-- ************************* JS ************************* -->



    <!-- jQuery JS -->

    <script src="{{ asset('resources/') }}/js/vendor/jquery.min.js"></script>



    <!-- Popper JS -->

    <script src="{{ asset('resources/') }}/js/popper.min.js"></script>



    <!-- Bootstrap JS -->

    <script src="{{ asset('resources/') }}/js/bootstrap.min.js"></script>



    <!-- Plugins JS -->

    <script src="{{ asset('resources/') }}/js/plugins.js"></script>



    <!-- Main JS -->

    <script src="{{ asset('resources/') }}/js/main.js"></script>
 

 
    
</body>
</html>