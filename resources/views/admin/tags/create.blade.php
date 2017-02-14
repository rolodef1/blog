@extends('admin.template.main')

@section('title','Crear tag')

@section('content')	
	{!! Form::open(['route'=>'tags.store']) !!}
		<div class="form-group">
			{!!Form::label('name','Nombre')!!}
			{!!Form::text('name',null,['class'=>'form-control','required','placeholder'=>'Nombre'])!!}
		</div>
		<div class="form-group">
			{!!Form::submit('Registrar',['class'=>'btn btn-primary'])!!}			
		</div>
	{!! Form::close() !!}
@endsection