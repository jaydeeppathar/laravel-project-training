@extends($adminTheme)

@section('content')
 <div class="content-wrapper">
      <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Post Create</h1>
                </div>
            </div>
        </div>
    </div>
  <!-- /.content-header -->
      <!-- main row -->
    <div class="container-fluid">
	<div class="card">
		<div class="card-body">
            	{!!Form::open(['route' =>'category.store', 'method' => 'POST'])!!}
                {!! Form::token('csrf'); !!}
                        {!! Form::label('name','Name',['class' => 'form-label']) !!}
						{!! Form::text('name',null,['class' => 'form-control']) !!}
                        <span class="text-danger">
                            @error('roll_number')
                            {{ $name }}
                            @enderror
                        </span>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>  
                {!! Form::close() !!}
	       </div>
		</div>
    </div>
</div>

@endsection
    
