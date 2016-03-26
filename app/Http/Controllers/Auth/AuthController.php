<?php

// namespace ....

// use ...

/* IMPORTANT! 
   change namespace "Learnlaravel" in below statements to whatever you have set. 
   If not set then change it to "App" otherwise it will give an error 
   stating LoginRequest not found. */

use Illuminate\Contracts\Auth\Guard;
use App\Http\Requests\Auth\LoginRequest; 
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{

    /**
     * User model instance
     * @var User
     */
    protected $user; 
    
    /**
     * For Guard
     *
     * @var Authenticator
     */
    protected $auth;

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct(Guard $auth, User $user)
    {
        $this->user = $user; 
        $this->auth = $auth;
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'house' => 'required|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    protected function getLogin(){
        dump('xx');die;
    }

    protected function postLogin(LoginRequest $request) {
        if ($this->auth->attempt($request->only('house', 'password'))) {
            return redirect()->route('home');
        }
 
        return redirect('login')->withErrors([
            'house' => 'Nombre de la quinta invalido',
        ]);
    }


    /**
     * Log the user out of the application.
     *
     * @return Response
     */
    protected function getLogout()
    {
        $this->auth->logout();
        return redirect('login');
    }
}
    
