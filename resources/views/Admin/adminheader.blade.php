 <div class="dashboard-header sticky-header">
                <div class="content-left  logo-section pull-left">
                    <h1><a href="javascript:void(0);"> <img src="{{ asset('resources/') }}/img/logo-3.jpg" alt="logo"></a></h1>
                </div>
                <div class="heaer-content-right pull-right">
                    <div class="search-field">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" id="search" placeholder="Search Now">
                                <a href="javascript:void(0);"><span class="search_btn"><i class="fa fa-search" aria-hidden="true"></i></span></a>
                            </div>
                        </form>
                    </div>
                    
                     
                    <div class="dropdown">
                        <a class="dropdown-toggle" data-toggle="dropdown">
                            <div class="dropdown-item profile-sec">
                                <img src="{{ asset('resources/views/Admin') }}/assets/images/comment.jpg" alt="">
                                <span>{{ Auth::user()->name }} </span>
                                <i class="fas fa-caret-down"></i>
                            </div>
                        </a>
                        <div class="dropdown-menu account-menu">
                            <ul>
                                
                                <li><a href="javascript:void(0);"><i class="fas fa-user-tie"></i>Profile</a></li>
                                
                                <li><a href="{{ route('logout') }}"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="dashboard-navigation">
                <!-- Responsive Navigation Trigger -->
                <div id="dashboard-Navigation" class="slick-nav"></div>
                <div id="navigation" class="navigation-container">
                    <ul>
                        <li class="active-menu"><a href="{{ route('admindashboard') }}"><i class="far fa-chart-bar"></i> Dashboard</a></li>
                         <li class="active-menu"><a href="{{ route('productupload') }}"><i class="fas fa-upload"></i> Product File Upload</a></li>
                         <li class="active-menu"><a href="{{ route('products') }}"><i class="far fa-chart-bar"></i> Products Details</a></li>
                        
                         
                    </ul>
                </div>
            </div>