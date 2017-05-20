<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\RoleUser;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Role;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('guest');
    }

    // protected function redirectTo()
    // {
       
    //         return '/seeker_dashboard';
    //    elseif(Auth::user()->role_id == 5)
        

    //    return '/home';
    // }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'role_id' => 'required',
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
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $role = RoleUser::create([
                'role_id' => $data['role_id'],
                'user_id' => $user->id,
            ]);
        if($data['role_id'] == 4){
            Session::put('role_id',$data['role_id']); 
            Session::put('role_name', 'Job Seeker');
        }else if($data['role_id'] == 5){
            Session::put('role_id',$data['role_id']);
            Session::put('role_name', 'Job Provider');
            // Session('role_id');          
        }
        return $user;
    }
}
