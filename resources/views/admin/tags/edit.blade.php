@extends('admin.template.main')

@section('title','Editar tag '.$tag->name)

@section('content')
	{!! Form::open(['route'=>["tags.update",$tag->id],'method'=>'PUT']) !!}
		<div class="form-group">
			{!!Form::label('name','Nombre')!!}
			{!!Form::text('name',$tag->name,['class'=>'form-control','required','placeholder'=>'Nombre'])!!}
		</div>
		<div class="form-group">
			{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}			
		</div>
	{!! Form::close() !!}
@endsection