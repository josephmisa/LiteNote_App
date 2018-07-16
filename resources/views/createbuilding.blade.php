@extends('layouts.main')


@section('title', 'Add Building')


@section('content')

<br/>

{!! Form::open(array('route' => 'createbuilding', 'class' => 'form', 'files'=>'true')) !!}
<div class="container">
    
<div class="form-group">
    {!! Form::label('Building Name') !!}
    {!! Form::text('buildingname', null,        array('required',
              'class'=>'form-control',
              'placeholder'=>'Building Name')) !!}
</div>



<div class="form-group">
  {!! Form::label('Building Photo') !!}


  {!! Form::file('buildingpics',array('accept'=>'image/*','onchange'=>'previewFile()','required')) !!}
  <br/>
  <img src="../assets/imgholder.png" id="previewImg" style="height:300px; width:300px;" alt="">
</div>


<div class="form-group">
    <button type="submit" class="btn btn-default btn-md">
         <i class="fas fa-plus"></i> Add Building 
        </button>
  
  <!--  {!! Form::submit('Create Building',
      array('class'=>'btn btn-primary')) !!} -->
      
    <a href="{{route('index')}}" class="btn btn-default btn-md">
        <i class="fas fa-arrow-left"></i> Back</a>
        
</div>
</div>
{!! Form::close() !!}


<script type="text/javascript">

function previewFile() {
var preview = document.querySelector('#previewImg');
var file    = document.querySelector('input[type=file]').files[0];
var reader  = new FileReader();

reader.addEventListener("load", function () {
  preview.src = reader.result;
}, false);

if (file) {
reader.readAsDataURL(file);
}
}
</script>


@endsection

@section('scripts')

@endsection

