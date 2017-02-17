<ul class="collection with-header">
	<li class="collection-header"><h4>{{trans('app.title_categories')}}</h4></li>
	@foreach($categories as $category)
	<li class="collection-item">
		<a href="{{route('front.search.category',$category->name)}}">{{$category->name}}</a>
		<a class="secondary-content"><span class="new badge" data-badge-caption="">{{$category->articles->count()}}</span></a>
	</li>
	@endforeach
</ul>
<ul class="collection with-header">
	<li class="collection-header"><h4>Tags</h4></li>
	@foreach($tags as $tag)
	<li class="collection-item">
		<a href="{{route('front.search.tag',$tag->name)}}">{{$tag->name}}</a>
		<a class="secondary-content"><span class="new badge" data-badge-caption="">{{$tag->articles->count()}}</span></a>
	</li>
	@endforeach
</ul>