@extends($adminTheme)

@section('content')
 <div class="content-wrapper">
      <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Carousel Create</h1>
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
                {!!Form::open(['route' =>'carousel.store', 'method' => 'POST','enctype' => 'multipart/form-data'])!!}
                {!! Form::token('csrf'); !!}
                        {!! Form::label('description','Description',['class' => 'form-label']) !!}
                        {!! Form::text('description',null,['class' => 'form-control']) !!}
                    <div class="form-group">
                        {!! Form::label('name','Name',['class' => 'form-label']) !!}
                        {!! Form::text('name',null,['class' => 'form-control']) !!}
                         <span class="text-danger"> 
                            @error('name')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>    
                    <div class="form-group">
                        {!! Form::label('work','Work',['class' => 'form-label']) !!}
                        {!! Form::text('work',null,['class' => 'form-control']) !!}
                        <span class="text-danger">
                            @error('work')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        {!! Form::label('images','Images',['class' => 'form-label']) !!}
                        {!! Form::file('images',['class' => 'form-control',]) !!}
                        <span class="text-danger">
                            @error('images')
                            {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>  
                {!! Form::close() !!}
           </div>
        </div>


@endsection

