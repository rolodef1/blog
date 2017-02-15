@extends('admin.template.main')

@section('title','Editar articulo')

@section('content')	
	{!! Form::open(['route'=>["articles.update",$article->id],'method'=>'PUT']) !!}
		<div class="form-group">
			{!!Form::label('title','Titulo')!!}
			{!!Form::text('title',$article->title,['class'=>'form-control','required','placeholder'=>'Titulo'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('category_id','Categoria')!!}
			{!!Form::select('category_id',$categories, $article->category->id ,['class'=>'form-control select-category','required'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('content','Contenido')!!}
			{!!Form::textarea('content',$article->content,['class'=>'form-control textarea-content','required','placeholder'=>'Contenido...'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('tags','Tags')!!}
			{!!Form::select('tags[]',$tags, $article->tags->pluck('id')->toArray() ,['class'=>'form-control select-tags','required','multiple'])!!}
		</div>		
		<div class="form-group">
			{!!Form::submit('Editar articulo',['class'=>'btn btn-primary'])!!}			
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