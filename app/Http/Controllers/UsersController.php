<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class UsersController extends Controller
{
	public function login()
	{
		return view('users.login');
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}
	
	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$response = "";
		$user = User::findByHouse($request->input('house'));
		if($user == null){
	
			$response = "Error, la quinta ya está registrada";
			return view('users.register', ['response' => $response]);
		}
	
	
		$validation =Validator::make($request->all(),User::getRules());
		if($validation->fails())
		{
	
			return redirect()->back()->withInput()->withErrors($validation->messages());
		}
	
		User::create([
				'first_name' => $request->input('first_name'),
				'last_name' => $request->input('last_name'),
				'CI' => $request->input('CI'),
				'phone' => $request->input('phone'),
				'role' => $request->input('role'),
				'house' => $request->input('house'),
				'email' => $request->input('email'),
				'password' => bcrypt($request->input('password')),
		]);
		$response = 'Quinta creada exitosamente';
		/*
		 $Autorid = Auth::id();
		 $action = 'Crear Usuario';
		 $value = $user->house;
		 $this->setHistory($Autorid,$action,$value);*/
	
		return view('admin.home',['response' => $response]);
	}
	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}
	
	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		//
	}
	
	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$user = User::find($id);
		$validation =Validator::make($request->all(),User::getRules());
		if($validation->fails())
		{
	
			return redirect()->back()->withInput()->withErrors($validation->messages());
		}
	}
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		//
	}
}
