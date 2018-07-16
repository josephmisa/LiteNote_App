@extends('layouts.main')
@section('title', 'Edit Office')
@section('content')

{!! Form::open(array('route' => ['editoffice', 'id' => $id, 'office_id' => $office->id],'method'=>'POST', 'class' => 'form')) !!}

<br/>

<div class="container">

            <div class="form-group">
                {!! Form::label('Office Name') !!}
                {!! Form::text('officename', $office->name,        array('required',
                          'class'=>'form-control',
                          'placeholder'=>'Office Name')) !!}
            </div>
            
           <!-- <div class="form-group">
                {!! Form::label('Office Floor') !!}
                {!! Form::text('floor', $office->floor,        array('required',
                          'class'=>'form-control',
                          'placeholder'=>'Office Floor')) !!} -->
                          
                          
                                <div class="form-group">
                {!! Form::label('Floor') !!}
                {{Form::select('floor',
                [ ''=>'',
                  'Basement' => 'Basement',
                  '1st Floor' => '1st Floor',
                  '2nd Floor' => '2nd Floor',
                  '3rd Floor' => '3rd Floor',
                  '4th Floor' => '4th Floor',

                ], $office->floor,['class' => 'form-control'])}}

            
            </div>

<div class="form-group">
    
    <button type="submit" class="btn btn-default btn-md">
          <i class="fas fa-sync"></i> Update Office
        </button>
    
  <!--  {!! Form::submit('Update Office',
      array('class'=>'btn btn-primary')) !!} -->
 

     <a href="{{ route('building', ['id' => $id] ) }}" class="btn btn-default">
                  <i class="fas fa-arrow-left"></i> Back </a>

     
</div>

{!! Form::close() !!}

@endsection

