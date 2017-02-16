@extends('front.template.main')

@section('title',$article->title) 

@section('content')
<div class="row">
	<div class="col s12 m8">
		<h3>{{$article->title}}</h3>
		{!!$article->content!!}
	</div>
	<div class="col s12 m4">
		@include('front.template.partials.aside')
	</div>
	@endsection