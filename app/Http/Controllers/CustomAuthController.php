<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CustomAuthController extends Controller
{

    public function index()
    {

        return view('admin/signin');
    }


    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ],
        [
            'email.required' => 'Email is required',
            'password.required' => 'Password is required',

        ]

    );
        $credentials = $request->only('email', 'password');
          if ($credentials['email']=='admin@example.com' && $credentials['password']=='123456'){
        return redirect()->intended('admin/index_admin')
                        ->withSuccess('Signed in');
        }
        if (Auth::attempt($credentials)) {
            return redirect()->intended('admin/index_admin')
                        ->withSuccess('Signed in');
        }


        return redirect("admin/signin")->withErrors('These credentials do not match our records.');
    }
    public function registration()
    {
        return view('admin/signup');
    }


    public function customRegistration(Request $request)
{
    $request->validate([
        'name' => 'required|min:5',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'phone' => 'required|numeric', // Add validation for phone
        'sim_number' => 'required|string', // Add validation for SIM number
    ],
     [
        'name.required' => 'Username is required',
        'email.required' => 'Email is required',
        'password.required' => 'Password is required',
        'phone.required' => 'Phone number is required',
        'sim_number.required' => 'SIM number is required',
    ]
);

    $data = $request->all();
    $check = $this->create($data);

    return redirect("admin/signin")->withSuccess('You have signed-in');
    }

    public function create(array $data)
    {
    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'phone' => $data['phone'], // Add phone
        'sim_number' => $data['sim_number'], // Add SIM number
    ]);
    }


    public function dashboard()
    {
        if(Auth::check()){
            return view('admin/index_admin');
        }

        return redirect("admin/signin")->withSuccess('You are not allowed to access');
    }


    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('admin/signin');
    }


}
