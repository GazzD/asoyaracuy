<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\User;
use App\Payment;
use Auth;
use Validator;
use App\SpecialFee;

class UsersController extends Controller
{
	public function __construct()
    {
        if(Auth::user()->role == 'USER') return redirect(route('home'));
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
    	$specialFee = SpecialFee::where('user_id',$id)->where('status','ENABLED')->first();
    	//var_dump($specialFee);die;
    	$data['user'] = $user;
    	$data['specialFee'] = $specialFee;
    	return $this->back_view('users.detail', $data);
    }
    
	public function store(Request $request)
	{
		$response = "";
	
		$validation = Validator::make($request->all(),[
            'house' => 'required|max:255|unique:users',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

		if($validation->fails()){
	
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
		$data = $this->load_common_data();
		$user = User::find($id);
		$specialFee = SpecialFee::where('user_id',$id)->first();
		$data['user'] = $user;
		$data['specialFee'] = $specialFee;
		
		return $this->back_view('users.update', $data);
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

		$validator = Validator::make($request->all(), [
			'house' => 'required|max:255',
            'email' => 'required|email|max:255',
            'password' => 'min:6|confirmed',
            'phone' => 'required',
            'amount' => 'numeric'
			]);

		if($validator->fails()){
			return redirect(route('admin.user.edit',$id))->withInput()->withErrors($validator);
		}

		$user = User::find($id);
		$user->house = $request->get('house');
		$user->email = $request->get('email');
		$user->phone = $request->get('phone');
		$user->role = $request->get('role');
		if($request->get('password') != null)
			$user->password = bcrypt($request->get('password'));

		$user->save();
		if($request->get('hasSpecialFee')){
			$specialFeeOld = SpecialFee::where('user_id',$id)->first();
			if($specialFeeOld != null){
				$specialFeeOld->status = 'DISABLED';
				$specialFeeOld->save();
			}
			$specialFee = new SpecialFee();
			$specialFee->user_id = $id;
			$specialFee->amount = $request->get('amount');
			$specialFee->status = 'ENABLED';
			$specialFee->save();
		}

		return redirect(route('admin.users'));
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
