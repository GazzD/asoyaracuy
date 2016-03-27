<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\User;
use App\Payment;
use Auth;

class UsersController extends Controller
{
	public function login()
	{
		return view('frontend.users.login');
	}
	
	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$data = $this->load_common_data();
		return $this->back_view('users.create', $data);
	}
	
	public function index() {
    	$data = $this->load_common_data();
    	$users = User::all();
    	$data['users'] = $users;
    	return $this->back_view('users.list', $data);
    }
    
    public function detail($id) {
    	$data = $this->load_common_data();
    	$user = User::find($id);
    	$data['user'] = $user;
    	return $this->back_view('users.detail', $data);
    }
    
	public function store(Request $request)
	{
		$response = "";
		$user = User::find_by_house($request->input('house'));
		if($user == null){
	
			$response = "Error, la quinta no está registrada";
			return view('users.register', ['response' => $response]);
		}
	
	
		$validation = Validator::make($request->all(),User::getRules());
		if($validation->fails())
		{
	
			return redirect()->back()->withInput()->withErrors($validation->messages());
		}
	
		User::create([
				'balance' => 0,
				'email' => $request->input('email'),
				'house' => $request->input('house'),
				'password' => bcrypt($request->input('password')),
				'phone' => $request->input('phone'),
				'role' => $request->input('role'),
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
	public function profile()
	{
		$user = Auth::user();
		// dump($user);die;
		$payments = Payment::get_payments_from_user($user->id);
		$data['user'] = $user;
		$data['payments'] = $payments;
		
		return $this->front_view('users.profile', $data);
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
	public function update(Request $request)
	{
		$id = $request->get('id');
		$user = User::find($id);

		$this->validate($request, [
	        'email' => 'required|email',
	        'phone' => 'required',
	        'password' => 'confirmed'
	    ]);

		$user->email = $request->get('email');
		$user->phone = $request->get('phone');
		dump($user);die;
		if($request->get('password') != null)
			$user->password = $request->get('password');

		$user->save();
		return redirect(route('profile'));

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
