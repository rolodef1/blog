@extends('admin.template.main')

@section('title','Editar usuario '.$user->name)

@section('content')
	{!! Form::open(['route'=>["users.update",$user->id],'method'=>'PUT']) !!}
		<div class="form-group">
			{!!Form::label('name','Nombre')!!}
			{!!Form::text('name',$user->name,['class'=>'form-control','required','placeholder'=>'Nombre completo'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('email','Correo electronico')!!}
			{!!Form::email('email',$user->email,['class'=>'form-control','required','placeholder'=>'example@email.com'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('type','Tipo')!!}
			{!!Form::select('type',[''=>'Seleccione un nivel','member'=>'Miembro','admin'=>'Administrador'], $user->type ,['class'=>'form-control','required'])!!}
		</div>
		<div class="form-group">
			{!!Form::submit('Editar',['class'=>'btn btn-primary'])!!}			
		</div>
	{!! Form::close() !!}
@endsection