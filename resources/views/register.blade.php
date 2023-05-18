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
    .swal-wide{
    width:850px !important;
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
                            <li class="rabeya-breadcumb"><a class="rabeya-breadcumb-link" href="#">Home</a></li>
                            <li class="rabeya-breadcumb"><a class="rabeya-breadcumb-link current" href="#">Register</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- Breadcumb area End -->


           <div class="main-content-wrapper">
            <div class="page-inner section-padding">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-md-11">
                            <div class="form-box">
                                <h1 class="text-center">Register</h1>
                                <p class="text-center">Please sign up using account detail bellow.</p>
                                <form class="form" action="{{ route('register') }}" method="post">
                                @csrf


                                    <div class="rabeya-form-group row align-items-center">
                                        <div class="col-md-12 col-lg-12 col-12">
                                            <input type="text" name="Name" class="rabeya-input-form" placeholder="Name">
                                        </div>
                                @error('Name')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                                    </div>
                                    <div class="rabeya-form-group row align-items-center">
                                        <div class="col-md-12 col-lg-12 col-12">
                                            <input type="email" name="login_email" id="login_email" class="rabeya-input-form" placeholder="Email">
                                        </div>
                                @error('login_email')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                                    </div>
                                    <div class="rabeya-form-group row align-items-center">
                                        <div class="col-md-12 col-lg-12 col-12">
                                            <input type="password" name="login_password" id="login_password" class="rabeya-input-form" placeholder="Password">
                                            <button class="password-btn" type="button">Show</button>
                                        </div>
                                @error('login_password')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                                    </div>
                                    <div class="rabeya-form-group row align-items-center mb--0">
                                        <div class="col-lg-12 col-12 text-center">
                                            <button type="submit" class="btn btn--large btn-style-3">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>  
                </div>    
            </div>
        </div>
        <!-- Main content wrapper end -->

  




    </div>



    @include('footer')

    <!-- Main Wrapper End -->



    <!-- Scroll To Top -->




    

    <a class="scroll-to-top" href="#"><i class="fa fa-angle-double-up"></i></a>




<!-- Modal -->
 




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

    <script src="{{ asset('resources/') }}/js/main.js"></script></body>
 
    <script>

 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});




    </script>

</html>