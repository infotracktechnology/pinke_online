<!doctype html>
<html lang="en">

  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- favicon -->
      <link rel="shortcut icon" href="{{ asset('resources/') }}/img/favicons.png">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ asset('resources/views/Admin') }}/assets/css/bootstrap.min.css" media="all">
      <!-- Fonts Awesome CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset('resources/views/Admin') }}/assets/css/all.min.css">
      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,400&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,400&display=swap" rel="stylesheet">
      <!-- Custom CSS -->
      <link rel="stylesheet" type="text/css" href="{{ asset('resources/views/Admin') }}/style.css">
      <title>Pinkeshop </title>
</head>

<body>

    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard" class="dashboard-container">
           @include('Admin.adminheader')
            <div class="db-info-wrap">
                <div class="row">
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-blue">
                                <i class="far fa-chart-bar"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Today Views</h4>
                                <h5>0</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-green">
                                <i class="fas fa-dollar-sign"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Earnings</h4>
                                <h5>0</h5>
                            </div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-purple">
                                <i class="fas fa-users"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Users</h4>
                                <h5>0</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6">
                        <div class="db-info-list">
                            <div class="dashboard-stat-icon bg-red">
                                <i class="far fa-envelope-open"></i>
                            </div>
                            <div class="dashboard-stat-content">
                                <h4>Enquiry</h4>
                                <h5>0</h5>
                            </div>
                        </div>
                    </div>
                </div>
                 
    </div>
    <!-- end Container Wrapper -->
    <!-- *Scripts* -->
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('resources/views/Admin') }}/assets/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="{{ asset('resources/views/Admin') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('resources/views/Admin') }}/assets/js/canvasjs.min.js"></script>
    <script src="{{ asset('resources/views/Admin') }}/assets/js/chart.js"></script>
    <script src="{{ asset('resources/views/Admin') }}/assets/js/counterup.min.js"></script>
    <script src="{{ asset('resources/views/Admin') }}/assets/js/jquery.slicknav.js"></script>
    <script src="{{ asset('resources/views/Admin') }}/assets/js/dashboard-custom.js"></script>
</body>

</html>