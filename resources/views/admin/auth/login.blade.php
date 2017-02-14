@extends('admin.template.main')

@section('title','Login')

@section('content')
{!! Form::open(['route'=>'auth.login','method'=>'POST']) !!}
	<div class="form-group">
		{!!Form::label('email','Email')!!}
		{!!Form::email('email',null,['class'=>'form-control','required','placeholder'=>'example@email.com'])!!}
	</div>
	<div class="form-group">
		{!!Form::label('password','Password')!!}
		{!!Form::password('password',['class'=>'form-control','required','placeholder'=>'*********'])!!}
	</div>
	<div class="form-group">
		{!!Form::submit('Ingresar',['class'=>'btn btn-primary'])!!}			
	</div>
{!! Form::close() !!}
@endsection