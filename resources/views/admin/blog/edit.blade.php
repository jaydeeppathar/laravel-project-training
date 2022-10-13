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
                    {!! Form::open(['route'=>['blog.update',$blog->id], 'method' => 'POST']) !!}
                        {!! Form::token(); !!}
                            @method('PUT')
                                <div class="form-group">
                                    {!! Form::label('title','Title',['class' => 'form-label']) !!}
                                    {!! Form::text('title', $blog->title,['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('description','Description',['class' => 'form-label']) !!}
                                    {!! Form::text('description',$blog->description,['class' => 'form-control']) !!}
                                </div>
                                <div class="form-group">
                                    {!! Form::label('category_id','Category',['class' => 'form-label']) !!}
                                    {!! Form::select('category_id',$categorys,$blog->category_id, ['class' => 'form-select']) !!}
                                                                       
                                <div>
                                <div class="form-group">
                                    <label>Status : </label><br>
                                    @if($blog->status == 1)
                                        {!! Form::checkbox('status',0,true,['data-off-color' => 'danger','data-on-color' => 'success','data-off-text' => 'Inactive', 'data-on-text' => 'Active','data-bootstrap-switch',]) !!}
                                    @elseif($blog->status == 0)
                                        {!! Form::checkbox('status',0,false,['data-off-color' => 'danger','data-on-color' => 'success','data-off-text' => 'Inactive', 'data-on-text' => 'Active','data-bootstrap-switch',]) !!}
                                    @endif
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
@section('status')
<script type="text/javascript">
    
$("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })
</script>

@endsection
