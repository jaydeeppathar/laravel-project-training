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
		<div class="card-body row">
            <div class="col-md-12 form-group">
            	{!!Form::open(['route' =>'blog.store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
                    {!! Form::token('csrf'); !!}
                    <div class="row">
                        <div class="form-group col-md-6">
                    		{!! Form::label('title','Title',['class' => 'form-label']) !!}
                    		{!! Form::text('title',null,['class' => 'form-control']) !!}
                        </div>    
                        <div class="form-group col-md-6">
                            {!! Form::label('description','Description',['class' => 'form-label']) !!}
    						{!! Form::text('description',null,['class' => 'form-control']) !!}
                            <span>  
                                @error('description')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>    
                    </div>  
                    <div class="row">
                        <div class="form-group col-md-6">
                            {!! Form::label('categories_id','Categories_id',['class' => 'form-label']) !!}
                            {!! Form::select('category_id', $categorys, null, ['class' => 'form-control']) !!}
                            <span class="text-danger">
                                @error('roll_number')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                         <div class="form-group col-md-6">
                            {{ Form::label('status','Status') }}<span class="text-danger">*</span><br>
                            {!! Form::checkbox('status',1,true,['data-off-color' => 'danger','data-on-color' => 'success','data-off-text' => 'Inactive', 'data-on-text' => 'Active','data-bootstrap-switch',]) !!}
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>  
                    </div>
                {!! Form::close() !!}
			</div>
	   </div>
    </div>
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
    
