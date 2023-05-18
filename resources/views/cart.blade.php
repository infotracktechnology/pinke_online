

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

    <!-- Main content wrapper Start -->
        <div class="main-content-wrapper">
            <div class="shop-area section-padding">
                <div class="container">
                    @if(!empty(Session::get('cart')))
                    <div class="row">
                  
                  <div class="col-lg-10 order-1">                        
                            <div class="shop-toolbar d-flex flex-md-row flex-column justify-content-between align-items-md-center">
                               
                            </div>
                            
                            <!-- Shop Layout Start -->
                            <div class="main-shop-wrapper">
                                <div class="tab-content" id="myTabContent-2">
                                <div class="checkout-form">
                                 <form action="#" class="form" id="Orderform">
                                    <div class="tab-pane show active" id="list">
                                        <div class="product-list-view">
                                            @foreach(Session::get('cart') as $i => $carts)
                                            @foreach($carts as $k => $cart)
                                            <div class="product-box h-50 product-box--list variable-product">
                                                 <input type="hidden" name="pid[]" value="{{ $cart['id'] }}">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="rabeya-box-image h-50">
                                                            <img src="{{url('/storage')}}/{{$cart['front_image']}}" alt="product image" class="primary_image">
                                                            <img src="{{url('/storage')}}/{{$cart['front_image']}}" alt="product image" class="secondary_image">
                                                             
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="rabeya-box-desc">
                                                            <a  class="rabeya-box-title">{{ $cart['itemdesc'] }}</a>

                                                            <p class="rabeya-box-price">
                                                                <span class="sale-price text-success">&#x20B9; {{ $cart['MRP'] }}</span>
                                                                <span class="regular-price">&#x20B9; {{ $cart['MRP']+500 }}</span>
                                                            </p>


                                                <div class="form-row">
                                                <div class="rabeya-form-group col-md-2">
                                                   
                                                <select class="country_select" name="qty[]">
                                                    @for($c=1;$c<=$cart['stock'];$c++)
                                                    <option value="{{ $c }}">Qty : {{ $c }}</option>
                                                    @endfor
                                                </select>
                                            </div>
                                            </div><br>

                                                     <p class="rabeya-box-price">
                                                                
                                                               
                                                            </p>  

                                                            <button type="button" class="btn add-to-cart btn-style-4  text-light cartrev" value="{{  $cart['id'] }}"><i class="fa fa-trash remove"></i></button>
                                                        </div>
                                                    </div>
                                                </div>
                                               
                                            

                                            </div>
                                             @endforeach
                                             @endforeach
                                
                            </div>
                            <!-- Shop Layout End -->
                        </div>
                         
                         </form>
                    </div>
                                             
                </div>
            </div>
           
        </div>

        

    </div>
<div class="row">
                  
                  <div class="col-lg-5">  
    <div class="form-row">
                                                    <div class="rabeya-form-group col-12">
                                                        <button type="button" class="btn btn-style-3 btn--fullwidth" id="ConfrimOrder">Confrim Order</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
     @else
            <p> No Items!</p>
           @endif


 </div>
</div>
</div>
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

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    
<script type="text/javascript">
     $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

     $(document).on('click', '.cartrev', function(event) {
        var cid = $(this).val();

        $.ajax({
                url:`{{ url('/cartdelete') }}/${cid}`,
                method:'GET',
                dataType: 'text',
                success: function(response){
                     var res = jQuery.parseJSON(response);
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2500,
                        timerProgressBar: true,
                      didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                          }
                        })
                        Toast.fire({
                          icon: 'success',
                          html: `<h4>${res.msg}</h4>`,
                        }).then(function () {
                            window.location='{{ route('gents') }}';
                        })
                }
            });

     });

     $('#ConfrimOrder').click(function(){

        $.ajax({
                url:`{{ url('/ConfrimOrder') }}`,
                method:'POST',
                dataType: 'text',
                data : $("#Orderform").serialize(),
                success: function(response){
                    var res = jQuery.parseJSON(response);
                    console.log(res);
                    const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 2500,
                        timerProgressBar: true,
                      didOpen: (toast) => {
                        toast.addEventListener('mouseenter', Swal.stopTimer)
                        toast.addEventListener('mouseleave', Swal.resumeTimer)
                          }
                        })
                        Toast.fire({
                          icon: 'success',
                          html: `<h4>${res.msg}</h4>`,
                        }).then(function () {
                            window.location='{{ url('/checkout') }}';
                        })
                }
            });
     })

</script>
    
</body>
</html>