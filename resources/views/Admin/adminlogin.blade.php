
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



    <div class="login-page">
        <div class="login-from-wrap">
            <form class="login-from" action="{{ route('adminlogin') }}" method="POST" enctype="">
                 @csrf
                  @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                <h1 class="site-title">
                    <a href="#">
                         <img src="{{ asset('resources/') }}/img/logo-3.jpg" alt="logo">
                    </a>
                </h1>
                <div class="form-group">
                    <label for="first_name1">Email*</label>
                    <input type="text" name="email" class="validate" required>

                </div>
                <div class="form-group">
                    <label for="last_name">Password*</label>
                    <input id="last_name" type="password"  name="password" class="validate" required>
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">Login</button>
                </div>
               
            </form>
        </div>
    </div>

    <!-- *Scripts* -->
    <script src="{{ asset('resources/views/Admin') }}/assets/js/jquery-3.2.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="{{ asset('resources/views/Admin') }}/assets/js/bootstrap.min.js"></script>
    <script src="{{ asset('resources/views/Admin') }}/assets/js/canvasjs.min.js"></script>
    <script src="{{ asset('resources/views/Admin') }}/assets/js/counterup.min.js"></script>
    <script src="{{ asset('resources/views/Admin') }}/assets/js/jquery.slicknav.js"></script>
    <script src="{{ asset('resources/views/Admin') }}/assets/js/dashboard-custom.js"></script>
</body>
</html>