
@extends($adminTheme)

@section('content')
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Show </h1>
                </div>
            </div>
        </div>
    </div>
  <!-- /.content-header -->


      <!-- main row -->
    <div class="container-fluid">
    	<div class="card">
    		<div class="card-body">
    			<div class="row text-right mb-2">
    			<div class="col-md-12">
           			<a href="{{ route('contactus.index')}}" class="btn btn-danger ">Back</a>
    			</div>
    			</div>
				<table class="table table-bordered">
							<tr>
	                            <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Subject</th>
                                <th>Number</th>
                                <th>Message</th>
                                <th>Action</th>
							</tr>
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->description }}</td>
                            <td>{{ $post->category }}</td>
                            <td>{{ $post->status }}</td>
                        </tr>
				</table>    			
    		</div>
    	</div>
	</div>
</div>
@endsection