<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\User;

class UsersController extends Controller
{

	public function index(){
		$users = User::orderBy('id','ASC')->paginate(5);
		return view('admin.users.index')->with('users',$users);
	}

	public function create(){
		return view('admin.users.create');
	}

	public function store(UserRequest $request){    	
		$user = new User($request->all());
		$user->password = bcrypt($request->password);
		$user->save();
		flash('Usuario creado exitosamente', 'success');
		return redirect()->route('users.index');
	}

	public function edit($id){
		$user = User::find($id);
		return view('admin.users.edit')->with('user',$user);
	}

	public function update(UserRequest $request,$id){
		$user = User::find($id);
		$user->fill($request->all());
		$user->save();
		flash('Usuario actualizado exitosamente', 'success');
		return redirect()->route('users.index');
	}

	public function destroy($id){
		$user = User::find($id);
		$user->delete();
		flash('Usuario eliminado exitosamente', 'danger');
		return redirect()->route('users.index');
	}
}
