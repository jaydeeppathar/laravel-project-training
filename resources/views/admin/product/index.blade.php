@extends($adminTheme)

@section('style')
<link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
@endsection

@section('content')
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">   
                <div class="row">
                    <div class="col-sm-12 m-0 p-0">
                        <h1 class="m-0">Post List
                            <a href="{{ route('product_item.create') }}"> 
                                <p class="btn btn-md btn-success float-right">
                                    <i class="fa fa-plus text-light"></i>
                                </p>
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
  <!-- /.content-header -->


      <!-- main row -->
            <div class="row m-0">
            <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered data-table">
                                <thead>    
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th>Description</th>
                                        <th>Discount</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Image</th>
                                        <th>product_categories_id</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                             </table>
                        </div>
                    </div>
                </div>
            </div>      
        </div>  
    </div>
@endsection

@section('script')
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<script type="text/javascript">
$(function () {
  
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        pageLength: 5,
        ajax: "{{ route('product_item.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'name', name: 'name'},
            {data: 'description', name: 'description'},
            {data: 'discount', name: 'discount'},
            {data: 'price', name: 'price'},
            {data: 'status', name: 'status'},
            {data: 'image', name: 'image'},
            {data: 'product_categories_id', name: 'product_categories_id'},
            {data: 'action', name: 'action'},
        ]
    });
  
});
</script>
@endsection