<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Provider;
use App\RoleUser;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;

class ProviderController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home/provider';

    public function __construct(){
        $this->middleware('guest:provide');
    }

	public function showRegistrationForm()
   {
    	return view('register_provider');
   }

   // protected function validator(array $data){
        
   //      return Validator::make($data, [
   //          'company' => 'required|string|max:255',
   //          'comp_desc' => 'required|string|max:255',
   //          'name' => 'required|string|max:255',
   //          'email' => 'required|string|email|max:255|unique:users',
   //          'password' => 'required|string|min:6|confirmed', 
   //      ]);

   //  }

	protected function create(Request $request)
   {
        $provider = Provider::create([
            'company' => $request->company,
            'comp_desc' => $request->comp_desc,
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),          
       		]);
        // $roleuser = RoleUser::create([
        //     'role_id' => 5,
        //     'user_id' => $provider->id,
        //     ]);
       return $provider;
    }

 	protected function guard()
   {
    	return Auth::guard('provide');
   }
}
