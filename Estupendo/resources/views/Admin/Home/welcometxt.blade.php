@extends('Admin.adminmain')

@section('content')

<div class="container">
{{Form::open(['route' => 'welcometext.store'])}}
 <div class="box-body">
 <div class="form-group">
 {{Form::label('lscontent', 'Left Side Content:')}}
 {{Form::textarea('lscontent',null,array('class' => 'form-control summernote', 'placeholder'=>'Content'))}}
 </div>
 <div class="form-group">
 {{Form::label('rscontent', 'Right Side Content:')}}
 {{Form::textarea('rscontent',null,array('class' => 'form-control summernote', 'placeholder'=>'Content'))}}
 </div>
 <div class="form-group">
     {{Form::submit('Save',array('class' => 'btn btn-primary btn-sm'))}} </div>
{{Form::close()}} 
</div>
@endsection