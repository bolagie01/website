<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Validator,Redirect,Response;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{

  /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware(['auth', 'verified']);
    // }

    public function dashboard()
    {
      return view ('dashboard');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function registerProcess(Request $request)
   {
       request()->validate([
       'first_name' => 'required',
       'password' => 'required',
       'email' => 'required|email|unique:users',
       'phone' => 'required|unique:users'
       ]);

       $data = $request->all();
       $check = User::create($data);
       return Redirect::to("register")->withSuccess('Great! Form successfully submit with validation.');
   }










}
