@extends('admin.template.main')

@section('title','Lista de categorias')

@section('content')
<a href="{{route('categories.create')}}" class="btn btn-info">Registrar nueva categoria</a><hr>
<table class="table striped">
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Accion</th>
	</thead>
	<tbody>
		@foreach($categories as $category)
		<tr>
			<td>{{$category->id}}</td>
			<td>{{$category->name}}</td>
			<td style="display: inline-flex;">
				<a href="{{route('categories.edit',$category->id)}}" class="btn btn-danger"><i class="glyphicon glyphicon-pencil"></i></a>
				{!! Form::open(['route'=>["categories.destroy",$category->id],'method'=>'DELETE']) !!}
				{!!Form::button('<i class="glyphicon glyphicon-remove-circle"></i>',['type'=>'submit','class'=>'btn btn-warning','onclick'=>'return confirm("Seguro que deseas eliminar esta categoria?")'])!!}	
				{!! Form::close() !!}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{!!$categories->render()!!}
@endsection