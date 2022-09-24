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
                    {!! Form::open(['route'=>['carousel.update',$carousel->id], 'method' => 'POST','enctype' => 'multipart/form-data']) !!}
                        {!! Form::token(); !!}
                            @method('PUT')
                                <div class="form-group">
                                    {!! Form::label('description','Description',['class' => 'form-label']) !!}
                                    {!! Form::text('description', $carousel->description,['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('name','Name',['class' => 'form-label']) !!}
                                    {!! Form::text('name',$carousel->name,['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('work','Work',['class' => 'form-label']) !!}
                                    {!! Form::text('work',$carousel->work,['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('images','Images',['class' => ' form-label']) !!}
                                    {!! Form::file('images',['class' => 'form-control']) !!}
                                </div>

                                <div class="form-group mt-2">
                                    <button  type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        {!! Form::close() !!}
                    </div>                
                    </div> 
                </div>        
            </div>
        </div>

      </div>
@endsection