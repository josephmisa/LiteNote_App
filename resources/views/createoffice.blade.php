@extends('layouts.main')


@section('title', 'Add Office')


@section('content')

{!! Form::open(array('route' => ['createoffice', $id], 'class' => 'form')) !!}
<br/>
<div class="container">

            <div class="form-group">
                {!! Form::label('Office Name') !!}
                {!! Form::text('officename', null,        array('required',
                          'class'=>'form-control',
                          'placeholder'=>'Office Name')) !!}
            </div>
            
         <!--   <div class="form-group">
                {!! Form::label('Office Floor') !!}
                {!! Form::text('floor', null,        array('required',
                          'class'=>'form-control',
                          'placeholder'=>'Office Floor')) !!} -->
                          
                <div class="form-group">
                {!! Form::label('Office Floor') !!}
                {{Form::select('floor',
                [ ''=>'',
                  'Basement' => 'Basement',
                  '1st Floor' => '1st Floor',
                  '2nd Floor' => '2nd Floor',
                  '3rd Floor' => '3rd Floor',
                  '4th Floor' => '4th Floor',

                ], null,['class' => 'form-control'])}}

            </div>

<!--<div class="form-group">
  {!! Form::label('Office Photo') !!}
  {!! Form::file('officepics',array('onchange'=>'previewFile()','required')) !!}
  <br/>
  <img src="../assets/imgholder.png" id="previewImg" style="height:300px; width:300px;" alt="">
</div>

    {!! Form::submit('Create Office!',
      array('class'=>'btn btn-primary')) !!} -->


      <div class="form-group">
     <button type="submit" class="btn btn-default btn-md">
           <i class="fas fa-plus"></i>  Add Office 
     </button>
      
      

    <a href="{{ route('building', ['id' => $id] ) }}" class="btn btn-default"> 
           <i class="fas fa-arrow-left"></i> Back </a>


</div>


{!! Form::close() !!}

@endsection
