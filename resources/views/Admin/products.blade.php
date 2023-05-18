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
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
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
                        <div class="dashboard-box col-lg-12">
                            <div class="row">
                            <div class="col-lg-8">
                            <h4>Products Details</h4>
                            </div>
                            <div class="col-lg-4">
                            {{-- <button class="btn btn-block btn-success" data-toggle="modal" data-target="#exampleModal"> Add Product</button> --}}
                        </div>
                    </div>

   

   

                            @if(count($products) == '0')
                             <p>No Data!</p>
                            @else
                             <div class="row">
                            <div class="col-lg-12">
                            <div class="table-responsive">
                                <table class="table table-hover  mt-4" style="font-size: 14px;" id="myTable">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Itemcode</th>
                                            <th>Itemdesc</th>
                                            <th>Brand</th>
                                            <th>Sections</th>
                                            <th>MRP</th>
                                            <th>Stock</th>
                                            <th>Photo</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($products as $k=> $product)
                                        <tr>
                                            <td>{{ $k+1 }}</td>
                                            <td>{{ $product->itemcode }}</td>
                                            <td>{{ $product->itemdesc }}</td>
                                            <td>{{ $product->brand }}</td>
                                            <td>{{ $product->sections }}</td>
                                            <td>{{ $product->MRP }}</td>
                                            <td>{{ $product->stock }}</td>
                                            @empty($product->front_image)
                                            <td class="text-danger"> No File</td>
                                            @else
                                              <td><a href="{{ url('storage/'.$product->front_image.'') }}" class="btn btn-info text-light"> View</a></td>
                                            @endempty
                                            <td><button class="btn btn-warning edit" type="button" id="" value="{{ $product->id }}"> <i class="   fas fa-edit" aria-hidden="true"></i></button></td>
                                            <td><button class="btn btn-danger  delete" type="button" id="" value="{{ $product->id }}"> <i class="fas fa-trash" aria-hidden="true"></i></button></td>
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

       <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="margin-top:65px;" id="exampleModal">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-success">
        <h5 class="modal-title text-light" id="exampleModalLabel">Product Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
         <div class="alert alert-info" id="msg" style="display: none;">
        
    </div>

    <form method="post" action="" enctype="multipart/form-data" id="myForm" autocomplete="off">
        @csrf
        <input type="hidden" name="pid">
            <div class="row">
               <div class="col-sm-6">
                  <div class="form-group">
                    <label>Itemcode</label>
                <input type="text" name="itemcode"  placeholder="Product Name" readonly>
                </div>
             </div>
              <div class="col-sm-6">
                  <div class="form-group">
                    <label>Itemdesc</label>
                <input type="text" name="itemdesc" placeholder="Group Size" readonly>
                </div>
             </div>

             <div class="col-sm-6">
                  <div class="form-group">
                    <label>Brand</label>
                <input type="text" name="brand"  placeholder="Product Name" readonly>
                </div>
             </div>
              <div class="col-sm-6">
                  <div class="form-group">
                    <label>Sections</label>
                <input type="text" name="sections" placeholder="Group Size" readonly>
                </div>
             </div>



             <div class="col-sm-6">
                  <div class="form-group">
                    <label>MRP</label>
                <input type="text" name="MRP"  placeholder="Product Name" readonly>
                </div>
             </div>
              <div class="col-sm-6">
                  <div class="form-group">
                    <label>Stock</label>
                <input type="number" name="stock" placeholder="Group Size">
                </div>
             </div>



             <div class="col-sm-6">
                  <div class="form-group">
                   <label>Cover Image</label>
  <input type="file" name="front_image" id="front_image" accept="image/*"  required>
  
</div>
             
         </div>
              <div class="col-sm-6">
                  <div class="form-group">
               <label>Addtional Image</label>      
  <input type="file" name="add_image[]" id="add_image" accept="image/*" multiple required>
 
</div>
             </div>
         </div>
               
                <div class="col-sm-4">
               <div class="form-group mt-3">
                    <button class="btn btn-success btn-block" type="button" id="update"> Update</button>
                </div>
            </div>
        </form>
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
    <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript">
        $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

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

$(document).on('click', '#update', function(event) {
     var fd = new FormData($('#myForm')[0]);
     var front_image = $('#front_image')[0].files;
     let TotalFiles = $('#add_image')[0].files.length;
     let add_image = $('#add_image')[0];
     for (let i = 0; i < TotalFiles; i++) {
        fd.append('add_image' + i, add_image.files[i]);
    }
     console.log(add_image);
     fd.append('front_image',front_image[0]);
      $.ajax({
           url: "{{ route('updateproduct') }}",
           method: 'post',
           data: fd,
           contentType: false,
           processData: false,
           dataType: 'json',
           success: function(response){
             alert(response.msg);
            window.location="{{ route('products') }}";
           }
       });
   
});

$(document).on('click', '.edit', function(event) {
        var id  = $(this).val();
            $.ajax({
                url:`{{ url('showproduct') }}/${id}`,
                method:'GET',
                dataType: 'json',
                success: function(response){
                    var res = jQuery.parseJSON(response.product);
                    console.log(res);
                    $('input[name=itemcode]').val(res.itemcode);
                    $('input[name=itemdesc]').val(res.itemdesc);
                    $('input[name=brand]').val(res.brand);
                    $('input[name=sections]').val(res.sections);
                    $('input[name=MRP]').val(res.MRP);
                    $('input[name=stock]').val(res.stock);
                    $('input[name=pid]').val(res.id);
                    $('#exampleModal').modal('show');
                }
            });
});




$(document).on('click', '.delete', function(event) {
        var id  = $(this).val();
        if(confirm('Are you Sure!'))
        {
            $.ajax({
                url:`{{ url('deleteproduct') }}/${id}`,
                method:'GET',
                dataType: 'json',
                success: function(response){
                  alert(response.msg);
                  window.location="{{ route('products') }}";
                }
            });
        }
});



    </script>
</body>

</html>