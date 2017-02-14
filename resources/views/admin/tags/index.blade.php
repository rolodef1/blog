@extends('admin.template.main')

@section('title','Lista de tags')

@section('content')
<a href="{{route('tags.create')}}" class="btn btn-info">Registrar nuevo tag</a>
<!--BUSCADOR PARA TAGS-->
{!! Form::open(['route'=>"tags.index",'method'=>'GET','class'=>'navbar-form pull-right']) !!}
<div class="input-group">
	<span class="input-group-addon" id="search"><i class="glyphicon glyphicon-search"></i></span>
	{!!Form::text('name',null,['class'=>'form-control','placeholder'=>'Buscar tag','aria-describedby'=>'search'])!!}
</div>	
{!! Form::close() !!}
<!--FIN BUSCADOR PARA TAGS-->
<hr>
<table class="table striped">
	<thead>
		<th>ID</th>
		<th>Nombre</th>
		<th>Accion</th>
	</thead>
	<tbody>
		@foreach($tags as $tag)
		<tr>
			<td>{{$tag->id}}</td>
			<td>{{$tag->name}}</td>
			<td style="display: inline-flex;">
				<a href="{{route('tags.edit',$tag->id)}}" class="btn btn-danger"><i class="glyphicon glyphicon-pencil"></i></a>
				{!! Form::open(['route'=>["tags.destroy",$tag->id],'method'=>'DELETE']) !!}
				{!!Form::button('<i class="glyphicon glyphicon-remove-circle"></i>',['type'=>'submit','class'=>'btn btn-warning','onclick'=>'return confirm("Seguro que deseas eliminar este tag?")'])!!}	
				{!! Form::close() !!}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{!!$tags->render()!!}
@endsection