@extends('admin.template.main')

@section('title','Lista de articulos')

@section('content')
<a href="{{route('articles.create')}}" class="btn btn-info">Registrar nuevo articulo</a>
<!--BUSCADOR PARA ARTICULOS-->
{!! Form::open(['route'=>"articles.index",'method'=>'GET','class'=>'navbar-form pull-right']) !!}
<div class="input-group">
	<span class="input-group-addon" id="search"><i class="glyphicon glyphicon-search"></i></span>
	{!!Form::text('title',null,['class'=>'form-control','placeholder'=>'Buscar articulo','aria-describedby'=>'search'])!!}
</div>	
{!! Form::close() !!}
<!--FIN BUSCADOR PARA ARTICULOS-->
<hr>
<table class="table striped">
	<thead>
		<th>ID</th>
		<th>Titulo</th>		
		<th>Categoria</th>
		<th>Usuario</th>
		<th>Accion</th>
	</thead>
	<tbody>
		@foreach($articles as $article)
		<tr>
			<td>{{$article->id}}</td>
			<td>{{$article->title}}</td>
			<td>{{$article->category->name}}</td>
			<td>{{$article->user->name}}</td>			
			<td style="display: inline-flex;">
				<a href="{{route('articles.edit',$article->id)}}" class="btn btn-danger"><i class="glyphicon glyphicon-pencil"></i></a>
				{!! Form::open(['route'=>["articles.destroy",$article->id],'method'=>'DELETE']) !!}
				{!!Form::button('<i class="glyphicon glyphicon-remove-circle"></i>',['type'=>'submit','class'=>'btn btn-warning','onclick'=>'return confirm("Seguro que deseas eliminar este articulo?")'])!!}	
				{!! Form::close() !!}
			</td>
		</tr>
		@endforeach
	</tbody>
</table>
{!!$articles->render()!!}
@endsection