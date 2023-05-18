

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

      <div class="breadcumb-area bg--black ptb--100">
            <div class="overlay"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <ul class="breadcumb">
                            <li class="rabeya-breadcumb"><a class="rabeya-breadcumb-link" >Home</a></li>
                            <li class="rabeya-breadcumb"><a class="rabeya-breadcumb-link current">Shop</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

<div class="main-content-wrapper">
            <div class="shop-area section-padding">
                <div class="container">
                    <div class="row">
                     <div class="col-lg-3 order-lg-1 order-2">
                            <!-- Sidebar Start -->
                            <aside class="sidebar shop-sidebar">
                                <div class="search-filter">

                                    <!-- Category Search filter Start -->
                                    <div class="filter-box mb--30">
                                        <div class="filter-title">
                                            <h2>Filter by brand</h2>
                                        </div>
                                        <ul class="search-filter-list">
                                            <li class="custom-checkbox">
                                                <input type="checkbox" name="bookandboardgame" id="cat" class="rabeya-checkbox">
                                                <label for="cat" class="rabeya-checkbox-label">Dresses</label>
                                            </li>
                                            <li class="custom-checkbox">
                                                <input type="checkbox" name="babydols" id="1" class="rabeya-checkbox">
                                                <label for="1" class="rabeya-checkbox-label">Accessories</label>
                                            </li>
                                            <li class="custom-checkbox">
                                                <input type="checkbox" name="babydols" id="2" class="rabeya-checkbox">
                                                <label for="2" class="rabeya-checkbox-label">Toys</label>
                                            </li>
                                            <li class="custom-checkbox">
                                                <input type="checkbox" name="babydols" id="3" class="rabeya-checkbox">
                                                <label for="3" class="rabeya-checkbox-label">Stacking</label>
                                            </li>
                                            <li class="custom-checkbox">
                                                <input type="checkbox" name="babydols" id="4" class="rabeya-checkbox">
                                                <label for="4" class="rabeya-checkbox-label">Bath Toys</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Category Search filter End -->

                                    <!-- Brand Search filter Start -->
                                    <div class="filter-box mb--30">
                                        <div class="filter-title">
                                            <h2>Filter by Products</h2>
                                        </div>
                                        <ul class="search-filter-list">
                                            <li class="custom-checkbox">
                                                <input type="checkbox" name="bookandboardgame" id="bookandboardgame" class="rabeya-checkbox">
                                                <label for="bookandboardgame" class="rabeya-checkbox-label">Nike</label>
                                            </li>
                                            <li class="custom-checkbox">
                                                <input type="checkbox" name="babydols" id="5" class="rabeya-checkbox">
                                                <label for="5" class="rabeya-checkbox-label">rabeya</label>
                                            </li>
                                            <li class="custom-checkbox">
                                                <input type="checkbox" name="babydols" id="6" class="rabeya-checkbox">
                                                <label for="6" class="rabeya-checkbox-label">Lorem</label>
                                            </li>
                                            <li class="custom-checkbox">
                                                <input type="checkbox" name="babydols" id="7" class="rabeya-checkbox">
                                                <label for="7" class="rabeya-checkbox-label">Ipsum</label>
                                            </li>
                                            <li class="custom-checkbox">
                                                <input type="checkbox" name="babydols" id="8" class="rabeya-checkbox">
                                                <label for="8" class="rabeya-checkbox-label">Dolet</label>
                                            </li>
                                        </ul>
                                    </div>
                                    <!-- Category Search filter End -->

                                    <!-- Price Search filter Start -->
                                    <div class="filter-box mb--30">
                                        <div class="filter-title">
                                            <h2>Filter by price</h2>
                                        </div>
                                        <ul class="search-filter-list">
                                            <li class="custom-radio">
                                                <input type="radio" name="price" id="sixtentoeighteen" class="rabeya-radio-input">
                                                <label for="sixtentoeighteen" class="rabeya-radio-label"><span></span> </label>
                                            </li>
                                            <li class="custom-radio">
                                                <input type="radio" name="price" id="twentyfivetothirtytwo" class="rabeya-radio-input">
                                                <label for="twentyfivetothirtytwo" class="rabeya-radio-label"><span></span> </label>
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <!-- Price Search filter End -->

                                   

                                
                                </div>
                            </aside>
                            <!-- Sidebar End -->
                        </div>
      <div class="col-lg-9 order-lg-2 order-1">                        
                            <div class="shop-toolbar d-flex flex-md-row flex-column justify-content-between align-items-md-center">
                                <div class="rabeya-shop-grid-list">
                                    <ul class="nav">
                                        <li>
                                            <a data-toggle="tab" href="#grid"><i class="fa fa-th"></i></a>
                                        </li>
                                        <li>
                                            <a class="active"  data-toggle="tab" href="#list"><i class="fa fa-list"></i></a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="rabeya-short">
                                    <label>Short By:</label>
                                    <select class="short-select">
                                        <option value="">--select--</option>
                                        <option value="1">Price, low to high</option>
                                        <option value="2">Price, high to low</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Shop Layout Start -->
                            <div class="main-shop-wrapper">
                                <div class="tab-content" id="myTabContent-2">
                                    <div class="tab-pane show active" id="grid">
                                        <div class="product-grid-view">
                                            <div class="row" id="product-grid">

                                                

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

    <script src="{{ asset('resources/') }}/js/main.js"></script></body>

    

    <script>

 $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


 $(document).ready(function(event) {

            $.ajax({
                url:`{{ url('api/productlist') }}`,
                method:'GET',
                dataType: 'json',
                success: function(response){
                    console.log(response);
                    $.each(response, function(index, val) {
                        $('#product-grid').append(`<div class="col-xl-4 col-md-6"><div class="product-box variable-product"> <div class="rabeya-box-image"> <img src="storage/${val.front_image}" alt="product image" class="primary_image "> <img src="storage/${val.front_image}" alt="product image" class="secondary_image img-fluid"> <a href="singleproduct/${val.id}/${val.brand}" class="quick-view"> <i class="fa fa-eye"></i> </a> </div><div class="rabeya-box-footer"> <div class="rabeya-box-desc"> <a class="rabeya-box-title">${val.itemdesc}-${val.sizes}</a> <p class="rabeya-box-price"> <span class="sale-price text-success">&#x20B9; ${val.MRP}.00</span><span class="regular-price">&#x20B9; ${val.MRP+500}.00</span><br><span>Brand :  ${val.brand}</span></p></div><div class="rabeya-box-link"> <a href="#" class="btn add-to-cart btn-style-7"><i class="fa fa-heart"></i> <a href="#" class="btn add-to-cart btn-style-7"><i class="fa fa-share-alt"></i></a>  <a href="#" class="btn add-to-cart btn-style-7"><i class="fa fa-link"></i> </a></div></div></div></div>`);
                    });
                }
            });
});

    </script>

</html>