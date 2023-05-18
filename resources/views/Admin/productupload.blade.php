<!doctype html>
<html lang="en">

  <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="csrf-token" content="{{ csrf_token() }}">
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
       <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
</head>

<body>

    <!-- start Container Wrapper -->
    <div id="container-wrapper">
        <!-- Dashboard -->
        <div id="dashboard" class="dashboard-container">
           @include('Admin.adminheader')
              <div class="db-info-wrap">
                <div class="row">
                        <div class="dashboard-box col-lg-12">

                      <h4>Products File Upload</h4>
                <form method="post" action="{{ route('productfileupload') }}" enctype="multipart/form-data" id="myForm" autocomplete="off">
                    @csrf
            <div class="row">
               <div class="col-sm-6">
                  <div class="form-group">
                <div class="custom-file">
  <input type="file" name="product_file" class="custom-file-input" accept=".csv" onchange="return fileValidation(this);" required>
  <label class="custom-file-label" for="customFile">Choose file</label>
</div>
                </div>
             </div>
              <div class="col-sm-3">
                  <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit" id="Upload"> Upload</button>
                </div>
             </div>
         </div>
     </form>

     @if(count($upload) == '0')
                             <p>No Data!</p>
                            @else
                             <div class="row">
                            <div class="col-lg-12">
                                 
                            <div class="table-responsive mt-4">
                                <h4>File Upload History</h4>
                                <table class="table table-hover  mt-4" style="font-size: 14px;" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Date</th>
                                            <th>No.Of. Records</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($upload as $k=> $data )
                                        <tr>
                                            <td>{{ $k+1 }}</td>
                                            <td>{{ $data->udate }}</td>
                                            <td>{{ $data->uno }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            </div>
                            @endif
                
                         </div>
                    </div>


                     
                 
        </div>
        <!-- Dashboard / End -->
  

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
      <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
    function fileValidation(el) {
           
           var filePath = el.value;
            var allowedExtensions = /(\.csv)$/i;

            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                el.value = '';
                return false;
            }
            else
            {

            }
        }

        $(document).ready( function () {
$('#myTable').DataTable( {
    buttons: [
        {
            extend: 'csvHtml5',
            text: 'Copy all data',
            exportOptions: {
                modifier: {
                    search: 'none'
                }
            }
        }
    ]
} );
} );
    </script>
</body>

</html>