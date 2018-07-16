@extends('layouts.main')
@section('title', 'Edit Building')
@section('content')



<br/>
{!! Form::open(array('route' => ['editbuilding',$id], 'class' => 'form' , 'files'=>'true')) !!}
<div class="container">

<div class="form-group">
    {!! Form::label('Building Name') !!}
    {!! Form::text('buildingname', $building->name,        array('required',
              'class'=>'form-control',
              'placeholder'=>'Building Name')) !!}
</div>
<div class="form-group">
  {!! Form::label('Building Name') !!}
  {!! Form::file('buildingpics',
     array('onchange'=>'previewFile()')) !!}


     @if ($building->picture)

    <img src="{{asset('assets/'.$building->picture)}}" id="previewImg" style="height:300px; width:300px;" alt="">

    @else

    <p>No image found</p>

@endif

</div>


<div class="form-group">
    
    <button type="submit" class="btn btn-default btn-md">
          <i class="fas fa-sync"></i> Update Building
        </button>
        
   <!-- {!! Form::submit('Update',
      array('class'=>'btn btn-primary')) !!} -->
      
      
      <a href="{{route('index')}}" class="btn btn-default btn-md"><i class="fas fa-arrow-left">  </i> Back</a>
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
