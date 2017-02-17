@extends('front.template.main')

@section('title','Bit a Bit') 

@section('content')
<div class="row">
	<div class="col s12 m8">
		<div class="row">
		<h3>{{trans('app.title_last_articles')}}</h3>
		<h4>{{trans('app.welcome',['name'=>'Isaac'])}}</h4>
			@foreach($articles as $article)
			<div class="col s6 m4">
				<div class="card">
					<div class="card-image">
						<a href="{{route('front.view.article',$article->slug)}}"><img src="/images/articles/{{$article->images[0]->name}}"></a>			
					</div>
					<div class="card-content">
						<span class="card-title"><a href="{{route('front.view.article',$article->slug)}}">{{$article->title}}</a></span>
					</div>
					<div class="card-action">
						<a href="{{route('front.search.category',$article->category->name)}}">{{$article->category->name}}</a>
						<a href="#">{{$article->category->created_at->diffForHumans()}}</a>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
	<div class="col s12 m4">
		@include('front.template.partials.aside')
	</div>
</div>
@endsection