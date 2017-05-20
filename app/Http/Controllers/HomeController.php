<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\CompanyUser;
use App\Company;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {//   Auth::companies()->count()->get();
        // dd(Auth::id());
       // $company = CompanyUser::where('user_id',Auth::id())->get();
        $company = Company::where('user_id',Auth::id())->get();
        return view('home',compact("company"));
    }
}
