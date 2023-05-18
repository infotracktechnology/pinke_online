

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
                            <li class="rabeya-breadcumb"><a class="rabeya-breadcumb-link current" href="checkout.html">Checkout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->

        <!-- Main content wrapper start -->
        <div class="main-content-wrapper">
            <div class="checkout-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <!-- Checkout Area Start -->
                            <div class="checkout-area ptb--60">
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="custom-title">
                                            <h2>Billing Details</h2>
                                        </div>
                                        <div class="checkout-form">
                                            <form  id="myForm" class="form" method="post">
                                                <div class="form-row mb--30">
                                                    <div class="rabeya-form-group col-md-6">
                                                        <input type="text" name="name" class="rabeya-input-form" placeholder="First Name *" required>
                                                    </div>
                                                    <div class="rabeya-form-group col-md-6">
                                                        <input type="email" name="mail" class="rabeya-input-form" placeholder="Email *" required>

                                                    </div>
                                                </div>
                                                
                                                <div class="form-row mb--30">
                                                     <div class="rabeya-form-group col-md-6">
                                                        <input type="text" name="phone" class="rabeya-input-form" placeholder="Telephone" required> 
                                                    </div>

                                                    <div class="rabeya-form-group col-md-6">
                                                        <input type="text" name="city" class="rabeya-input-form" placeholder="City" required>
                                                    </div>
                                                    
                                                </div>
                                                 
                                                  <div class="form-row mb--30">
                                                    <div class="rabeya-form-group col-12">
                                                        <input type="text" name="address1" class="rabeya-input-form" placeholder="Apartment, suite, unit etc. (optional)" required>
                                                    </div>
                                                </div>

                                                <div class="form-row mb--30">
                                                    <div class="rabeya-form-group col-12">
                                                        <input type="text" name="address2" class="rabeya-input-form" placeholder="Address 2 " required>
                                                    </div>
                                                </div>
                                               
                                                <div class="form-row mb--30">
                                                    <div class="rabeya-form-group col-md-6">
                                                        <input type="number" name="zipcode" class="rabeya-input-form" minlength="6" maxlength="6" placeholder="zipcode" required>
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="rabeya-form-group col-12">
                                                        <textarea class="rabeya-input-form rabeya-input-form--textarea" id="orderNotes" name="remark" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 mt-md--30">
                                        <div class="custom-title">
                                            <h2>Your Order</h2>
                                        </div>
                                        <div class="order-details mb--30">
                                            @php
                                            $tot = 0;
                                            @endphp
                                            <table class="order-table">
                                                <thead>
                                                    <tr>
                                                        <th>Product</th>
                                                        <th>Amount</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($shopping as $key => $shop)
                                                    <tr>
                                                        @php 
                                                        $tot=$tot+$shop->amount 
                                                        @endphp
                                                        <td>{{ $shop->itemdesc }}</td>
                                                        <td> &#x20B9;{{ $shop->amount }}</td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                                <tfoot>
                                                    <tr class="order-total">
                                                        <td>Order Total</td>
                                                        <td> &#x20B9;{{ $tot }}</td>
                                                    </tr>
                                                </tfoot>
                                            </table>
                                        </div>
                                        <div class="checkout-payment">
                                            
                                                 
                                                <div class="form-row">
                                                    <div class="rabeya-form-group col-12">
                                                        <button type="button" id="subbutton" class="btn btn-style-3 btn--fullwidth">Continue Payment</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Checkout Area End -->
                        </div>
                    </div> 
                </div>     
            </div>
        </div>
        <!-- Main content wrapper end -->


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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
<script type="text/javascript">
     $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

   $("#subbutton").click(function(){

     if ($("#myForm")[0].checkValidity())

    {

     $.ajax({

                    url:`{{ url('/addcustomer') }}`,

                    type:'POST',

                    data:$('#myForm').serialize(),

                    success:function(result){
                        window.location=`{{ url('/payment') }} `;
                    }
                })
   }
   else
   {
     $("#myForm")[0].reportValidity();
   }
   })

</script>
    
</body>
</html>