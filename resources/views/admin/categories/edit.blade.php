@extends('admin.template.main')

@section('title','Editar categoria '.$category->name)

@section('content')
	{!! Form::open(['route'=>["categories.update",$category->id],'method'=>'PUT']) !!}
		<div class="form-group">
			{!!Form::label('name','Nombre')!!}
			{!!Form::text('name',$category->name,['class'=>'form-control','required','placeholder'=>'Nombre'])!!}
		</div>
		<div class="form-group">
			{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}			
		</div>
	{!! Form::close() !!}
@endsection