<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ArticleRequest;
use App\Article;
use App\Image;
use App\Category;
use App\Tag;

class ArticlesController extends Controller
{
	public function index(Request $request){
		$articles = Article::search($request->title)->orderBy('id','DESC')->paginate(5);
		$articles->each(function($articles){
			$articles->category;
			$articles->user;
		});
		return view('admin.articles.index')->with('articles',$articles);
	}

	public function create(){
		$categories = Category::orderBy('name','ASC')->pluck('name','id');
		$tags = Tag::orderBy('name','ASC')->pluck('name','id');
		return view('admin.articles.create')->with('categories',$categories)->with('tags',$tags);
	}

	public function store(ArticleRequest $request){    				
		$article = new Article($request->all());
		$article->user_id = \Auth::user()->id;
		$article->save();
		//CREA RELACION ENTRE ARTICULOS Y TAGS
		$article->tags()->sync($request->tags);
		//CREA IMAGEN Y LA ASOCIA CON EL ARTICULO
		if($request->file('image')){
			$file = $request->file('image');
			$name = 'blog_'.time().'.'.$file->getClientOriginalExtension();		
			$path = public_path().'/images/articles/';
			$file->move($path,$name);
			$image = new Image();
			$image->name = $name;
			$image->article()->associate($article);
			$image->save();
		}		
		flash('Articulo creado exitosamente', 'success');
		return redirect()->route('articles.index');
	}

	public function edit($id){
		$categories = Category::orderBy('name','ASC')->pluck('name','id');
		$tags = Tag::orderBy('name','ASC')->pluck('name','id');
		$article = Article::find($id);
		return view('admin.articles.edit')->with('article',$article)->with('categories',$categories)->with('tags',$tags);
	}

	public function update(ArticleRequest $request,$id){
		$article = Article::find($id);
		$article->fill($request->all());
		$article->save();
		//CREA RELACION ENTRE ARTICULOS Y TAGS
		$article->tags()->sync($request->tags);
		flash('Articulo actualizado exitosamente', 'success');
		return redirect()->route('articles.index');
	}

	public function destroy($id){
		$article = Article::find($id);
		$article->delete();
		flash('Articulo eliminado exitosamente', 'danger');
		return redirect()->route('articles.index');
	}
}
