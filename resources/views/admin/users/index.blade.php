@extends('admin.template.main')

@section('title','Crear usuario')

@section('content')
<a href="{{route('users.create')}}" class="btn btn-info">Registrar nuevo usuario</a><hr>
<table class="table striped">
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Correo</th>
		<th>Tipo</th>
		<th>Accion</th>
	</thead>
	<tbody>
		@foreach($users as $user)
		<tr>
			<td>{{$user->id}}</td>
			<td>{{$user->name}}</td>
			<td>{{$user->email}}</td>
			<td>
				@if($user->type == 'admin')
				<span class="label label-danger">{{$user->type}}</span>						
				@else
				<span class="label label-primary">{{$user->type}}</span>	
				@endif
			</td>
			<td style="display: inline-flex;">
				<a href="{{route('users.edit',$user->id)}}" class="btn btn-danger"><i class="glyphicon glyphicon-pencil"></i></a>
				{!! Form::open(['route'=>["users.destroy",$user->id],'method'=>'DELETE']) !!}
				{!!Form::button('<i class="glyphicon glyphicon-remove-circle"></i>',['type'=>'submit','class'=>'btn btn-warning','onclick'=>'return confirm("Seguro que deseas eliminar este usuario?")'])!!}	
				{!! Form::close() !!}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{!!$users->render()!!}
@endsection