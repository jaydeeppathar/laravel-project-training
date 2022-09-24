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
            	{!!Form::open(['route' =>'post.store', 'method' => 'POST'])!!}
                {!! Form::token('csrf'); !!}
                		{!! Form::label('title','Title',['class' => 'form-label']) !!}
						{!! Form::text('title',null,['class' => 'form-control']) !!}
                    <div class="form-group">
                        {!! Form::label('description','Description',['class' => 'form-label']) !!}
						{!! Form::text('description',null,['class' => 'form-control']) !!}
                            @error('name')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>    
                    <div class="form-group">
                        {!! Form::label('category','Category',['class' => 'form-label']) !!}
						{!! Form::text('category',null,['class' => 'form-control']) !!}
                        <span class="text-danger">
                            @error('roll_number')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                     <div class="form-group">
                        {{ Form::label('status','Status') }}<span class="text-danger">*</span><br>
                        {!! Form::checkbox('status',1,true,['data-off-color' => 'danger','data-on-color' => 'success','data-off-text' => 'Inactive', 'data-on-text' => 'Active','data-bootstrap-switch',]) !!}
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>  
                {!! Form::close() !!}
	       </div>
		</div>


@endsection
@section('status')
<script type="text/javascript">
    
$("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })
</script>

@endsection
    
