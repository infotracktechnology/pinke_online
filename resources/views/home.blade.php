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

             <!-- Slider area Start -->
             <div class="slider-area">
            <div class="slider-wrapper rabeya-slider-wrapper owl-carousel" id="homepage-slider">

               <!-- Single Slider Start -->
               <div class="single-slider" style="background-image: url(http://pinkeonline.com/resources/img/slider/banner1.jpeg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="slider-content text-center">
                                    <h4 class="heading-secondary" data-animation="fadeInUp" data-delay="0s" data-duration="1s" style="color:#495057;">Get 30% Discount</h4>
                                    <h1 class="heading-primary rabeya-heading-primary" data-animation="fadeInUp" data-delay="1s" data-duration="2s" style="color:#495057;">Awesome Collections</h1>
                                    <p class="rabeya-slider-text" data-animation="fadeInUp" data-delay="2s" data-duration="3s" style="color:#495057;">Lorem ipsum dolor sit amet, consectetur adipisici<br> Sit sapiente veritatis non quia vitae</p>
                                    <a href="shop.html" class="btn slider-btn btn-style-6" data-animation="fadeInUp" data-delay="3s" data-duration="4s" style="background-color:#495057;color:#fff;">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider End -->

                <!-- Single Slider Start -->
                <div class="single-slider" style="background-image: url(http://pinkeonline.com/resources/img/slider/banner2.jpeg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <div class="slider-content text-center">
                                    <h4 class="heading-secondary" data-animation="fadeInUp" data-delay="0s" data-duration="1s" style="color:#495057;">Get 30% Discount</h4>
                                    <h1 class="heading-primary rabeya-heading-primary" data-animation="fadeInUp" data-delay="1s" data-duration="2s" style="color:#495057;">Awesome Collections</h1>
                                    <p class="rabeya-slider-text" data-animation="fadeInUp" data-delay="2s" data-duration="3s" style="color:#495057;">Lorem ipsum dolor sit amet, consectetur adipisici<br> Sit sapiente veritatis non quia vitae</p>
                                    <a href="shop.html" class="btn slider-btn btn-style-6" data-animation="fadeInUp" data-delay="3s" data-duration="4s" style="background-color:#495057;color:#fff;">Purchase Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider End -->

            </div>
        </div>
        <!-- Slider area End -->

        <!-- Team area Start -->
        <section class="team-area ptb--80 text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title text-center mb-50">
                                <h2>Our Bestsellers <i class="fa fa-shopping-cart"></i></h2>
                            </div>
                        </div>
                    </div>
                    <div class="row pt--40">
                        <div class="col-lg-3 col-sm-6 mb-sm--30 mb-md--30">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="https://assets.turbologo.com/blog/en/2020/01/19084713/levis-cover.png" alt="team" height="250">
                                    <div class="team-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                                 
                                 
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-sm--30 mb-md--30">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="https://seeklogo.com/images/O/otto-shirts-logo-69DB277294-seeklogo.com.png" alt="team" height="250">
                                    <div class="team-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6 mb-xsm--30">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="https://seeklogo.com/images/A/allen-solly-logo-965039B17A-seeklogo.com.png" alt="team" height="250">
                                    <div class="team-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                                
                                 
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <div class="team-member">
                                <div class="team-img">
                                    <img src="{{ asset('resources/') }}/img/team/samjho.jpg" alt="team" height="250">
                                    <div class="team-social">
                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                        <a href="#"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                </div>
                                
                                 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team area End -->



        <!-- deal-section Start  -->

        <section class="deal-section">

            <div class="container">

                <div class="row">

                    <div class="col-12">

                        <!-- Tranding Product box Start -->

                        <div class="variable-product rabeya-deal-area deal-area ptb--100">

                            <div class="overlay"></div>

                            <div class="rabeya-box-footer">

                                <div class="rabeya-box-desc">

                                    <p class="deal-title">Deal of the week</p>


                                </div>

                            </div>

                            <div class="rabeya-countdown">

                                <div class="product-countdown" data-countdown="2022/12/31">

                                </div>

                            </div>

                        </div>

                        <!-- Tranding Product box End --> 

                    </div>

                </div>

            </div>

        </section>

        <!-- deal-section End  -->




 



 

        <!-- policy area start -->

        <div class="policy-area">

            <div class="container">

                <div class="row pb--50 policy-box">

                   

    

                    <!-- Method Box Start -->

                    <div class="col-lg-4 col-md-6 col-sm-6 mb--30">

                        <div class="method-box rabeya-method-box grey-color">

                            <div class="rabeya-method-content text-center">

                                <i class="fa fa-phone"></i>

                                <h4>Have a question?</h4>

                                <p>+91 4259-229961</p>

                            </div>

                        </div>

                    </div>

                    <!-- Method Box End -->

    

                    <!-- Method Box Start -->

                    <div class="col-lg-4 col-md-6 col-sm-6 mb--30">

                        <div class="method-box rabeya-method-box grey-color">

                            <div class="rabeya-method-content text-center">

                                <i class="fa fa-dollar"></i>

                                <h4>100% Money Back</h4>

                                <p>Guarantee</p>

                            </div>

                        </div>

                    </div>

                    <!-- Method Box End -->

    

                    <!-- Method Box Start -->

                    <div class="col-lg-4 col-md-6 col-sm-6 mb--30">

                        <div class="method-box rabeya-method-box grey-color">

                            <div class="rabeya-method-content text-center">

                                <i class="fa fa-briefcase"></i>

                                <h4>Free Support 24/7</h4>

                                <p>Online 24hrs</p>

                            </div>

                        </div>

                    </div>

                    <!-- Method Box End -->

    

                </div>

            </div>

        </div>

        <!-- policy area end -->

  




    </div>



    @include('footer')

    <!-- Main Wrapper End -->



    <!-- Scroll To Top -->


{{-- <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true" id="LoginModal" style="left: 20%;right: 20%;">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        

     <div class="modal-body" style="padding: 0px 0px 0px 0px;">
         
         <div class="row">
            <div class="col-md-6">
                <img src="{{ asset('resources/') }}/img/login.png" class="rounded d-block img-fluid" />
            </div>
            <div class="col-md-6" style="margin-top: 20px;">
                <form method="post"  enctype="multipart/form-data" id="LoginForm" onsubmit="return false;">
                <div class="form-group" style="padding:1rem;">
                <label for="recipient-name" class="col-form-label">Email:</label>
                <input type="email" class="form-control form-control-lg" id="Email" placeholder="Enter your email" required>
                </div>
                <div class="form-group" style="padding:1rem;">
                <label for="message-text" class="col-form-label">Password:</label>
                <input type="password" class="form-control form-control-lg" id="Password" placeholder="Enter your password" required>
                </div>
                 <div class="form-group" style="padding:1rem;">
                <a class="" href="{{ route('useregister') }}">New to Pinke? Create an account</a>
                </div>
                <div class="form-group" style="padding:1.6rem;">
                 <button type="submit" class="btn btn-primary" style="margin-bottom: 15px;">Login</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal" style="margin-bottom: 15px;">Close</button>
             </div>
            </form>
            </div>
        </div>
         
    </div>
    </div>
  </div>
</div> --}}

    

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


$(document).ready(function() {
    $('#LoginModal').modal('show');
});

 

    </script>

</html>