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
                    <div class="col-sm-8 m-0 p-0">
                        <h1 class="m-0">
                            Contact List
                        </h1>
                    </div>
                 @if (Session::get('success'))
                  <div class="alert alert-danger float-right col-md-4" role="alert">
                      {{ Session::get('success') }}
                  </div>
                @endif
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
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Number</th>
                                        <th>Message</th>
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
        ajax: "{{ route('contactus.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex', orderable: false, searchable: false},
            {data: 'name', name: 'name',searchable: true},
            {data: 'email', name: 'email',searchable: true},
            {data: 'subject', name: 'subject'},
            {data: 'number', name: 'number'},
            {data: 'message', name: 'message'},
            {data: 'action', name: 'action'},
        ]
    });
  
});
</script>
@endsection