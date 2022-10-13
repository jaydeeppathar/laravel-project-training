@extends($adminTheme)

@section('content')
<div class="content-wrapper">
      <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Post Edit</h1>
                </div>
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
  <!-- /.content-header -->


    <!-- main row -->
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    {!! Form::open(['route'=>['category.update',$category->id], 'method' => 'POST']) !!}
                        {!! Form::token(); !!}
                            @method('PUT')
                                <div class="form-group">
                                    {!! Form::label('name','Name',['class' => 'form-label']) !!}
                                    {!! Form::text('name', $category->name,['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group mt-2">
                                    <button  type="submit" class="btn btn-primary">Update</button>
                                </div>
                        {!! Form::close() !!}
                    </div>
                    </div>                
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
