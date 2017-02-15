@extends('admin.template.main')

@section('title','Crear articulo')

@section('content')	
	{!! Form::open(['route'=>'articles.store','files'=>true]) !!}
		<div class="form-group">
			{!!Form::label('title','Titulo')!!}
			{!!Form::text('title',null,['class'=>'form-control','required','placeholder'=>'Titulo'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('category_id','Categoria')!!}
			{!!Form::select('category_id',$categories, null ,['class'=>'form-control select-category','required'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('content','Contenido')!!}
			{!!Form::textarea('content',null,['class'=>'form-control textarea-content','required','placeholder'=>'Contenido...'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('tags','Tags')!!}
			{!!Form::select('tags[]',$tags, null ,['class'=>'form-control select-tags','required','multiple'])!!}
		</div>		
		<div class="form-group">
			{!!Form::label('image','Imagen')!!}
			{!!Form::file('image',null,['class'=>'form-control','required','placeholder'=>'Titulo'])!!}
		</div>
		<div class="form-group">
			{!!Form::submit('Agregar articulo',['class'=>'btn btn-primary'])!!}			
		</div>
	{!! Form::close() !!}
@endsection

@section('js')
	<script>
		$(".select-tags").chosen({
			placeholder_text_multiple: 'Seleccione uno o mas tags'

		});

		$('.select-category').chosen({
			placeholder_text_single: 'Seleccione una categoria'
		});

		$('.textarea-content').trumbowyg();
	</script>
@endsection