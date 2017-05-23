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
use App\UserActivation;
use Illuminate\Support\Facades\Mail;
use App\Mail\VerifyUser;
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
    protected $redirectTo = '/register_info';

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
    public function quickRandom($length = 30)
    {
        $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

        return substr(str_shuffle(str_repeat($pool, 5)), 0, $length);
    }

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

        $tokenData = $this->quickRandom();
        $activationtoken = UserActivation::create([
                'user_id' => $user->id,
                'token' => $tokenData,
            ]);
       // dd($tokenData);
        Mail::to($user->email)->send(new VerifyUser($tokenData,$user->name,$activationtoken->id));

        return $user;
        // return redirect('/reg_info');
        // return redirect()->to('/reg_info');
       // return redirect()->route('reg_info');
    }

    /*public function activate($token, $id){
        $tokendata = UserActivation::where('token',$token)->find($id);
        if($tokendata != null){
            UserActivation::where('id',$tokendata->userid)->delete();            
            $token = User::where('id', $tokendata->user_id)->update([
            'is_activated' => 1            
       ] );
        }
        else{
            return view('redirection');
        }
    }*/
}
