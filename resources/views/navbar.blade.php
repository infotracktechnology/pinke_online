  <!-- Header area Start -->

        <header class="header rabeya-header">

        

        <div class="header-top rabeya-header-top d-none d-md-block d-none d-md-block d-none d-md-block">
                <div class="container">
                    <div class="row no-gutters align-items-center">
                        <div class="col-md-6 text-center text-md-left">

                            <!-- Header Top Nav Start -->
                            <div class="language-currancy rabeya-language-currancy d-flex justify-content-md-start justify-content-center">
                            
                               
                            </div>
                            <!-- Header Top Nav End -->

                        </div>
                        <div class="col-lg-4 col-md-5 offset-lg-2 offset-md-1">

                            <!-- Search Form Start -->
                            
                            <form action="#" class="search-form rabeya-search-form">
                                <input type="text" name="search" id="search" class="rabeya-search-input" placeholder="Search Product">
                                <button type="submit" class="rabeya-search-btn form-btn rabeya-form-btn">
                                    <i class="fa fa-search"></i>
                                </button>
                            </form>

                            <!-- Search Form End -->

                        </div>
                    </div>
                </div>
            </div>


            <div class="header-bottom rabeya-header-bottom fixed-header">

                <div class="container">

                    <div class="row no-gutters align-items-center">
                        


                        <div class="col-lg-3 col-md-3 col-sm-4 col-4 text-md-left">

                            <a class="logo-box" href="{{ route('home') }}">

                                <img src="{{ asset('resources/') }}/img/logo-3.jpg" alt="logo" height="75">

                            </a>

                        </div>

                        <div class="col-lg-9 col-md-9 col-sm-8 col-8">

                            <div class="rabeya-header-bottom-right">

                                <nav class="main-navigation rabeya-main-navigation">

                                    <!-- Mainmenu Start -->

                                    <ul class="mainmenu rabeya-main-menu">

                                     

                                        <li class="rabeya-mainmenu-itm"><a href="{{ route('home') }}" class="rabeya-mainmenu-link">Home</a></li>

                                        <li class="rabeya-mainmenu-itm"><a href="{{ route('gents') }}" class="rabeya-mainmenu-link">Gents</a></li>

                                        <li class="rabeya-mainmenu-itm"><a href="javascript:void(0);" class="rabeya-mainmenu-link">Boys</a></li>

                                        <li class="rabeya-mainmenu-itm"><a href="javascript:void(0);" class="rabeya-mainmenu-link">Girls</a></li>

                                        <li class="rabeya-mainmenu-itm"><a href="javascript:void(0);" class="rabeya-mainmenu-link">Ladies</a></li>

                                       

                                        <li class="rabeya-mainmenu-itm"><a href="javascript:void(0);" class="rabeya-mainmenu-link">Contact Us</a></li>

                                    </ul>

                                    <!-- Mainmenu End -->

                                </nav>

                                <!-- Header Cart Start -->

                                <div class="header-cart header-area-cart">


                                <?php
                                $count = !empty(Session::get('cart')) ? count(Session::get('cart')) : 0;
                                $user =  Session::has('userid') ? Session::get('username') : '';
                                $active = !empty(Session::get('userid')) ? true : false;
                                ?>

    

                                        @if($active)
                                        <a href="{{ route('userlogout') }}" class="header-whislist"><i class="fa fa-sign-out"></i> </a>
                                        @else
                                        <a href="{{ route('userlogin') }}" class="header-whislist"><i class="fa fa-user"></i></a>
                                        @endif

                                         <a class="rabeya-cart-toggle text-dark" href="javascript:void(0);">
                                        <i class="fa fa-shopping-cart header-shop-icon"></i>
                                        <sup class="cart-badge" id="cart-count">{{ $count }}</sup>
                                    
                                         </a>

                                   


                                    

                                </div>

                                <!-- Header Cart End -->
                                 

                            </div>

                        </div>

                    </div>

                    <div class="row">

                        <div class="col-12">

                            <div class="mobile-menu mobile__menu"></div>

                        </div>

                    </div>

                </div>

            </div>

        </header>

        <!-- Header area End -->

