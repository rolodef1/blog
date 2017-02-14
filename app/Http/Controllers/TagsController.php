<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TagRequest;
use App\Tag;

class TagsController extends Controller
{
	public function index(Request $request){
		$tags = Tag::search($request->name)->orderBy('id','ASC')->paginate(5);
		return view('admin.tags.index')->with('tags',$tags);
	}

	public function create(){
		return view('admin.tags.create');
	}

	public function store(TagRequest $request){    	
		$tag = new Tag($request->all());
		$tag->save();
		flash('Tag creado exitosamente', 'success');
		return redirect()->route('tags.index');
	}

	public function edit($id){
		$tag = Tag::find($id);
		return view('admin.tags.edit')->with('tag',$tag);
	}

	public function update(TagRequest $request,$id){
		$tag = Tag::find($id);
		$tag->fill($request->all());
		$tag->save();
		flash('Tag actualizado exitosamente', 'success');
		return redirect()->route('tags.index');
	}

	public function destroy($id){
		$tag = Tag::find($id);
		$tag->delete();
		flash('Tag eliminado exitosamente', 'danger');
		return redirect()->route('tags.index');
	}
}
