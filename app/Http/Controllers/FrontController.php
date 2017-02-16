<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Category;
use App\Tag;
use Carbon\Carbon;

class FrontController extends Controller
{
	protected function __constructor(){
		Carbon::setLocale('es');
	}

	public function index(){
		$articles = Article::limit(6)->orderBy('id','DESC')->get();
		$articles->each(function($articles){
			$articles->category;
			$articles->images;
		});
		return view('front.index')->with('articles',$articles);
	}

	public function searchCategory($name){
		$category = Category::SearchCategory($name)->first();
		$articles = $category->articles;
		$articles->each(function($articles){
			$articles->category;
			$articles->images;
		});
		return view('front.index')->with('articles',$articles);
	}

	public function searchTag($name){
		$tag = Tag::SearchTag($name)->first();
		$articles = $tag->articles;
		$articles->each(function($articles){
			$articles->category;
			$articles->images;
		});
		return view('front.index')->with('articles',$articles);
	}

	public function viewArticle($slug){
		$article = Article::findBySlugOrFail($slug);
		$article->category;
		$article->user;
		$article->tags;
		$article->images;
		return view('front.article')->with('article',$article);
	}

}
