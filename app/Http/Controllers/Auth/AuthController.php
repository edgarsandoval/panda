<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function login()
    {        
        if(!Auth::check())
            return view('login');
        return redirect()->route('/');
    }

    public function loginUser(Request $request)
    {
        $data = $request->all();

        $rules = array(
            'email' => 'required',
            'password' => 'required',
        );

        $validator = Validator::make($data, $rules);
        if ($validator->fails())
            return back()->withInput(Input::except('password'))->withErrors($validator);

        $userdata = array(
            'email' => $request->input('email'),
            'password'=> $request->input('password')
        );

        if(Auth::validate($userdata) && Auth::attempt($userdata))
        {
            $request->session()->forget('error');
            return redirect()->intended('/');
        }

        session(['error' => 'Usuario o contraseña incorrectos']); 
        return redirect('login');
    }

    public function logout()
    {
        Auth::logout(); // logout user
        return redirect('/'); //redirect back to login
    }
}
