

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


<style>

#gallery_01 img {
border: 2px solid white;
width: 96px;
}


#gallery_01 .active img {
border: 2px solid #333 !important;
}


.bg-primary
{
    background-color: #ab1811;
}

.bg-secondary
{
    background-color: #153b33;
}


</style>

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
                            <li class="rabeya-breadcumb"><a class="rabeya-breadcumb-link">Home</a></li>
                            <li class="rabeya-breadcumb"><a class="rabeya-breadcumb-link current">Single Product</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
@php 
$stock = $product->stock > 0 ? 'In stock' : 'Out stock';
$stclass = $product->stock > 0 ? 'text-success' : 'text-danger';
@endphp
     <!-- Main Content Wrapper Start -->
        <div class="main-content-wrapper">
            <div class="single-products-area section-padding">
                <!-- Single Product Start -->
                <section class="single-product">
                    <div class="container">
                        <div class="row">
                           <div class="col-lg-5">
           <div class="zoom-wrapper">
                    <div class="zoom-left">
                        <img class="zoom-img" id="zoom_03"
                             src="{{ url('storage/'.$product->front_image.'')}}"
                             data-zoom-image="{{ url('storage/'.$product->front_image.'')}}"
                             width="320" height="320" />


                        <div id="gallery_01" class="pt--20" style="float:left;">

                             @foreach ($add_images as $key => $image) 
                             @empty($image)
                             @else
                            
                            <a href="#" class="elevatezoom-gallery {{ $key === 0 ? 'active' : ''  }}" data-update=""
                               data-image="{{ url('storage/addimages/'.$image.'')}}"
                               data-zoom-image="{{ url('storage/addimages/'.$image.'')}}">
                                <img src="{{ url('storage/addimages/'.$image.'')}}"  width="100"/>
                            </a>

                            @endempty
                            @endforeach

                        </div>
                    </div>

         </div>
     </div>
                            <div class="col-lg-7">
                                <!-- Single Product Content Start -->
                                <div class="single-product-content card">
                                <form method="post"  enctype="multipart/form-data" id="myform" autocomplete="off"> 
                                        <h3 class="product-title">{{ $product->itemdesc }}</h3>
                                        <input type="hidden" name="Proid" value="{{ $product->id }}">
                                        <div class="product-price">
                                            <span class="sale-price text-success">&#x20B9; {{ $product->MRP }}.00</span><span class="regular-price">&#x20B9; {{ $product->MRP+500 }}.00</span>
                                        </div>
                                        <p class="product-desc"> </p>
                                        <p><b>Availability: <span class="{{ $stclass }}">{{ $stock }}</span> </b></p>
                                        <p><b>Brand: {{ $product->brand }}</b></p>
                                        <div class="product-varients">
                                            
                                            <div class="rabeya-product-size pb--20">
                                                <span class="rabeya-product-label"><b>Design: {{ $product->design }}</b></span>
                                            </div>
                                            
                                        </div>

                    <div class="form-group">
                      <label class="form-label">Color:</label>
                      <div class="row gutters-xs">
                        <div class="col-auto">
                          <label class="colorinput">
                            <input name="color" type="radio" value="primary" class="colorinput-input">
                            <span class="colorinput-color bg-primary"></span>
                          </label>
                        </div>
                        <div class="col-auto">
                          <label class="colorinput">
                            <input name="color" type="radio" value="secondary" class="colorinput-input">
                            <span class="colorinput-color bg-secondary"></span>
                          </label>
                        </div>
                         
                       
                      </div>
                    </div>

                                        <div class="form-group">
                      <label class="form-label">Size:</label>

                      <div class="selectgroup w-100">

                        <label class="selectgroup-item">
                          <input type="radio" name="radio1" value="1" class="selectgroup-input-radio" checked="">
                          <span class="selectgroup-button">34</span>
                        </label>

                        <label class="selectgroup-item">
                          <input type="radio" name="radio1" value="2" class="selectgroup-input-radio">
                          <span class="selectgroup-button">38</span>
                        </label>
                        
                      </div>
                    </div>
                                       
                                        <button class="btn  btn-style-6 text-light" type="button" id="addcart">Add to cart
                                    </button>
                                </form>
                                </div>
                                <!-- Single Product Content End -->
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Single Product End -->


                 <!-- Single Product Tab Start -->
                <section class="single-product-tab pb--40 pt--40">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="single-rabeya-product-tab nav nav-tab" id="singleProductTab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-desc-tab" data-toggle="tab" href="#nav-desc" role="tab" aria-controls="nav-desc" aria-selected="true">Description</a>
                                    <a class="nav-item nav-link" id="nav-review-tab" data-toggle="tab" href="#nav-review" role="tab" aria-controls="nav-review" aria-selected="true">review Details</a>
                                </div>
                                <div class="single-rabeya-ptab-content tab-content">
                                    <div class="tab-pane fade show active" id="nav-desc" role="tabpanel" aria-labelledby="nav-desc-tab">
                                        <p class="product-description">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nesciunt incidunt laudantium nisi, enim eligendi suscipit iste maiores ratione molestiae soluta in illum, praesentium possimus, iure ad. Minima aspernatur dolor dolorum vero officia repudiandae! Corporis esse libero mollitia nobis debitis soluta facilis vero numquam voluptatum, voluptatibus est ducimus labore impedit consequuntur minus aspernatur incidunt. Provident, quos repellendus facilis obcaecati, id, autem minima tempore facere eos molestias velit magnam accusamus? Facere reprehenderit necessitatibus dicta nihil modi eveniet at perspiciatis, ullam dolorem numquam sapiente quis vitae reiciendis, corrupti incidunt aliquid, odit sed iure ex nemo maxime voluptate quia optio voluptas! Recusandae, enim ducimus!</p>
                                    </div>
                                    <div class="tab-pane" role="tabpanel" id="nav-review" aria-labelledby="nav-review-tab">
                                        <div class="review-area">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="review-area">
                                                        <h2>Write your review</h2>
                                                        <div class="your-rating">
                                                            <h5>Quality</h5>
                                                            <span class="ratings">
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                            </span>
                                                        </div>
                                                        <form class="review-form">
                                                            <div class="review-rabeya-form-group">
                                                                <label for="reviewTitle" class="review-form-label">Title <sup>*</sup></label>
                                                                <input id="reviewTitle" type="text" name="reveiw-title" class="review-rabeya-input-form">
                                                            </div>
                                                            <div class="review-rabeya-form-group">
                                                                <label for="authorName" class="review-form-label">Name <sup>*</sup></label>
                                                                <input id="authorName" type="text" class="review-rabeya-input-form">
                                                            </div>
                                                            <div class="review-rabeya-form-group">
                                                                <label for="review" class="review-form-label">Your review <sup>*</sup></label>
                                                                <textarea id="review" class="review-rabeya-input-form textarea-review"></textarea>
                                                            </div>
                                                            <div class="review-btn-group">
                                                                <button type="button" class="btn review-form__btn">Submit</button>
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Single Product Tab End -->
                

                <!-- Related Product Area Start -->
                <section class="related-product">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="text-center custom-title">
                                    <h2>Related Products</h2>
                                </div>                        
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="related-product-carousel owl-carousel js-related-product">
                                    @foreach ($raltive as $es => $rproduct) 
                                    <!-- Product Box Start -->
                                    <div class="product-box variable-product">
                                        <div class="rabeya-box-image">
                                            <img src="{{ url('/storage') }}/{{ $rproduct->front_image }}" alt="product image" class="primary_image">
                                            <img src="{{ url('/storage') }}/{{ $rproduct->front_image }}" alt="product image" class="secondary_image">
                                            <a href="{{ url('singleproduct') }}/{{ $rproduct->id }}/{{ $rproduct->brand }}"  class="quick-view"> <i class="fa fa-eye"></i> </a>
                                        </div>
                                        <div class="rabeya-box-footer">
                                            <div class="rabeya-box-desc">
                                                <a href="single-product.html" class="rabeya-box-title">{{$rproduct->itemdesc }}-{{ $rproduct->sizes }}</a>
                                                <p class="rabeya-box-price">
                                                     <span class="sale-price text-success">&#x20B9; {{ $rproduct->MRP }}.00</span><span class="regular-price">&#x20B9; {{ $rproduct->MRP+500 }}.00</span>
                                                </p>
                                            </div>
                                            <div class="rabeya-box-link">
                                              <a href="#" class="btn add-to-cart btn-style-7"><i class="fa fa-heart"></i> 
                                                <a href="#" class="btn add-to-cart btn-style-7"><i class="fa fa-share-alt"></i></a>  
                                                <a href="#" class="btn add-to-cart btn-style-7"><i class="fa fa-link"></i> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Product Box End -->
                                     @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Related Product Area End -->




                 
 
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
   <script type="text/javascript" src="https://cdn.rawgit.com/igorlino/elevatezoom-plus/1.1.6/src/jquery.ez-plus.js"></script>



</body>

    

    <script>

  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});



  $(document).on('click', '#addcart', function(event) {
    if ($("#myform")[0].checkValidity())
{
            $.ajax({
                url:`{{ url('/addcart') }}`,
                method:'POST',
                data:$('#myform').serialize(),
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
        }
        else
        {
            $("#myform")[0].reportValidity();
        }
});


 $("#zoom_03").ezPlus({
 gallery: 'gallery_01',
 cursor: 'pointer',
 galleryActiveClass: "active",
 imageCrossfade: true,
 responsive:true,
 scrollZoom:true,
});

$("#zoom_03").bind("click", function (e) {
 var ez = $('#zoom_03').data('ezPlus');
 ez.closeAll();
 $.fancyboxPlus(ez.getGalleryList());
 return false;
});
    </script>

</html>