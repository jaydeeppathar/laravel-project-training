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
            	{!!Form::open(['route' =>'product_item.store', 'method' => 'POST', 'enctype' => 'multipart/form-data'])!!}
                    {!! Form::token('csrf'); !!}
                    <div class="row">
                        <div class="form-group col-md-6">
                    		{!! Form::label('name','Name',['class' => 'form-label']) !!}
                    		{!! Form::text('name',null,['class' => 'form-control']) !!}
                        </div>    
                        <div class="form-group col-md-6">
                            {!! Form::label('description','Description',['class' => 'form-label']) !!}
    						{!! Form::text('description',null,['class' => 'form-control']) !!}
                                @error('name')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>    
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            {!! Form::label('discount','Discount',['class' => 'form-label']) !!}
    						{!! Form::text('discount',null,['class' => 'form-control']) !!}
                            <span class="text-danger">
                                @error('roll_number')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group col-md-6">
                            {!! Form::label('price','Price',['class' => 'form-label']) !!}
                            {!! Form::text('price',null,['class' => 'form-control']) !!}
                            <span class="text-danger">
                                @error('roll_number')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            {!! Form::label('product_categories_id','product_categories_id',['class' => 'form-label']) !!}
                            {!! Form::text('product_categories_id',null,['class' => 'form-control']) !!}
                            <span class="text-danger">
                                @error('roll_number')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                        <div class="form-group col-md-3">
                            {!! Form::label('image','Image',['class' => 'form-label']) !!}
                            {!! Form::file('image',['class' => 'form-control',]) !!}
                            <span class="text-danger">
                                @error('image')
                                {{ $message }}
                                @enderror
                            </span>
                        </div>
                    </div>
                    <div class="row">
                         <div class="form-group">
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


@endsection
@section('status')
<script type="text/javascript">
    
$("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })
</script>

@endsection
    
