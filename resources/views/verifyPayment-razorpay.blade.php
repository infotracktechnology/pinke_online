

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
 
@if(!empty($html))

{{-- @php
 print_r($res); 
 @endphp --}}
    <div class="row">
    <div class="col-lg-12">
         <div class="custom-title m-5">
                                            <h2>Verify Payment</h2>
                                        </div>
                                        <div class="order-details mb--30">
                                          
                                            <table class="order-table">
                                                 
                                                <tbody>
                                                   
                                                    <tr>
                                                       
                                                        <td>Order/ transaction ID</td>
                                                        <td>Payment ID</td>
                                                        <td>Email</td>
                                                        <td>Mobile</td>
                                                        <td>Amount</td>
                                                        <td>Status</td>
                                                        
                                                    </tr>
                                                    <tr>
                                                       @php echo $html; @endphp
                                                    </tr>
                                                </tbody>
                                                
                                            </table>
                                        </div>
 <div class="col-lg-3">
                                        <a href="{{ url('/') }}" class="btn btn-style-3 btn--fullwidth w-50 text-center" >Go Back</a>
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