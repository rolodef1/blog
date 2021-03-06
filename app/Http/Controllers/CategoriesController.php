<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Category;

class CategoriesController extends Controller
{
	public function index(){
		$categories = Category::orderBy('id','ASC')->paginate(5);
		return view('admin.categories.index')->with('categories',$categories);
	}

	public function create(){
		return view('admin.categories.create');
	}

	public function store(CategoryRequest $request){    	
		$category = new Category($request->all());
		$category->save();
		flash('Categoria creada exitosamente', 'success');
		return redirect()->route('categories.index');
	}

	public function edit($id){
		$category = Category::find($id);
		return view('admin.categories.edit')->with('category',$category);
	}

	public function update(CategoryRequest $request,$id){
		$category = Category::find($id);
		$category->fill($request->all());
		$category->save();
		flash('Categoria actualizada exitosamente', 'success');
		return redirect()->route('categories.index');
	}

	public function destroy($id){
		$category = Category::find($id);
		$category->delete();
		flash('Categoria eliminada exitosamente', 'danger');
		return redirect()->route('categories.index');
	}
}
